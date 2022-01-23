@extends('layouts.app')

@section('content')
<div class="middle-box text-center loginscreen animated fadeInDown mt-5">
    <div>
        <div class="m-b-md mt-5">
            <img alt="image" class="" src="{{asset('images/logo.png')}}" style='width:135px;'>
        </div>
        <h3>{{ config('app.name', 'Laravel') }}</h3>
        {{-- <form method="POST" action="{{ route('login') }}"  aria-label="{{ __('Login') }}" > --}}
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <form method="POST" action="{{ route('password.update') }}" onsubmit='show()'>
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autofocus>

            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"   placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                 <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" placeholder="Confirm Password"  required>
            </div>
            @if($errors->any())
            <div class="form-group alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>{{$errors->first()}}</strong>
            </div>
            @endif
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </form>
        {{-- <p class="m-t"> <small>Copyright &copy; {{date('Y')}}</small> </p> --}}
    </div>
</div>

@endsection
