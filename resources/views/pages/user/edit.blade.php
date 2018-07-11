@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Update User</h4><br>
            </div>
            
            <div class="card-body">
                
                @include('pages.user._form')
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Simpan</button>
                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection