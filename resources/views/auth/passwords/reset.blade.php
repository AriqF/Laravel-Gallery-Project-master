@extends('layouts.layout')

@section('contentForm')
<div class="content">
    <div class="container" id="box" style="padding: 0; margin-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <!--Form Box-->
                <div class="container" id="formBox">
                    <h2>Reset Password</h2>
                    
                    <hr style="border-top: 1px solid white; margin-bottom: 36px;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="w-100"></div>
                    <form method="POST" action="{{ route('email-req') }}"> 
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                            <label class="label control-label">email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" value="{{ $email or old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="label control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="label control-label">Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="password" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        
                        <div class="col text-center" style="margin-top: 240px;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn" style="margin-top: 10px;">
                                Reset
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <!--Image Box-->
            <div class="col-md-6">
                <div class="container" id="pictBox">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection