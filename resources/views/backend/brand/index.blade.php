@extends('backend.layouts.app')

@section('title', 'Services')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All programs</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('feature.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th width="20%">Title</th>
                            <th width="40%" class="text-center">Description</th>
                            <th width="30%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($brands as $key => $brand)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ $brand->title}}</td>
                                <td class="text-center">{!! str_limit($brand->meta_description, 47) !!}</td>
                                <td class="text-center">
                                    <a href="{{route('service.index', $brand->id)}}" class="btn btn-flat btn-primary btn-xs">
                                        Add Program list
                                    </a>
                                    <a href="{{route('feature.edit', $brand->brand)}}" class="btn btn-flat btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <button type="button" data-url="{{ route('feature.destroy', $brand->brand) }}" class="btn btn-flat btn-primary btn-xs item-delete">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Nothing to show</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop
