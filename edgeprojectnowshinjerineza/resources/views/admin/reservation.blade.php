<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="page-title">Manage Reservations</h1>

    <!-- Success Message -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <style>
        .btn-secondary {
            background-color: #7e7f81;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 20%;
            margin-left: 200px;
        }

        .btn-secondary:hover {
            background-color: #3b6a9a;
        }
    </style>

    <!-- Reservations Table -->
    <div class="table-container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Reservation Date</th>
                    <th>Special Requests</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($reservations->count() > 0)
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>
                                <form action="{{ route('admin.reservation.delete', $reservation->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $reservation->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $reservation->id }})">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">No reservations available.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination-container">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link -->
                <li class="page-item {{ $reservations->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $reservations->previousPageUrl() }}">Previous</a>
                </li>

                <!-- Pagination Links -->
                @foreach ($reservations->links()->elements[0] as $page => $url)
                    <li class="page-item {{ $reservations->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                <!-- Next Page Link -->
                <li class="page-item {{ $reservations->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $reservations->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

                          <!-- Button Group -->
                          <div class="button-group">
                            <a href="{{ route('admin.dashboard') }}" class="btn-secondary">Back to Dashboard</a>
                            
                        </div>
<script>
    function confirmDelete(reservationId) {
        if (confirm("Are you sure you want to delete this reservation?")) {
            // Submit the form using the unique ID
            document.getElementById('delete-form-' + reservationId).submit();
        }
    }
</script>


</body>
</html>
