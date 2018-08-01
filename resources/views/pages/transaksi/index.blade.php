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
            <div class="text-right">
                <a href="{!! route('transaksi.create') !!}" class="btn btn-primary"><i class="material-icons">add</i><span>New Transaction</span></a>
            </div><br>
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
						<th class="text-center">No</th>
                    	<th class="text-center">Pelanggan</th>
                    	<th class="text-center">Diskon</th>
                    	<th class="text-center">Total</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($transaksis as $transaksi)
						<tr>
                            <td class="text-center" width="1%">{{ $no }}</td>
							<td class="text-center">{!! $transaksi->pelanggan->user->name !!}</td>
							<td class="text-center">@if($transaksi->diskon != null) {!! $transaksi->diskon->nilai !!} % @else - @endif</td>
							<td class="text-center">{!! $transaksi->total !!}</td>
                            <td class="text-center">
                                @if($transaksi->status == 0) Booking
                                @elseif($transaksi->status == 1) Pending
                                @else Paid
                                @endif
                            </td>
							<td class="text-center">
                                <a href="{{ route('transaksi.show', [$transaksi->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">account_balance_wallet</i>
                                </a>
                                <a href="/transaksi/edit/{{$transaksi->id}}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="/transaksi/destroy/{{$transaksi->id}}" class="btn btn-sm btn-outline-danger">
                                    <i class="material-icons">delete</i>
                                </a>                      
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