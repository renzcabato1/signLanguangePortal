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
        <form method="POST" action="{{ route('password.email') }}" onsubmit='show()'>
            @csrf
            <div class="form-group">
                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            </div>
            @if($errors->any())
            <div class="form-group alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <strong>{{$errors->first()}}</strong>
            </div>
            @endif
            <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Send Password Reset Link') }}</button>
        </form>
        {{-- <p class="m-t"> <small>Copyright &copy; {{date('Y')}}</small> </p> --}}
    </div>
</div>
@endsection
