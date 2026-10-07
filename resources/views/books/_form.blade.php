<div>
    <label>Judul</label><br>
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}">
    @error('title') <small style="color:red">{{ $message }}</small> @enderror
</div>
<div>
    <label>ISBN</label><br>
    <input type="text" name="isbn" value="{{ old('isbn', $book->isbn ?? '') }}">
    @error('isbn') <small style="color:red">{{ $message }}</small> @enderror
</div>
<div>
    <label>Penulis</label><br>
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}">
    @error('author') <small style="color:red">{{ $message }}</small> @enderror
</div>
<div>
    <label>Penerbit</label><br>
    <input type="text" name="publisher" value="{{ old('publisher', $book->publisher ?? '') }}">
</div>
<div>
    <label>Tahun Terbit</label><br>
    <input type="number" name="published_year" value="{{ old('published_year', $book->published_year ?? '') }}">
</div>
<div>
    <label>Harga</label><br>
    <input type="number" name="price" value="{{ old('price', $book->price ?? '') }}">
    @error('price') <small style="color:red">{{ $message }}</small> @enderror
</div>
<div>
    <label>Stok</label><br>
    <input type="number" name="stock" value="{{ old('stock', $book->stock ?? 0) }}">
    @error('stock') <small style="color:red">{{ $message }}</small> @enderror
</div>
<div>
    <label>Deskripsi</label><br>
    <textarea name="description">{{ old('description', $book->description ?? '') }}</textarea>
</div>