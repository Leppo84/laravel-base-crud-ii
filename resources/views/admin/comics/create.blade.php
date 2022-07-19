@extends('front.template.base')

@section('mainContent')
<h1>Insert a new Comic</h1>

<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label class="form-label" for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title">
        @error('title')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">Description</label>
        <input class="form-control" type="text" name="description" id="description">
        @error('description')
        <div class="alert alert-danger mt-2" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="thumb">Image address</label>
        <input class="form-control" type="text" name="thumb" id="thumb">
        @error('thumb')
        <div class="alert alert-danger mt-2" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        {{-- tipo numero o stringa ? --}}
        <input class="form-control" type="text" name="price" id="price">
        @error('price')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="series">Series</label>
        <input class="form-control" type="text" name="series" id="series">
        @error('series')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="sale_date">Sale date</label>
        <input class="form-control" type="date" name="sale_date" id="sale_date">
        @error('sale_date')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="type">Type</label>
        <input class="form-control" type="number" name="type" id="type" step="0.01">
        @error('type')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection