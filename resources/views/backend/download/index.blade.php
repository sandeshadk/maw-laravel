@extends('backend.layouts.app')

@section('title', 'Brochure/flyer')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All brochure/flyer</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('download.create') }}">
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
                            <th width="40%">Name</th>
                            <th width="30%" class="text-center">Published</th>
                            <th width="25%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($downloads->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                            @each('backend.download.partials.table', $downloads, 'downloads')
                        @endif
                        </tbody>
                    </table>
                    {{ $downloads->links() }}
                    
                </div>
            </div>
        </div>
    </section>

@endsection
