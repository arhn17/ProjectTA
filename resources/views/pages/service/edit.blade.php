@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('service/update')}}">
                @csrf
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> <h4>Service Detail</h4><br>
                </div>
                
                <div class="card-body">
                    <input type="text" name="id" value="{{$service->id}}" hidden>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="name">Name</label>   
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="service_name" value="{{$service->nama_services}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Duration</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="duration" class="form-control" value="{{$service->durasi}}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>category</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="type">
                                        <option value="1" @if($service->type == 1) selected @endif>Facial</option>
                                        <option value="2" @if($service->type == 2) selected @endif>Reflexi Message</option>
                                        <option value="3" @if($service->type == 3) selected @endif>Hair</option>
                                        <option value="4" @if($service->type == 4) selected @endif>Body Scrub</option>
                                        <option value="5" @if($service->type == 5) selected @endif>Hand & Foot</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Level</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="level">
                                        <option value="1" @if($service->level == 2) selected @endif>Normal Hair</option>
                                        <option value="0" @if($service->level == 0) selected @endif>Long Hair</option>
                                        <option value="1" @if($service->level == 1) selected @endif>Short Hair</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="email">Member Fee</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="member_fee" class="form-control" value="{{$service->tarif_member}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Normal Fee</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="normal_fee" class="form-control" value="{{$service->tarif_normal}}">
                                </div>
                            </div>
                        </div>
                    </div>      

                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection