
@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Car Models

            </h1>
            <ol class="breadcrumb">

                <li><a href="{!! url('/car_models') !!}">Employees</a></li>
                <li class="active">Create</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Create New Employee</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        @if(isset($record))
                            <form role="form" method="post" action="{!! route('employees.update',[$record->id]) !!}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                        @else
                            <form role="form" method="post" action="{!! route('employees.store') !!}" enctype="multipart/form-data">
                                @csrf
                        @endif

                            <div class="box-body">
                                @if(isset($errors))
                                    @foreach ($errors->all() as $error)
                                        <li style="color: darkred">{{ $error }}</li>
                                    @endforeach
                                @endif
                                
                                <div class="form-group">
                                    <label for="car-model">Name</label>
                                    <input type="text" class="form-control" name="name" autocomplete="off"  placeholder="Name" @if(isset($record)) value="{!! $record->name !!}" @else value="{!! old('name') !!}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="car-model">Email</label>
                                    <input type="email" class="form-control" name="email" autocomplete="off"  placeholder="Email" @if(isset($record)) value="{!! $record->email !!}" @else value="{!! old('email') !!}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="car-model">Contact Number</label>
                                    <input type="number" class="form-control" name="mobile_no" autocomplete="off"  placeholder="Contact Number" @if(isset($record)) value="{!! $record->mobile_no !!}" @else value="{!! old('mobile_no') !!}" @endif>
                                </div>
                                @if(!isset($record))
                                <div class="form-group">
                                <input type="checkbox" name="is_admin" value="1" checked/> <label for="car-model">Is Admin</label><br>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <label for="car-model">Password</label>
                                    <input type="password" class="form-control" name="password" autocomplete="off"  placeholder="Password" @if(isset($record)) value="{!! $record->model !!}" @else value="{!! old('model') !!}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="car-model">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" autocomplete="off"  placeholder="Confirm password" @if(isset($record)) value="{!! $record->model !!}" @else value="{!! old('model') !!}" @endif>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="car-model">Salary</label>
                                    <input type="text" class="form-control" name="salary" autocomplete="off"  placeholder="Salary" @if(isset($record)) value="{!! $record->salary !!}" @else value="{!! old('salary') !!}" @endif>
                                </div>
                                <div class="form-group">
                                    <label for="car-model">Address</label>
                                    <textarea class="form-control" name="address" autocomplete="off"  placeholder="Address" >@if(isset($record)) {!! $record->address !!}
                                     @else {!! old('address') !!} 
                                     @endif</textarea>
                                    
                                </div>

                                
                                


                            </div><!-- /.box-body -->

                            <div class="box-footer" style="text-align: right">
                                @if(isset($record))
                                  <button type="submit" class="btn btn-primary">Update</button>
                                @else
                                  <button type="submit" class="btn btn-primary">Create</button>
                                @endif
                                    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<script>
    
</script>
    @stop