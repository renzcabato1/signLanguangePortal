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
                    <h5>Faqs
                        <button class="btn btn-primary" data-target="#newFaq" data-toggle="modal" type="button"><i class="fa fa-plus-circle"></i>&nbsp; New Data</button>
                    </h5>
                    <div ibox-tools></div>
                </div>
                <div class="ibox-content">

                    <table datatable="" dt-options="dtOptions" class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th width='30%'>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $faq)
                                <tr>
                                    <td>{!! nl2br($faq->question) !!}</td>
                                    <td>{!! nl2br($faq->answer) !!}</td>
                                   <td data-id='{{$faq->id}}'>
                                    <button class="btn btn-sm btn-success" data-target="#editfaq{{$faq->id}}" data-toggle="modal">Edit</button>
                                    <button class="btn btn-sm btn-danger remove-item-faq" data-target="#remove{{$faq->id}}" data-toggle="modal">Remove</button> </td></td>
                                </tr>
                                @include("editfaq")
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@include('newFaq')
@endsection
