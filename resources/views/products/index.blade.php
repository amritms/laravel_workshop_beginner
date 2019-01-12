@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">Simple Product Store</div>
        <div class="links  float-right"><a href="{{url('products/create')}}" class="btn btn-primary">Add Product</a></div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Count</th>
                <th>Price</th>
            </tr>
            </thead>

            <tbody>

                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection