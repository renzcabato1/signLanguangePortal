@extends('layouts.header')

@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        {{-- <hr> --}}
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    {{-- <span class="label label-success float-right">Monthly</span> --}}
                    <h5>Messages </h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><a href="{{ url('/messages') }}">{{$messages}}</a></h1>
                    {{-- <div class="stat-percent font-bold text-info"> 0 </div>
                    <small>New Request as of {{date('M. Y')}}</small> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    {{-- <span class="label label-success float-right">Monthly</span> --}}
                    <h5>Total Sign Words </h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><a href="{{ url('/signs') }}">{{$signs}}</a></h1>
                    {{-- <div class="stat-percent font-bold text-info"> 0 </div>
                    <small>New Request as of {{date('M. Y')}}</small> --}}
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
