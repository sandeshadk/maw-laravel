@extends('backend.layouts.app')

@section('title', 'Form')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All Form</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('form.create') }}">
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
                          @if($forms->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.form.partials.table', $forms, 'form')
                        @endif

                        </tbody>
                    </table>
                    {{ $forms->links() }}

                    
                </div>
            </div>
        </div>
    </section>
@stop
