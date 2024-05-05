<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

  
    public function updateStatus(Request $request)
    {

      
        // Validate the incoming request
        $request->validate([
            'selectedProducts' => 'required|array',
            'selectedProducts.*' => 'exists:products,id',
            'status' => 'required|boolean',
        ]);
    
        // Update the status of selected products
        Product::whereIn('id', $request->selectedProducts)
               ->update(['status' => $request->status]);
    
        // Optionally, you can redirect the user after successful update
        return redirect()->route('products.index')->with('success', 'Status updated successfully.');
    }
    


    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            // Add validation rules for other fields
        ]);

        // Create a new product instance
        $product = new Product();
        
        // Assign values from the request to the product instance
        $product->name = $request->name;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->date = $request->date;
        $product->date_modified = $request->date_modified;
        $product->categories = $request->categories;
        $product->tags = $request->tags;
        // $product->image = $request->image;
        $product->reviews = $request->reviews;
        $product->stock = $request->stock;
        $product->weight = $request->weight;
        $product->dimensions = $request->dimensions;
        $product->price = $request->price;
        $product->buy = $request->buy;

        if($request->hasfile('image')){
           
            $destination = 'public/product/product_image';
            $product_image = $request->file('image');
            $productimage = uniqid().$product_image->getClientOriginalName();
            $path = $product_image->storeAs($destination,$productimage);
    
            $product->image = $productimage;
        }    


        // Assign other fields similarly

        // Save the product to the database
        $product->save();

        // Optionally, you can redirect the user after successful submission
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product = Product::findOrFail($id);
        return view('product.update', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            // Add validation rules for other fields
        ]);
    
        // Find the product by its ID
        $product = Product::findOrFail($id);
        
        // Update the product with new values from the request
        $product->name = $request->name;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->date = $request->date;
        $product->date_modified = $request->date_modified;
        $product->categories = $request->categories;
        $product->tags = $request->tags;
        $product->reviews = $request->reviews;
        $product->stock = $request->stock;
        $product->weight = $request->weight;
        $product->dimensions = $request->dimensions;
        $product->price = $request->price;
        $product->buy = $request->buy;
    
        if($request->hasfile('image')){
            $destination = 'public/product/product_image';
            $product_image = $request->file('image');
            $productimage = uniqid().$product_image->getClientOriginalName();
            $path = $product_image->storeAs($destination,$productimage);
            $product->image = $productimage;
        }    
    
        // Save the updated product to the database
        $product->save();
    
        // Redirect the user after successful update
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
