@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('/topup/input')}}">
                @csrf
                
                <div class="card-body">  

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="email">Coustumer</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="pelanggan" required>
                                        @foreach($pelanggan as $pelanggan)
                                        <option value="{{$pelanggan->id}}">{{$pelanggan->user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Nominal (Rp)</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nominal" class="form-control" required>
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