<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Food</title>

    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Success Message -->
      {{-- code by Nowshin Jerin Eza --}}
      @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #e9f7ef;
            border: 2px solid #28a745;
            border-radius: 8px;
        }

        .form-title {
            text-align: center;
            color: #28a745;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #28a745;
        }

        .form-control {
            border: 2px solid #28a745;
            border-radius: 4px;
        }

        .btn-green {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        .btn-green:hover {
            background-color: #218838;
        }

        .btn-secondary {
            background-color: #616466;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 48%;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1 class="form-title">Create New Food</h1>

    <form action="{{ route('admin.foods.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Food Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn-green">Create Food</button>
    </form>

    <!-- Button Group {{-- code by Nowshin Jerin Eza --}}-->
    <div class="button-group">
        <a href="{{ route('admin.dashboard') }}" class="btn-secondary">Back to Dashboard</a>
        <a href="{{ route('admin.foods.index') }}" class="btn-secondary">Back to Manage Foods</a>
    </div>
</div>

</body>
</html>
