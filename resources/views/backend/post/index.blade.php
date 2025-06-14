@extends('backend.layouts.app')

@section('title', 'Post')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All post</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('post.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                          <th width="5%">S.No</th>
                          <th width="20%">Name</th>
                          <th width="20%" >Content</th>
                          <th width="20%" class="text-center">Published</th>
                          <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($posts->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.post.partials.table', $posts, 'post')
                        @endif
                        </tbody>
                    </table>
                    {{ $posts->links() }}

                    
                </div>
            </div>
        </div>
    </section>
@stop
