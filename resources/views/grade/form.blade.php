<div class="box box-info padding-1">
    <div class="box-body">
            <div class="form-group">
                {{ Form::label('name') }}
                {{ Form::select('student_id', $student, $grade->student_id, ['class' => 'form-control' . ($errors->has('student_id') ? ' is-invalid' : ''), 'placeholder' => 'Montse Weasley']) }}
                {!! $errors->first('student_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                {{ Form::label('subject') }}
                {{ Form::text('subject', $grade->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'History']) }}
                {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('grade') }}
                {{ Form::text('grade', $grade->grade, ['class' => 'form-control' . ($errors->has('grade') ? ' is-invalid' : ''), 'placeholder' => '10']) }}
                {!! $errors->first('grade', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('exam') }}
                {{ Form::text('exam', $grade->exam, ['class' => 'form-control' . ($errors->has('exam') ? ' is-invalid' : ''), 'placeholder' => '1']) }}
                {!! $errors->first('exam', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('trimester') }}
                {{ Form::text('trimester', $grade->trimester, ['class' => 'form-control' . ($errors->has('trimester') ? ' is-invalid' : ''), 'placeholder' => '1']) }}
                {!! $errors->first('trimester', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('year') }}
                {{ Form::text('year', $grade->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => '10']) }}
                {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('schoolTerm') }}
                {{ Form::text('schoolTerm', $grade->schoolTerm, ['class' => 'form-control' . ($errors->has('schoolTerm') ? ' is-invalid' : ''), 'placeholder' => '2022-2023']) }}
                {!! $errors->first('schoolTerm', '<div class="invalid-feedback">:message</div>') !!}
            </div>
    </div>
</div>