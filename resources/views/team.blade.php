@extends('layouts.header')

@section('content')
<div class="wrapper wrapper-content">
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
                                    <td>Name</td>
                                    <td>Image</td>
                                    <td>Role</td>
                                    <td>Facebook</td>
                                    <td>Instragram</td>
                                    <td>Linked In</td>
                                    <td>Action</td>
                                </tr>
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
