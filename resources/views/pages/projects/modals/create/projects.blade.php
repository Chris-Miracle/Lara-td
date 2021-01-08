<div class="modal fade" id="createprojects" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\ProjectController@store',  'class' => 'form-horizonatal']) !!}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Create New Project</h4>
                </div>
                <div class="modal-body">
                    @include('pages.projects.forms.projects')
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-cyan submitbutton"><i class="fa fa-flash">&nbsp; {{ $submitTextButton }}</i></a>
            {!! Form::close() !!}

            <div class="success margin-top-20">
                @include('errors.errors')
            </div>
            </div>
        </div>
    </div>
</div>
