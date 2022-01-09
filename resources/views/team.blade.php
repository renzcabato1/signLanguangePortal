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
                    <h5>Developers
                        <button class="btn btn-primary" data-target="#new_request" data-toggle="modal" type="button"><i class="fa fa-plus-circle"></i>&nbsp; New </button>
                    </h5>
                    <div ibox-tools></div>
                </div>
                <div class="ibox-content">

                    <table datatable="" dt-options="dtOptions" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th>Facebook</th>
                            <th>Instragram</th>
                            <th>Linked In</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $team)
                                <tr>
                                    <td>{{$team->name}}</td>
                                    <td><a href="#" data-target="#image{{$team->id}}" data-toggle="modal" > <img alt="image" class="rounded-circle bg-light" style='width:48px;height:48px;' src="{{asset(".$team->image.")}}"/></a></td>
                                    <td>{{$team->role}}</td>
                                    <td><a target="_blank" href="{{$team->facebook}}">{{$team->facebook}}</a></td>
                                    <td><a target="_blank" href="{{$team->instagram}}">{{$team->instagram}}</a></td>
                                    <td  ><a target="_blank" href="{{$team->linkedin}}">{{$team->linkedin}}</a></td>
                                    <td data-id='{{$team->id}}'><button class="btn btn-sm btn-danger remove-item" data-target="#remove_team{{$team->id}}" data-toggle="modal">Remove</button> </td></td>
                                </tr>
                                
                                @include('image')
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
</div>
  
</div>
@include('new_develope')

@endsection
