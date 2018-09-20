@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <!-- <div class="block-header">
        <h2>Penambahan Pelanggan</h2>
    </div> -->
    <div class="card">
        <div class="body">
            <form method="post" action="{{url('paket/update')}}">
                @csrf
                <input type="text" name="package_id" value="{{$package->id}}" hidden required>
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> <h4>Package Detail</h4><br>
                </div>
                
                <div class="card-body">

                    <div class="row clearfix">
                        <div class="col-md-12">
                            <label for="name">Package Name</label>   
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="package_name" value="{{$package->nama_paket}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="email">Member Price (Rp)</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="member_price" value="{{$package->tarif_member}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Normal Price (Rp)</label>    
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="normal_price" value="{{$package->tarif_normal}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <div class="row" style="margin-left: 0px;margin-right: 0px;">
                                        <div class="col-sm-1">                                                
                                            <label><h2>Services</h2></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="body target">
                                    @foreach($services as $services)
                                        <div class="row clearfix">
                                            <div class="col-sm-11">
                                                <input type="text" name="" class="form-control" value="{{$services->service->nama_services}}">
                                            </div>
                                            <div class="col-sm-1">
                                                <a class="btn btn-sm btn-danger" href="/paket/delete_detail/{{$package->id}}/{{$services->service_id}}"><i class="material-icons">close</i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="header" style="padding-bottom: 0px">
                                    <div class="row" style="margin-left: 0px;margin-right: 0px; margin-bottom: 0px">
                                        <div class="col-sm-1">                                                
                                            <label><h5> New Services</h5></label>
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

@section('script')
<script type="text/javascript">    

    var no = 0, nom = 0, nor = 0
    function add_service(){
        var token = $('meta[name="token"]').attr('content');

        $.ajax({
            type : "GET",
            url : "/service/get_all",
            dataType : "json",
        }).done(function(response){
            var html = ''
            html += '<div>'
            html += '<div class="row clearfix" id="rows'+no+'">'
            html += '<div class="col-sm-11">'
            html += '<select class="form-control show-tick"" name="service['+no+']">'

            for (var i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].id+'">'+ response[i].nama_services +'</option>'
            }

            html += '</select>'
            html += '</div>'
            html += '<div class="col-sm-1 text-right">'
            html += '<a class="btn btn-sm btn-danger" onclick="remove_service('+no+')"><i class="material-icons">close</i></a>'
            html += '</div>'
            html += '</div>'
            html += '</div>';
            $('#daftar_service').append(html)
            no++
        }).error(function(data){
            alert("Error Data !")
        });
    }

    function remove_service(row)
    {
        $('#rows'+row).remove()
    }
</script>
@endsection