@extends('includes.master')

@section('title','All Products')

@section('content')

    @parent
    <table class="table">
      <thead>
        <tr>
          <th># Product Id</th>
          <th>Product Name</th>
          <th>Marked Price</th>
          <th>Selling Price</th>
          <th>Category</th>
          <th>Brand</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->product_name }}</td>
          <td>{{ $product->marked_price }}</td>
          <td>{{ $product->selling_price }}</td>
          <td>{{ $product->category_name }}</td>
          <td>{{ $product->brand_name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection
