<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add book</title>
</head>
<body>
        <h2>Add Book</h2>

<form method="POST" action="{{ route('books.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="author" placeholder="Author"><br>
    <input type="number" name="year_published" placeholder="Year"><br>
    <button type="submit">Add</button>
</form>

<hr>

<h2>Books</h2>

@foreach($books as $book)
    <p>
        {{ $book->title }} - {{ $book->author }}

        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

        <form method="POST" action="{{ route('books.destroy', $book->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach
</body>
</html>
