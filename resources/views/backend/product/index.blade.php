@extends('backend.layouts.app')

@section('title', 'Product')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All program list</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('product.create',$brand) }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="20%">Name</th>
                            <th width="20%" class="text-center">Order</th>
                            <th width="20%" class="text-center">Published</th>
                            <th width="20%" class="text-center">Featured</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.product.partials.table', $product, 'product')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
