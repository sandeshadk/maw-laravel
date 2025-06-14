@extends('backend.layouts.app')

@section('title', 'Product')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All program list</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('service.create',$brand) }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="15%">#</th>
                            <th width="30%">Name</th>
                            <th width="20%" class="text-center">Published</th>
                            <th width="20%" class="text-center">Featured</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.service.partials.table', $service, 'service')
                        </tbody>
                    </table>
                    {{ $service->links() }}
                </div>
            </div>
        </div>
    </section>
@stop
