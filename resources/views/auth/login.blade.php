@extends('layouts.master')

<<<<<<< HEAD
@section('content')

=======
@section('body')
>>>>>>> 03f7a2e74b996b5d94f4ce00f277e976a9c842ac
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}
            
                    {{-- <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
                        {{-- <div class="modal-dialog modal-lg" role="document"> --}}
                            {{-- <div class="modal-content"> --}}
                                {{-- <div class="panel-body"> --}}
                                    {{-- <div class="modal" id="login" role="dialog"> --}}
                                        {{-- <div class="modal-dialog"> --}}
                                            {{-- <div class="modal-content"> --}}
                                                <div class="card">
                <div class="card-header" style="margin-bottom:20px;">{{ __('Login') }}</div>
                                                <div class="modal-header">
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('login') }}">
                                                            @csrf

<<<<<<< HEAD
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
=======
                <div class="panel-body">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
>>>>>>> 03f7a2e74b996b5d94f4ce00f277e976a9c842ac

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                                    @if ($errors->has('email'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-6 offset-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                                        <label class="form-check-label" for="remember">
                                                                            {{ __('Remember Me') }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        {{ __('Login') }}
                                                                    </button>

                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                            {{ __('Forgot Your Password?') }}
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                                <div class="modal-footer container" style="display:unset; border:0;">
                                                                        <div style="text-align: center;">
                                                                                <label>Or Sign up with</label>
                                                                            </div>
                                                                            <div style="text-align: center;" >
                                                                                <button class="btn btn-default" style="background-color:white;">
                                                                                    <img src="/image/fb.png" width="150">
                                                                                </button>
                                                                                <button class="btn btn-default" style="background-color:white;">
                                                                                    <img src="/image/1gg.png" width="150" >
                                                                                </button>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
            </div>
                                            {{-- </div> --}}
                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    {{-- </div> --}}
                
        {{-- </div> --}}
    </div>
</div>
           
@endsection

                    