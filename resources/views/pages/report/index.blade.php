@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Report Data</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            	 <div class="header">
                     <ul class="header-dropdown m-r--5"></ul>
                 </div>
        		<div class="body">
                    <form method="get" action="/report">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <label for="email_address">Start Date</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="start_date" class="form-control" value="{{$start_date, ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <label for="email_address">End Date</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="end_date" class="form-control" value="{{$end_date, ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
                                <button type="submit" class="btn btn-sm btn-primary" style="margin-top: 10px">Search</button>
                            </div>
                        </div>
                    </form>
        			<div class="table-responsive">
        			<table class="table table-bordered table-striped table-hover dataTable js-exportable">
        				<thead>
        					<tr>
        						<th class="text-center" width="1%">No</th>
                            	<th class="text-center">Pelanggan</th>
                            	<th class="text-center">Diskon</th>
                            	<th class="text-center">Total</th>
                                <th class="text-center">Status</th>
                            </tr>
        				</thead>
        				<tbody>
                            <?php $no = 1; ?>
        					@foreach($transaksis as $transaksi)
        						<tr>
                                    <td class="text-center" width="1%">{{ $no }}</td>
        							<td class="text-center">{!! $transaksi->pelanggan->nama !!}</td>
        							<td class="text-center">@if($transaksi->diskon != null) {!! $transaksi->diskon->nilai !!} % @else - @endif</td>
        							<td class="text-center">{{number_format($transaksi->total)}}</td>
                                    <td class="text-center">
                                        @if($transaksi->status == 0) Booking
                                        @elseif($transaksi->status == 1) Pending
                                        @else Paid
                                        @endif
                                    </td>
        						</tr>
                                <?php $no++; ?>
        					@endforeach	
        				</tbody>
        			</table>
        		</div>
        		</div>
            </div>
        </div>
    </div>
</div>
@endsection