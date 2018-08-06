@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Transaction Data</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	 <div class="header">
                     <ul class="header-dropdown m-r--5"></ul>
                 </div>
        		<div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header" style="padding-bottom: 0px">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h2>Transaction Detail</h2>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal"><i class="material-icons">select_all</i><span class="icon-name">QR Code</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="body">
                                    <form id="wizard_with_validation" method="POST">
                                        <h3>Detail</h3>
                                        <fieldset>
                                            <div class="row clearfix">
                                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
                                                    <div class="header" style="padding-top: 0px; padding-bottom: 0px">
                                                        <h5>Transaction</h5>
                                                    </div>
                                                    <div class="body">
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Transaction No</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>{{$transaksi->id}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Duration</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>{{$transaksi->durasi}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Status</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>
                                                                @if($transaksi->status == 0) Booking
                                                                @elseif($transaksi->status == 1) Pending
                                                                @else Paid
                                                                @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-6" style="margin-bottom: 0px">
                                                    <div class="header" style="padding-top: 0px; padding-bottom: 0px">
                                                        <h5>Coustumer</h5>
                                                    </div>
                                                    <div class="body">
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Type</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>
                                                                @if($transaksi->pelanggan->user_id == 1) Non Member
                                                                @else Member
                                                                @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>{{$transaksi->pelanggan->nama}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-sm-4">
                                                                <label>Telephone</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <p>{{$transaksi->pelanggan->telepon}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="header" style="padding-top: 0px; padding-bottom: 0px">
                                                    <h5>Treatment</h5>
                                                </div>
                                                <div class="body">
                                                    <div class="header" style="padding-top: 0px; padding-bottom: 0px">
                                                        <h5>Package</h5>
                                                    </div>
                                                    <div class="body table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th width="1%">#</th>
                                                                    <th>Package Name</th>
                                                                    <th width="20%">Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if($package != null)
                                                                <?php $no = 1; ?>
                                                                    @foreach($package as $package)
                                                                        <tr>
                                                                            <td>{{$no}}</td>
                                                                            <td>{{$package->paket->nama_paket}}</td>
                                                                            <td>Rp.
                                                                                @if($transaksi->pelanggan->user_id == 1) {{number_format($package->paket->tarif_normal)}}
                                                                                @else {{number_format($package->paket->tarif_member)}}
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <?php $no++; ?>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="header" style="padding-top: 0px; padding-bottom: 0px">
                                                        <h5>Service</h5>
                                                    </div>
                                                    <div class="body table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th width="1%">#</th>
                                                                    <th>Service Name</th>
                                                                    <th width="20%">Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if($service != null)
                                                                <?php $nom = 1; ?>
                                                                    @foreach($service as $service)
                                                                        <tr>
                                                                            <td>{{$nom}}</td>
                                                                            <td>{{$service->service->nama_services}}</td>
                                                                            <td>Rp.
                                                                                @if($transaksi->pelanggan->user_id == 1) {{number_format($service->service->tarif_normal)}}
                                                                                @else {{number_format($service->service->tarif_member)}}
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                        <?php $nom++; ?>
                                                                    @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <h3>Payment</h3>
                                        <fieldset>
                                            <div class="row clearfix">
                                                <div class="body">
                                                    <div class="col-md-offset-2 col-md-8">
                                                        <div>
                                                            <h5>Muslimah Beauty care</h5>
                                                        </div>
                                                        <div>
                                                            <h5>Jalan Ombilin</h5>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <div class="table-responsive">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <td width="30%"></td>
                                                                            <td width="5%"></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>No</td>
                                                                            <td>:</td>
                                                                            <td>{{$transaksi->id}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Coustumer Code</td>
                                                                            <td>:</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Coustumer Name</td>
                                                                            <td>:</td>
                                                                            <td>{{$transaksi->pelanggan->nama}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Address</td>
                                                                            <td>:</td>
                                                                            <td>{{$transaksi->pelanggan->alamat}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Telephone</td>
                                                                            <td>:</td>
                                                                            <td>{{$transaksi->pelanggan->telepon}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Transaction's QR Code</h4>
            </div>
            <div class="modal-body">
                {!! QrCode::size(250)->generate($transaksi->id . "" . $transaksi->pelanggan->telepon) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@endsection