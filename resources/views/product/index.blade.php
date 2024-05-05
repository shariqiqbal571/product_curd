<h1>Products List</h1>

<form method="POST" action="{{ route('product.updateStatus') }}">
    @csrf
    @method('PUT')

    <button type="submit">Update Status</button>

    <table class="table">
        <thead>
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th>Name</th>
                <th>Description</th>
                <th>Summary</th>
                <th>Date</th>
                <th>Date Modified</th>
                <th>Categories</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Reviews</th>
                <th>Stock</th>
                <th>Weight</th>
                <th>Dimensions</th>
                <th>Price</th>
                <th>Buy</th>
                <th>Actions</th> <!-- Add this header for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td><input type="checkbox" name="selectedProducts[]" value="{{ $product->id }}"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->summary }}</td>
                <td>{{ $product->date }}</td>
                <td>{{ $product->date_modified }}</td>
                <td>{{ $product->categories }}</td>
                <td>{{ $product->tags }}</td>
                <td><img src="{{ asset('storage/product/product_image/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100px;"></td>
                <td>{{ $product->reviews }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->weight }}</td>
                <td>{{ $product->dimensions }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->buy }}</td>
                <td>
                <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                    <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <label for="status">Change Status:</label>
    <select name="status" id="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</form>

<script>
    // Select All checkbox functionality
    const selectAllCheckbox = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');

    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
</script>
