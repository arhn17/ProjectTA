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
                <i class="fa fa-align-justify"></i> <h4>Coustumer Registration</h4><br>
            </div>
            
            <div class="card-body">
                
                @include('pages.pelanggan._form')
                
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if($save == "success")
                <div class="alert alert-success">
                    <ul>
                         <li>Data Saved</li>
                    </ul>
                </div>
            @endif
            
            <div class="card-footer">
                <button id="save_member" type="submit" class="btn btn-sm btn-primary" disabled><i class="fa fa-save"></i> SAVE</button>
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
        var save_member=document.getElementById("save_member");
        var col=document.getElementById("retype");

        if (password.value == repassword.value) {
            col.style.color="green";
            save_member.disabled = false
        }
        else{
            col.style.color="red";
            save_member.disabled = true
        }
    }
</script>
@endsection