@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%">
        @if($errors->all())
            <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{url('products/' . $product->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <h1>Enter Details to create a product</h1>
            @csrf()
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" title="name" value="{{old('name', isset($product) ? $product->name : null)}}"/>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" title="Description" value="{{old('description', $product->description)}}">
            </div>

            <div class="form-group">
                <label for="count">Count</label>
                <input class="form-control" type="number" name="count" title="Count" value="{{old('count', $product->count)}}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" title="Price" value="{{old('price', $product->price)}}">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection