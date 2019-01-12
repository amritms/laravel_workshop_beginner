@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">Simple Product Store</div>
        @if(Session::has('success'))
            <strong class="alert alert-success">{{ Session::get('success') }}</strong>
        @endif
        <div class="links  float-right"><a href="{{url('products/create')}}" class="btn btn-primary">Add Product</a></div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Count</th>
                <th>Price</th>
                <th>Owner</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>

                @forelse($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->owner->name}}</td>
                        <th><a href="{{ url('products/'. $product->id .'/edit')}}">Edit</a>

                            <form action="{{url('products/' . $product->id)}}" method="post" onClick="return confirm('Do you want to delete it?')">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit">Delete</button>
                            </form>
                        </th>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Sorry no records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
{{--        {!! $products->links() !!}--}}
    </div>
@endsection