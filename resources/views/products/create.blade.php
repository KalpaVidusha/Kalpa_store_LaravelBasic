<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Register New Product</h4>
                    </div>
                    <div class="card-body">
                        <p><a href="{{ route('products.index') }}" class="text-decoration-none"> Back to Product List</a></p>

                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Product Name:</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Category:</label>
                                <input type="text" name="category" value="{{ old('category') }}" class="form-control @error('category') is-invalid @enderror">
                                @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Price:</label>
                                <input type="text" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" placeholder="0.00">
                                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label font-weight-bold">Quantity:</label>
                                <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control @error('quantity') is-invalid @enderror" placeholder="0">
                                @error('quantity') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <button type="submit" class="btn btn-success w-100">Save Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>