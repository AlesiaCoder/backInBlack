<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('student_id') }}
            {{ Form::text('student_id', $students, $grade->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Student Id']) }}
            {!! $errors->first('student_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('maths_grade') }}
            {{ Form::text('maths_grade', $grade->maths_grade, ['class' => 'form-control' . ($errors->has('maths_grade') ? ' is-invalid' : ''), 'placeholder' => 'Maths Grade']) }}
            {!! $errors->first('maths_grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>