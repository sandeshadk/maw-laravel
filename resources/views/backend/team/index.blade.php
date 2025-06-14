@extends('backend.layouts.app')

@section('title', 'Team')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">All teams</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('team.create') }}">
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
                          <th width="40%">Position</th>
                          <th width="40%">View</th>
                          <th width="10%" >Published</th>
                          <th width="10%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if($teams->isEmpty())
                            <tr>
                                <td class="text-center" colspan="5">No data available.</td>
                            </tr>
                        @else
                        @each('backend.team.partials.table', $teams, 'team')
                        @endif

                        </tbody>
                    </table>
                    {{ $teams->links() }}
                    
                </div>
            </div>
        </div>
    </section>
@stop
