@extends('layouts.layout')

@section('contentForm')
<div class="content">
    <div class="container" id="box" style="padding: 0; margin-top: 20px;">
        <div class="row">
            <div class="col-md-6">
                <!--Form Box-->
                <div class="container" id="formBox">
                    <h2>Sign Up Forms</h2>
                    <p style="font-size: 14px;">Sign up lalu login agar dapat memulai menungggah karya-mu!</p>
                    <hr style="border-top: 1px solid white; margin-bottom: 15px;">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <!-- samakan nama di tag input, first('') , dan di DB-->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="label control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" placeholder="nama lengkap" required autofocus>
                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                             
                        <div class="row"> <!--Row 1 Start-->
                            <div class="col-12 col-md-8">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="label control-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="email universitas" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>                      
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">
                                    <label class="label control-label">NIM</label>
                                    <input type="number" class="form-control" name="nim" placeholder="nim" required>
                                    @if ($errors->has('nim'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nim') }}</strong>
                                        </span>
                                    @endif
                                </div>      
                            </div>
                        </div><!--Row 1 end-->
                       
                        <div class="row"><!--Row 2 start-->
                            <div class="col-6 ">
                                <div class="form-group{{ $errors->has('angkatan') ? ' has-error' : '' }}">
                                    <label class="label control-label">Angkatan</label>
                                    <input type="number" class="form-control" name="angkatan" placeholder="ex: 2019, 2020" required>
                                    @if ($errors->has('angkatan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('angkatan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                            </div>
                            <div class="col-6 ">
                                <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                                    <label class="label control-label">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" placeholder="ex: A, B" maxlength="1" style="text-transform: uppercase;" required>
                                    @if ($errors->has('kelas'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kelas') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                            </div>
                        </div><!--Row 2 end-->

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="label control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                                     
                        <label class="label control-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
                        
                        <div class="col text-center" style="margin-top: 15px;">
                            <a href="{{ route('login') }}">saya sudah memiliki akun &#10003;</a>
                            <div class="w-100"></div>
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" id="startbtn" style="margin-top: 10px;">
                                Sign Up
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