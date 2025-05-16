@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Perbarui Buku</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book.update', $book->id) }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror"
                                placeholder="Nama Buku" name="name" value="{{ $book->name }}">
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control @error('category_id') isinvalid @enderror" name="category_id">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $book->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <select class="form-control @error('auther_id') isinvalid @enderror" name="author_id">
                                <option value="">Pilih Penulis</option>
                                @foreach ($authors as $auther)
                                    <option value="{{ $auther->id }}"
                                        {{ $auther->id == $book->auther_id ? 'selected' : '' }}>
                                        {{ $auther->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('auther_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <select class="form-control @error('publisher_id') isinvalid @enderror" name="publisher_id">
                                <option value="">Pilih Penerbit</option>
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->id }}"
                                        {{ $publisher->id == $book->publisher_id ? 'selected' : '' }}>
                                        {{ $publisher->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('publisher_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Perbarui">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
