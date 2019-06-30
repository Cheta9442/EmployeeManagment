@extends('layouts.app')
@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Employees

            </h1>
            <ol class="breadcrumb">

                <li><a href="#">Employee</a></li>
                <li class="active">List</li>
            </ol>

        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">

                        <div class="box-header">
                            <h3 class="box-title">Employee List
                            </h3>




                        </div><!-- /.box-header -->

                        <div class="box-body">
                            @if(session()->has('message'))
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-info"></i> Alert!</h4>
                                {!! session()->get('message') !!}
                            </div>
                            @endif
                            <div class="row" >
                                <div class="col-md-12" style="text-align: right;padding:10px">
                                    <a href="{!! route('employees.create') !!}" class="btn btn-block btn-primary">Add New Employee</a>
                                </div>

                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($records as $record)
                                        <tr>
                                            <td>{!! $record->name !!}</td>
                                            <td>{!! $record->created_at->diffForHumans() !!}</td>
                                            <td><a href="{!! route('employees.edit',[$record->id]) !!}"><i class="fa fa-pencil"></i></a>
                                                <a onclick="event.preventDefault();
                                                     document.getElementById('destroy-form-{!! $record->id !!}').submit();" ><i class="fa fa-trash-o"></i></a>
                                                <form id="destroy-form-{!! $record->id !!}" action="{{ url('employees/destroy') }}" method="POST" style="display: none;">
                                                    <input type="hidden" name="id" value="{{$record->id}}">
                                                    {{ method_field('DELETE') }}
                                                    {!! csrf_field() !!}
                                                </form></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


@stop