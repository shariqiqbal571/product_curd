<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Form Container -->
<div class="container mt-5">
    <!-- Product Form -->
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <!-- Product Fields -->
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Additional Fields -->
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description', $product->description) }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Summary -->
                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" class="form-control" id="summary" name="summary" value="{{ old('summary', $product->summary) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Date -->
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $product->date) }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Date Modified -->
                <div class="form-group">
                    <label for="date_modified">Date Modified:</label>
                    <input type="date" class="form-control" id="date_modified" name="date_modified" value="{{ old('date_modified', $product->date_modified) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Categories -->
                <div class="form-group">
                    <label for="categories">Categories:</label>
                    <input type="text" class="form-control" id="categories" name="categories" value="{{ old('categories', $product->categories) }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Tags -->
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $product->tags) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Image -->
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                @if($product->image)
            <img src="{{ asset('storage/product/product_image/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100px;"></td>
    
        @endif  
            </div>
      
      </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Reviews -->
                <div class="form-group">
                    <label for="reviews">Reviews:</label>
                    <input type="text" class="form-control" id="reviews" name="reviews" value="{{ old('reviews', $product->reviews) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Stock -->
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Weight -->
                <div class="form-group">
                    <label for="weight">Weight:</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight', $product->weight) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Dimensions -->
                <div class="form-group">
                    <label for="dimensions">Dimensions:</label>
                    <input type="text" class="form-control" id="dimensions" name="dimensions" value="{{ old('dimensions', $product->dimensions) }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Buy -->
                <div class="form-group">
                    <label for="buy">Buy:</label>
                    <input type="text" class="form-control" id="buy" name="buy" value="{{ old('buy', $product->buy) }}">
                </div>
            </div>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
