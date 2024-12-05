<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>

    <!-- Include Bootstrap CSS 
    {{-- code by Nowshin Jerin Eza --}}-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-container .form-control {
            margin-bottom: 10px;
        }

        .form-container .btn {
            width: 100%;
        }

        .alert {
            margin-bottom: 20px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-secondary {
            background-color: #7e7f81;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 48%;
        }

        .btn-secondary:hover {
            background-color: #3b6a9a;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="form-container">
        <h1>Edit Food</h1>

        <form action="{{ route('admin.foods.update', $food->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Food Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $food->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $food->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $food->price) }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($food->image)
                    <img src="{{ asset('storage/' . $food->image) }}" alt="Food Image" style="width: 100px; margin-top: 10px;">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Update Food</button>
        </form>

        <!-- Button Group -->
        <div class="button-group">
            <a href="{{ route('admin.dashboard') }}" class="btn-secondary">Back to Dashboard</a>
            <a href="{{ route('admin.foods.index') }}" class="btn-secondary">Back to Manage Foods</a>
        </div>
    </div>
</div>

</body>
</html>
