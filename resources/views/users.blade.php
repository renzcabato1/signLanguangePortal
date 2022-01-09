@extends('layouts.header')

@section('content')


<div class="wrapper wrapper-content">
@if(session()->has('status'))
<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    {{session()->get('status')}}
</div>
@endif
@include('error')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Users
                        <button class="btn btn-primary" data-target="#new_account" data-toggle="modal" type="button"><i class="fa fa-plus-circle"></i>&nbsp; New Account</button>
                    </h5>
                    <div ibox-tools></div>
                </div>
                <div class="ibox-content">

                    <table datatable="" dt-options="dtOptions" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Date Created</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>********</td>
                                    <td>{{date("F d, Y h:m a",strtotime($user->created_at))}}</td>
                                    <td data-id='{{$user->id}}'>
                                        <button class="btn btn-sm btn-info" data-target="#change_pass{{$user->id}}" data-toggle="modal">Change Password</button>
                                        @if(Auth::user()->id != $user->id)<button class="btn btn-sm btn-danger delete-account" data-target="#deleteacc{{$user->id}}" data-toggle="modal">Delete Account</button>@endif
                                    </td>
                                </tr>
                                @include('changepassword')
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
  
</div>
  @include('new_account')
@endsection
