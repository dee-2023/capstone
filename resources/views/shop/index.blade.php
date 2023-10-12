@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product List') }}</div>

                <div class="card-body">

                <button onclick="addProduct()" class="btn btn-primary">Add Product</button> 
      
@if (session('status'))
   <div class="alert alert-success">
    {{ session('status') }}
   </div>
@endif

@if (session('message'))
    <div class="alert alert-danger">
    {{ session('message') }}
    </div>
@endif
                
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product name</th>
      <th scope="col">Country</th>
      <th scope="col">Price</th>
 
    </tr>
  </thead>
  <tbody>
 
  @if ($products)
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->product_name }}</td>
      <td>{{ $product->Country }}</td>
      <td>{{ $product->price }}</td>
      <td> 
      <button onclick="editProduct('{{ $product->id }}')" class="btn btn-primary">edit</button> 
      <button onclick="viewProduct('{{ $product->id }}')"  class="btn btn-success">view</button> 
      <button onclick="deleteProduct('{{ $product->id }}')" class="btn btn-danger">delete</button>  
    </td>
    </tr>
    @endforeach

  @endif

  </tbody>
</table>

       

                </div>
            </div>
        </div>
    </div>
</div>

<script>

  function editProduct(id){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-main/shop/edit/" + id;
  }

  function viewProduct(id){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-main/shop/view/" + id;
  }

  function deleteProduct(id){
    if(confirm("Are you sure to delete this product?") == true){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-main/shop/delete/" + id;
    } 
  }

  function addProduct(){
    window.location.href = "<?php echo env('APP_URL'); ?>/capstone-main/shop/create";
  }

</script>

@endsection
