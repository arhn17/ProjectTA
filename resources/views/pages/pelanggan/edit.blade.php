@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
		<div class="body">
            
            <div class="card-header">
                <i class="fa fa-align-justify"></i> <h4>Coustumer Registration</h4><br>
            </div>

            <form action="/pelanggan/update" method="POST">
                @csrf
                <input type="text" name="pelanggan_id" hidden value="{{$pelanggan->id}}">
                <div class="card-body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email_address">Coustumer Type</label>
                                <div class="form-line">
                                    @if($pelanggan->user_id == 1)
                                        <select class="form-control show-tick" name="role" id="role" onchange="change_role(this.value)">
                                            <option value="0">Non Member</option>
                                            <option value="1">Member</option>
                                        </select>
                                    @else
                                        <input type="text" name="role" value="Member" readonly class="form-control">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email_address">Name *</label>
                                <div class="form-line">
                                    <input type="text" name="nama" class="form-control" value="{{$pelanggan->nama}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($pelanggan->user_id == 1)
                        <div class="row clearfix user" hidden>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email_address">Email *</label>
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email_address">Password *</label>
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email_address">Alamat</label>
                                <div class="form-line">
                                    <input type="text" name="alamat" class="form-control" value="{{$pelanggan->alamat}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email_address">Telepon *</label>
                                <div class="form-line">
                                    <input type="text" name="telepon" class="form-control" value="{{$pelanggan->telepon}}">  
                                </div>
                            </div>
                        </div>
                    </div>                
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
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> SAVE</button>
                </div>
            </form>
            
            {{ Form::close() }}
		</div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function change_role (value)
    {
        if (value == 1) $('.user').show()
        else $('.user').hide()
    }
</script>
@endsection