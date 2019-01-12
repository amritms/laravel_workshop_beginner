@extends('layouts.app')

@section('content')
    <div class="container" style="width: 50%">
        <form action="{{url('products')}}" method="post">
            <h1>Enter Details to create a product</h1>
            @csrf()
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" title="name"/>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input class="form-control" type="text" name="description" title="Description">
            </div>

            <div class="form-group">
                <label for="count">Count</label>
                <input class="form-control" type="number" name="count" title="Count">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" title="Price">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection