<label for="email_address">Transaksi Perawatan</label>
<div class="form-group">
    <div class="form-line">
	    {{ Form::select('pelanggan_id',$pelanggan, null, ['class' => 'form-control show-tick'])}}
    </div>
</div>
<label for="email_address">Diskon</label>
<div class="form-group">
    <div class="form-line">
        {{ Form::text('diskon', null, ['class' => 'form-control'])}}
    </div>
</div>
 <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Detail Order
                            </h2>
                        </div>
                        <div class="body target">

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Paket
                                            </h2>
                                        </div>
                                        <div class="body target">
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <label>Service/Paket</label>
                                                    {{ Form::select('service_id',$service, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Terapis</label>
                                                    {{ Form::select('therapists_id',$terapis, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Ruangan</label>
                                                    {{ Form::select('ruangan_id',$ruangan, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <a href="#" class="btn btn-sm btn-primary" onclick="add()">Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Non Paket
                                            </h2>
                                        </div>
                                        <div class="body target">
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <label>Service/Paket</label>
                                                    {{ Form::select('service_id',$service, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Terapis</label>
                                                    {{ Form::select('therapists_id',$terapis, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Ruangan</label>
                                                    {{ Form::select('ruangan_id',$ruangan, null, ['class' => 'form-control show-tick'])}}
                                                </div>
                                                <a href="#" onclick="add()">Add</a>
                                            </div>
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
<script type="text/javascript">
    function add() {
        var add = '<div class="row clearfix">'+
                                '<div class="col-sm-4">'+
                                    '<label>Service/Paket</label>'+
                                    '{{ Form::select("service_id",$service, null, ["class" => "form-control show-tick"])}}'+
                                '</div>'+
                                '<div class="col-sm-4">'+
                                    '<label>Terapis</label>'+
                                    '{{ Form::select("therapists_id",$terapis, null, ["class" => "form-control show-tick"])}}'+
                                '</div>'+
                                '<div class="col-sm-4">'+
                                    '<label>Ruangan</label>'+
                                    '{{ Form::select("ruangan_id",$ruangan, null, ["class" => "form-control show-tick"])}}'+
                                '</div>'+
                                '<a href="#" onclick="add()">Add</a>'+
                    '</div>';
        $('.target').append(add);
    }
</script>
@endsection