<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles */
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>

<!-- Form Container -->
<div class="container form-container">
    <!-- Product Form -->
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <!-- Product Fields -->
                <div class="form-group">
                    <label for="name">Product Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Additional Fields -->
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" class="form-control" id="summary" name="summary" value="{{ old('summary') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="date_modified">Date Modified:</label>
                    <input type="date" class="form-control" id="date_modified" name="date_modified" value="{{ old('date_modified') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="categories">Categories:</label>
                    <input type="text" class="form-control" id="categories" name="categories" value="{{ old('categories') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="tags">Tags:</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="reviews">Reviews:</label>
                    <input type="text" class="form-control" id="reviews" name="reviews" value="{{ old('reviews') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="weight">Weight:</label>
                    <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="dimensions">Dimensions:</label>
                    <input type="text" class="form-control" id="dimensions" name="dimensions" value="{{ old('dimensions') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Another set of fields -->
                <div class="form-group">
                    <label for="buy">Buy:</label>
                    <input type="text" class="form-control" id="buy" name="buy" value="{{ old('buy') }}">
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6">
               
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="number" class="form-control" id="status" name="status" value="{{ old('status', 0) }}">
                </div>
            </div>
            <div class="col-md-6">
               
                <div class="form-group">
                    <label for="seen">Seen:</label>
                    <input type="number" class="form-control" id="seen" name="seen" value="{{ old('seen', 0) }}">
                </div>
            </div>
        </div> -->
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
