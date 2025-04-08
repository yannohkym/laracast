<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">List of Books</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Published Date</th>
                    <th>Price ($)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key => $book)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->description ?? 'N/A' }}</td>
                        <td>{{ $book->published_at ?? 'N/A' }}</td>
                        <td>${{ number_format($book->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
