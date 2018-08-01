@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan transaksi</h2>
    </div> -->
    <div class="card">
		<div class="body">
            {!! Form::open(['route' => 'transaksi.store', 'method' => 'post'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Transaction Management</h4><br>
            </div>
            
            <div class="card-body">
                
                @include('pages.transaksi._form')
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
            </div>
            
            {{ Form::close() }}
		</div>
    </div>
</div>
@endsection