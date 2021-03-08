@extends('layouts.layout')

@section('contentForm')
<div class="content">
    <div class="container" id="box" style="padding: 0; margin-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <!--Form Box-->
                <div class="container" id="formBox">
                    <h2>Reset Password</h2>
                    <p style="font-size: 14px;">Send a link to your email to reset passwords</p>
                    <hr style="border-top: 1px solid white; margin-bottom: 36px;">
                    <div class="w-100"></div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    <form method="POST" action="{{ route('email-req') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                            <label class="label control-label">email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" value="{{ $email or old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="col text-center" style="margin-top: 240px;">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn" style="margin-top: 10px;">
                                Send Password Reset Link
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