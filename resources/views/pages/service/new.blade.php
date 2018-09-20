@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('service/input')}}">
                @csrf
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> <h4>New Service</h4><br>
                </div>
                
                <div class="card-body">

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="name">Name</label>   
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="service_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Duration</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="duration" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label>Category</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="type">
                                        <option value="1">Facial</option>
                                        <option value="2">Reflexi Message</option>
                                        <option value="3">Hair</option>
                                        <option value="4">Body Scrub</option>
                                        <option value="5">Hand & Foot</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Level</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control" name="level">
                                        <option value="2">Normal Hair</option>
                                        <option value="0">Long Hair</option>
                                        <option value="1">Short Hair</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="email">Member Price</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="member_fee" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Normal Price</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="normal_fee" class="form-control">
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