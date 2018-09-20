@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            {!! Form::open(['route' => 'user.store', 'method' => 'post'] ) !!}
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Tambah User</h4><br>
            </div>
            
            <div class="card-body">
                
                @include('pages.user._form')
                
            </div>
            
            <div class="card-footer">
                <button id="save_user" type="submit" class="btn btn-sm btn-primary" disabled><i class="fa fa-dot-circle-o"></i> Simpan</button>
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    function retype(){
        var password=document.getElementById("password");
        var repassword=document.getElementById("repassword");
        var save_user=document.getElementById("save_user");
        var col=document.getElementById("retype");

        if (password.value == repassword.value) {
            col.style.color="green";
            save_user.disabled = false
        }
        else{
            col.style.color="red";
            save_user.disabled = true
        }
    }
</script>
@endsection