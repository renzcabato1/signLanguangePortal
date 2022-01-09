@extends('layouts.header')

@section('content')
@if(session()->has('status'))
<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{session()->get('status')}}
</div>
@endif
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Message
                        {{-- <button class="btn btn-primary" data-target="#new_request" data-toggle="modal" type="button"><i class="fa fa-plus-circle"></i>&nbsp; New </button> --}}
                    </h5>
                    <div ibox-tools></div>
                </div>
                <div class="ibox-content">

                    <table datatable="" dt-options="dtOptions" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date Created</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td>{!! nl2br($message->message) !!}</td>
                                    <td>{{date("F d, Y h:m a",strtotime($message->created_at))}}</td>
                                  </tr>
                                
                                {{-- @include('image') --}}
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
  
</div>

@endsection
