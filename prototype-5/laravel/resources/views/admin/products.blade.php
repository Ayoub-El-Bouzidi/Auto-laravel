@extends('adminlte::page')

@section('title', 'Product List')

@section('content_header')
    <h1>Product List</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between justify-content-center">
        <h3 class="card-title">Products</h3>
        <a href=""><button id="show" class="ml-sm">+ Create Products</button></a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->descreption }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@stop
@section('script')
<script>
$(document).ready(function () {
        $(document).on('click', '#show', function (e) {
            e.preventDefault();

            let url = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: url,
                success: function (res) {
                    bootbox.dialog({
                        title: "Create Producte",
                        message: "<div class='createForm'></div>",

                    });

                    $('.createForm').html(res);
                }
            });
        });
    });


    $(document).on('submite','#addProduct', function(e){
        e.preventDefault();


        let formData = new FormData($('#addProduct')[0]);

        $.ajax({
            type: 'POST',
            url: "",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {


            }
        })
    })    
</script>    
@endsection