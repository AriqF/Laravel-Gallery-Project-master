@extends('layouts.layout')

@section('contentForm')
<div class="content">
    <div class="container" id="box" style="padding: 0; margin-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <!--Form Box-->
                <div class="container" id="formBox">
                    <h2>Login Forms</h2>
                    <p style="font-size: 14px;">Login agar dapat mulai menungggah karya-mu!</p>
                    <hr style="border-top: 1px solid white; margin-bottom: 36px;">
                    <div class="w-100"></div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="label control-label">email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" required>
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
                        
                        
                        <div class="col text-center" style="margin-top: 240px;">
                            <a href="{{ route('register') }}">saya belum memiliki akun</a> <a href="{{ route('forgotPassword') }}"> / lupa password?</a>
                            <div class="w-100"></div>
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn" style="margin-top: 10px;">
                                Login
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