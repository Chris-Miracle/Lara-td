<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Name</div>

        {!! Form::text('name', Input::old('name'), ['class' => 'form-control', 'placeholder' => 'Project Name']) !!}

    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Desc</div>

        {!! Form::textarea('desc', Input::old('desc'), ['rows' => '3', 'cols' => '3', 'class' => 'form-control', 'placeholder' => 'Project Description']) !!}

    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Due Date</div>

        {!! Form::date('duedate', Input::old('duedate'), [ 'id' => 'datepicker', 'class' => 'form-control', 'placeholder' => 'Project Due Date']) !!}

    </div>
</div>
