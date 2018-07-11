@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Detail User</h4>
            </div>
            <hr>
            
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-md-2">Name</div>  
                    <div class="col-md-10">: {{ $user->name }}</div>
                </div>    
                <div class="row clearfix">
                    <div class="col-md-2">Email</div>  
                    <div class="col-md-10">: {{ $user->email }}</div>
                </div>    
                <div class="row clearfix">
                    <div class="col-md-2">Role</div>  
                    <div class="col-md-10">: {{ $user->roles->name }}</div>
                </div>            
            </div>
            
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@endsection