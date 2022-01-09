@extends('layouts.header')

@section('content')

<div class="wrapper wrapper-content">
    @if(session()->has('status'))
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{session()->get('status')}}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Signs
                        <button class="btn btn-primary" data-target="#new_sign" data-toggle="modal" type="button"><i class="fa fa-plus-circle"></i>&nbsp; New </button>
                    </h5>
                    <div ibox-tools></div>
                </div>
                @foreach($signs as $sign)
                <div class="ibox-content">
                    <div class="col-lg-2 border" id='{{$sign->id}}' data-id='{{$sign->id}}'>
                        <span  class="fa fa-window-close delete-sign" title='delete'></span>
                        <div class="container">    
                            <img src="{{asset(".$sign->image.")}}" width="220" height="220" alt="..." class="img-thumbnail">
                            
                        </div>
                        <p class='text-center'>{{$sign->text}}  </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include("new_sign")
@endsection

