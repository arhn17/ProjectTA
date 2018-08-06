<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <label for="email_address">Coustumer Type</label>
        <div class="form-group">
            <div class="form-line">
                <select class="form-control show-tick" onchange="cous_role(this.value)" name="coustumer_role">
                    <option value="0">Non Member</option>
                    <option value="1">Member</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <label for="email_address">Transaction Type</label>
        <div class="form-group">
            <div class="form-line">
                <select name="status" class="form-control show-tick">
                    <option value="1">Pending</option>
                    <option value="0">Booking</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix" id="non_member">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <label for="email_address">Coustumer Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="coustumer_name" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <label for="email_address">HP</label>
        <div class="form-group">
            <div class="form-line">
                <input type="number" name="telepon" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <label for="email_address" id="alamat">Address</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" name="address" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="row clearfix" id="member" hidden>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <label for="email_address">Coustumer Name</label>
        <div class="form-group">
            <div class="form-line">
                <select name="pelanggan_id" class="form-control show-tick">
                @foreach($pelanggan as $pelanggan)
                    <option value="{{$pelanggan->id}}">{{$pelanggan->id}} - {{$pelanggan->nama}} - {{$pelanggan->telepon}}</option>
                @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <label for="email_address">Discount</label>
        <div class="form-group">
            <div class="form-line">
                <select class="form-control show-tick" name="diskon">
                    <option value="">No Discount</option>
                    @foreach($diskon as $diskon)
                    <option value="{{$diskon->id}}">{{$diskon->deskripsi}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <label for="email_address">Duration</label>
        <div class="form-group">
            <div class="form-line">
                {{ Form::text('duration', null, ['class' => 'form-control'])}}
            </div>
        </div>
    </div>
</div>
 <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Order Detail
                            </h2>
                        </div>
                        <div class="body target">

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                                <div>                                                
                                                    <h2>Package</h2>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-sm btn-primary" onclick="add_paket()"><i class="material-icons">add</i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body target" id="list_paket">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                                <div>                                                
                                                    <h2>Non Package</h2>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-sm btn-primary" onclick="add_service()"><i class="material-icons">add</i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body target" id="daftar_service">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->

@section('script')
<script type="text/javascript" src="{{ url('js/transaction_new.js') }}"></script>
@endsection