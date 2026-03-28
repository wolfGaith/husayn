<h2>Edit Book</h2>

<form method="POST" action="{{ route('books.update', $book->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $book->title }}"><br>
    <input type="text" name="author" value="{{ $book->author }}"><br>
    <input type="number" name="year_published" value="{{ $book->year_published }}"><br>

    <button type="submit">Update</button>
</form>
