
<div class="form-group">
    {!! Form::label('title','Name:') !!}
    {!! Form::text('title',null,['class'=>'form-control','foo'=>'bar']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control','foo'=>'bar']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','Publish On:') !!}
    {{--        {!! Form::input('date','published_at',\Carbon\Carbon::now()->format('Y-m-d'),['class'=>'form-control','foo'=>'bar']) !!}--}}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control','foo'=>'bar']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary form-control','foo'=>'bar']) !!}
</div>