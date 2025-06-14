@extends('backend.layouts.app')

@section('title', 'Page')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All pages</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('page.create') }}">
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
                            <th width="30%">Name</th>
                            <th width="30">View</th>
                            <th width="15%" class="text-center">Published</th>
                            <th width="20%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($pages->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.page.partials.table', $pages, 'page')
                        @endif

                        </tbody>
                    </table>
                    {{ $pages->links() }}

                    
                </div>
            </div>
        </div>
    </section>
@stop
