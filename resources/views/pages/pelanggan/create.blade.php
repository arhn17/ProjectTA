@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
		<div class="body">
            {!! Form::open(['route' => 'pelanggan.store', 'method' => 'post'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Registrasi Pelanggan</h4><br>
            </div>
            
            <div class="card-body">
                
                @include('pages.pelanggan._form')
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> SAVE</button>
            </div>
            
            {{ Form::close() }}
		</div>
    </div>
</div>
@endsection