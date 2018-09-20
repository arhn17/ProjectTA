@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan transaksi</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('/transaksi/update')}}">
                @csrf
                <input type="text" name="transaksi_id" value="{{$transaksi->id}}" hidden readonly>
            
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> <h4>Transaction Management</h4><br>
                </div>
                
                <div class="card-body">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="email_address">Coustumer</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" value="{{$transaksi->pelanggan->id}} - {{$transaksi->pelanggan->nama}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="email_address">Discount</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="diskon">
                                        <option value="">No Discount</option>
                                        @foreach($diskon as $diskon)
                                        <option value="{{$diskon->id}}" @if($diskon->id == $transaksi->diskon_id) selected @endif>{{$diskon->deskripsi}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label for="email_address">Status</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select name="status" class="form-control show-tick">
                                        <option value="1" @if($transaksi->status == 1) selected @endif>Pending</option>
                                        <option value="0" @if($transaksi->status == 0) selected @endif>Booking</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="email_address">Duration</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="duration" class="form-control" value="{{$transaksi->durasi}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="email_address">Date</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" name="trans_date" class="form-control" value="{{$transaksi->trans_date}}">
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
                                                    </div>
                                                </div>
                                                @if($transaksi_paket != null)
                                                    <?php $pack_id = 0; ?>
                                                        <div class="body target" style="padding-bottom: 0px">
                                                        @foreach($transaksi_paket as $transpak)
                                                            @if($pack_id != $transpak->paket_id)
                                                                <div class="row clearfix" >
                                                                    <div class="col-sm-11">
                                                                        <input type="text" class="form-control" value="{{$transpak->paket->nama_paket}}" readonly>
                                                                    </div>
                                                                    <div class="col-sm-1">
                                                                        <a href="/transaksi/delete/paket/{{$transpak->transaksi_id}}/{{$transpak->paket_id}}" class="btn btn-sm btn-danger"><i class="material-icons">close</i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix" style="margin-bottom: 10px">
                                                                @foreach($transaksi_paket as $transpak_serv)
                                                                    @if($transpak->paket_id == $transpak_serv->paket_id)
                                                                        <div class="row clearfix">
                                                                            <div class="col-sm-offset-1 col-sm-10" style="margin-bottom: 0px">
                                                                                <div class="col-sm-6">
                                                                                    <label>Service</label>
                                                                                    <input type="text" class="form-control" value="{{$transpak_serv->service->nama_services}}" readonly>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <label>Therapist</label>
                                                                                    <input type="text" class="form-control" value="{{$transpak_serv->therapist->nama}}" readonly>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <label>Room</label>
                                                                                    <input type="text" class="form-control" value="{{$transpak_serv->ruangan->nama_ruang}}" readonly>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                                </div>
                                                            @endif
                                                            <?php $pack_id = $transpak->paket_id ?>
                                                        @endforeach
                                                        </div>
                                                @endif
                                                <div class="body" style="padding-bottom: 0px">
                                                    <div class="row">
                                                        <div class="col-sm-2" style="margin-bottom: 0px">
                                                            <h5>New Package</h5>
                                                        </div>
                                                        <div class="col-sm-10 text-right" style="margin-bottom: 0px">
                                                            <button type="button" class="btn btn-sm btn-primary" onclick="add_paket()"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="body target" id="list_paket" style="padding-top: 0px">

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
                                                            <h2>Service</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($transaksi_service != null)
                                                    @foreach($transaksi_service as $transerv)
                                                        <div class="row clearfix">
                                                            <div class="col-sm-12">
                                                                <div class="col-sm-11" style="margin-bottom: 0px">
                                                                    <div class="col-sm-6">
                                                                        <label>Service</label>
                                                                        <input type="text" class="form-control" value="{{$transerv->service->nama_services}}" readonly>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label>Therapist</label>
                                                                        <input type="text" class="form-control" value="{{$transerv->therapist->nama}}" readonly>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <label>Room</label>
                                                                        <input type="text" class="form-control" value="{{$transerv->ruangan->nama_ruang}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1" style="margin-top: 25px">
                                                                    <a href="/transaksi/delete/service/{{$transerv->pesanan_id}}/{{$transerv->service_id}}" class="btn btn-sm btn-danger"><i class="material-icons">close</i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                <div class="body" style="padding-bottom: 0px">
                                                    <div class="row">
                                                        <div class="col-sm-2" style="margin-bottom: 0px">
                                                            <h5>New Service</h5>
                                                        </div>
                                                        <div class="col-sm-10 text-right" style="margin-bottom: 0px">
                                                            <button type="button" class="btn btn-sm btn-primary" onclick="add_service()"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <hr>
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
                    
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Save</button>
                </div>
            
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var number = 0;
    var number_service = 0
    var no = 0
    var nom = 0
    var nor = 0
    function add_paket(){
        var token = $('meta[name="token"]').attr('content');

        $.ajax({
            type : "GET",
            url : "/paket/list_paket",
            dataType : "json",
        }).done(function(response){
            var html = ''
            html += '<div id="row'+number+'">'
            html += '<div class="row clearfix">'
            html += '<div class="col-sm-11">'
            html += '<select class="form-control show-tick" id="package'+number+'" name="package['+number+']" onchange="list_service(this.id, '+number+')">'
            html += '<option value="0">Select Package</option>'

            for (var i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].id+'">'+ response[i].nama_paket +'</option>'
            }

            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm-1 text-right">'
            html += '<a class="btn btn-sm btn-danger" onclick="remove_paket('+number+')"><i class="material-icons">close</i></a>'
            html += '</div>'
            html += '</div>'
            html += '<div class="row clearfix" id="detail_paket'+number+'">'
            html += '</div>'
            html += '</div>';
            $('#list_paket').append(html)
            number++
        }).error(function(data){
            alert("Error Data !")
        });
    }

    function remove_paket(row)
    {
        $('#row'+row).remove()
    }

    function remove_service(row)
    {
        $('#rows'+row).remove()
    }

    function list_service(id, number)
    {
        var package_value = $('#'+id).val()
            var token = $('meta[name="token"]').attr('content');

            $.ajax({
                type : "GET",
                url : "/detail_paket/get_service/"+ $('#'+id).val(),
                dataType : "json",
            }).done(function(response){
                var therapist = get_therapist()
                var html = ''
                if (response.length > 0) {
                    html += '<div class="row clearfix">'
                    html += '<div class="col-sm-offset-1 col-sm-10">'
                    for (var i = 0; i < response.length; i++) {
                        html += '<div class="col-sm-6">'
                        html += '<label>Service</label><input type="text" name="package_service'+number+'[]" value="'+response[i].service.id+'" hidden><input type="text" class="form-control" value="'+response[i].service.nama_services+'" readonly>'
                        html += '</div>'
                        html += '<div class="col-sm-3">'
                        html += '<label>Terapis</label>'
                        html += '<select class="form-control show-tick" id="list_therapist'+nom+'" name="therapist_service_package'+number+'[]" required>'

                        $.ajax({
                            type : "GET",
                            url : "/therapist/get_all",
                            dataType : "json",
                        }).done(function(response2){
                            var html2 = ''
                            if (response2.length > 0) {
                                for (var j = 0; j < response2.length; j++) {
                                    html2 += '<option value="'+response2[j].id+'">'+response2[j].nama+'</option>'
                                }
                            }
                            $('#list_therapist'+no).html(html2)
                            no++
                        });

                        html += '</select>'
                        html += '</div>'
                        html += '<div class="col-sm-3">'
                        html += '<label>Room</label>'
                        html += '<select class="form-control show-tick" id="list_ruangan'+nom+'" name="ruangan_service_package'+number+'[]">'

                        $.ajax({
                            type : "GET",
                            url : "/ruangan/get_all",
                            dataType : "json",
                        }).done(function(response3){
                            var html3 = ''
                            for (var j = 0; j < response3.length; j++) {
                                html3 += '<option value="'+response3[j].id+'">'+response3[j].nama_ruang+'</option>'
                            }
                            $('#list_ruangan'+nor).html(html3)
                            nor++
                        });

                        html += '</select>'
                        html += '</div>'
                        nom++

                    }
                    html += '</div>'
                    html += '</div>'
                }
                $('#detail_paket'+number).html(html)
            }).error(function(data){
                alert("Error Data !")
            });
    }

    function add_service(){
        var token = $('meta[name="token"]').attr('content');

        $.ajax({
            type : "GET",
            url : "/service/get_all",
            dataType : "json",
        }).done(function(response){
            var html = ''
            html += '<div>'
            html += '<div class="row clearfix" id="rows'+number_service+'">'
            html += '<div class="col-sm-5">'
            html += '<label>Service</label>'
            html += '<select class="form-control show-tick" id="package'+number_service+'" name="service['+number+']">'

            for (var i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].id+'">'+ response[i].nama_services +'</option>'
            }

            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm-3">'
            html += '<label>Terapis</label>'
            html += '<select class="form-control show-tick" id="list_therapist_service'+nom+'" name="therapist_service_package'+number+'">'

            $.ajax({
                type : "GET",
                url : "/therapist/get_all",
                dataType : "json",
            }).done(function(response2){
                var html2 = ''
                if (response2.length > 0) {
                    for (var j = 0; j < response2.length; j++) {
                        html2 += '<option value="'+response2[j].id+'">'+response2[j].nama+'</option>'
                    }
                }
                $('#list_therapist_service'+no).html(html2)
                no++
            });

            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm-3">'
            html += '<label>Room</label>'
            html += '<select class="form-control show-tick" id="list_ruangan_service'+nom+'" name="ruangan_service_package'+number+'">'

            $.ajax({
                type : "GET",
                url : "/ruangan/get_all",
                dataType : "json",
            }).done(function(response3){
                var html3 = ''
                for (var j = 0; j < response3.length; j++) {
                    html3 += '<option value="'+response3[j].id+'">'+response3[j].nama_ruang+'</option>'
                }
                $('#list_ruangan_service'+nor).html(html3)
                nor++
            });

            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm-1 text-right">'
            html += '<a class="btn btn-sm btn-danger" onclick="remove_service('+number_service+')"><i class="material-icons">close</i></a>'
            html += '</div>'
            html += '</div>'
            html += '</div>';
            $('#daftar_service').append(html)
            number++
            nom++
        }).error(function(data){
            alert("Error Data !")
        });
    }

    function get_therapist()
    {
        var token = $('meta[name="token"]').attr('content');

        $.ajax({
            type : "GET",
            url : "/therapist/get_all",
            dataType : "json",
        }).done(function(response){
            return response
        }).error(function(data){
            return false
        });
    }
</script>
@endsection