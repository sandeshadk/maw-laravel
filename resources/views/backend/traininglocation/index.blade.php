@extends('backend.layouts.app')

@section('title', 'traininglocation')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All traininglocation</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('traininglocation.create') }}">
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
                          <th width="30%">Name</th>
                          <th width="20%">Address</th>
                          <th width="20%">Phone</th>
                          <th width="10%" >Published</th>
                          <th width="10%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($locations->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.traininglocation.partials.table', $locations, 'location')
                        @endif

                        </tbody>
                    </table>
                    {{ $locations->links() }}
                    
                </div>
            </div>
        </div>
    </section>
@stop
