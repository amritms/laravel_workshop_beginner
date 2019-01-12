@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%">
        <form action="{{url('products/' . $product->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            <h1>Enter Details to create a product</h1>
            @csrf()
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control @if($errors->first('name')) border border-danger @endif" type="text" name="name" title="name" value="{{old('name', isset($product) ? $product->name : null)}}"/>
                {!! $errors->first('name', '<label class="control-label text-danger">:message</label>') !!}
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control  @if($errors->first('description')) border border-danger @endif" type="text" name="description" title="Description" value="{{old('description', $product->description)}}">
                {!! $errors->first('description', '<label class="control-label text-danger">:message</label>') !!}
            </div>

            <div class="form-group">
                <label for="count">Count</label>
                <input class="form-control  @if($errors->first('count')) border border-danger @endif" type="number" name="count" title="Count" value="{{old('count', $product->count)}}">
                {!! $errors->first('count', '<label class="control-label text-danger">:message</label>') !!}
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control  @if($errors->first('price')) border border-danger @endif" type="number" name="price" title="Price" value="{{old('price', $product->price)}}">
                {!! $errors->first('price', '<label class="control-label text-danger">:message</label>') !!}
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection