@extends('partials.bodywithsidenav')

@section('title', 'Projects | 24hrs')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 margin-top-70">
            <h2>Projects <span class="pull-right small">{{ $today }} |  {{$currenttime}}</span></h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">

            <div class="pull-right">
                <a href="#createprojects" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;New Project</a>
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-xs-12">
            @if (count($projects))
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr class="text-capitalize roboto">
                                <th>id</th>
                                <th>name</th>
                                <th>author</th>
                                <th>tasks</th>
                                <th>created</th>
                                <th>updated</th>
                                <th>duedate</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        @foreach ($projects as $project)
                        <tbody>
                            <tr>
                                <th>{{ $project->id }}</th>
                                <th>{{ $project->name }}</th>
                                <th>{{ $project->user->name }}</th>
                                <th>{{ count($project->tasks()->get()) }}</th>
                                <th>{{ $project->created_at }}</th>
                                <th>{{ $project->updated_at }}</th>
                                <th>{{ $project->duedate }}</th>
                                <th>{{ $project->completed == false ? 'pending' : 'completed' }}</th>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                @else
                <p>Sorry, no projects found today. Begin by creating a <a href="#createprojects" class="" data-toggle="modal">new project</a></p>
            @endif
        </div>
    </div>
</div>

@include('pages.projects.modals.create.projects', ['submitTextButton' => 'ADD'])

@stop
