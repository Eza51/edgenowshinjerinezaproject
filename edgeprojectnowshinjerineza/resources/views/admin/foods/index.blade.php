<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Foods</title>

    <!-- Include Bootstrap & jQuery CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- Success Message -->
      @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <style>
        .food-table {
            width: 100%;
            border-collapse: collapse;
        }
        .food-table th, .food-table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .food-table th {
            background-color: #f4f4f4;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .button {
            padding: 5px 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        .button.edit-button {
            background-color: #28a745;
        }
        .button.delete-button {
            background-color: #dc3545;
        }
        .button:hover {
            opacity: 0.8;
        }
        .food-image {
            width: 100px;
            height: auto;
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
    <h1 class="page-title">Manage Foods</h1>

    <!-- Create New Food Button -->
    <a href="{{ route('admin.foods.create') }}" class="button create-food-button">Create New Food</a>

    <!-- Food Table {{-- code by Nowshin Jerin Eza --}}-->
    <div class="table-container mt-4">
        <table class="food-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($foods->count() > 0)
                    @foreach ($foods as $food)
                        <tr>
                            <td>{{ $food->id }}</td>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->description }}</td>
                            <td>${{ number_format($food->price, 2) }}</td>
                            <td>
                                @if($food->image)
                                    <img src="{{ asset('storage/' . $food->image) }}" alt="Food Image" class="food-image">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td class="actions">
                                <a href="{{ route('admin.foods.edit', $food->id) }}" class="button edit-button">Edit</a>
                                <form action="{{ route('admin.foods.destroy', $food->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $food->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $food->id }})">Delete</button>
                                </form>
          
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No food items available.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
                          <!-- Button Group -->
                          <div class="button-group">
                            <a href="{{ route('admin.dashboard') }}" class="btn-secondary">Back to Dashboard</a>
                            <a href="{{ route('admin.foods.index') }}" class="btn-secondary">Back to Manage Foods</a>
                        </div>
    <script>
        function confirmDelete(foodId) {
            // Ask the user for confirmation before deleting
            if (confirm("Are you sure you want to delete this food item?")) {
                // If confirmed, submit the delete form{{-- code by Nowshin Jerin Eza --}}
                document.getElementById('delete-form-' + foodId).submit();
            }
        }
    </script>
    

    <!-- Pagination -->
    <div class="pagination-container">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link {{-- code by Nowshin Jerin Eza --}}-->
                <li class="page-item {{ $foods->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $foods->previousPageUrl() }}">Previous</a>
                </li>

                <!-- Pagination Links {{-- code by Nowshin Jerin Eza --}}-->
                @foreach ($foods->links()->elements[0] as $page => $url)
                    <li class="page-item {{ $foods->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Next Page Link{{-- code by Nowshin Jerin Eza --}} -->
                <li class="page-item {{ $foods->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $foods->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
{{-- code by Nowshin Jerin Eza --}}
</body>
</html>
