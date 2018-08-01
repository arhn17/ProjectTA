@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('therapist/input')}}">
                @csrf
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> <h4>New Therapist</h4><br>
                </div>
                
                <div class="card-body">  

                    <div class="row clearfix">
                        <div class="col-md-12">
                            <label for="email">Therapist Name</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nama" class="form-control" required>
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
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection