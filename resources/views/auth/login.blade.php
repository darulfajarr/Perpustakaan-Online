@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel" style="background-color: rgba(255,255,255,0.5);">

                <div class="panel-heading">Masuk</div>
                <div class="panel-body">
                   {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}

                   <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                       {!! Form::label('email','Alamat Email',['class'=>'col-md-4 control-label']) !!}
                       <div class="col-md-6">
                          {!! Form::email('email',null,['class'=>'form-control']) !!}
                          {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                       </div>
                   </div>

                   <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                       {!! Form::label('password','Kata Sandi',['class'=>'col-md-4 control-label']) !!}
                       <div class="col-md-6">
                          {!! Form::password('password',['class'=>'form-control']) !!}
                          {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                       </div>
                   </div>

                   <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                       <div class="checkbox">
                           <label>
                               {!! Form::checkbox('remember')!!}Ingat Saya !
                           </label>
                       </div>
                      </div>
                   </div>

                   <div class="form-group">
                       <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              <i class="fa fa-btn fa-sign-in"></i>Masuk
                          </button>
                          <a class="btn btn-link" href="{{url('/password/reset')}}">Lupa Kata Sandi</a>

                       </div>
                   </div>
                   {!! Form::close() !!}

                </div>
             
            </div>
        </div>
    </div>
</div>
@endsection