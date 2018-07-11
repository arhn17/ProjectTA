@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DATA TRANSAKSI</h2>
        				<!-- <div class="body">
                                <ol class="breadcrumb breadcrumb-col-orange">
                                <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">library_books</i> Library</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">archive</i> Data</a></li>
                                <li><a href="javascript:void(0);"><i class="material-icons">attachment</i> File</a></li>
                                <li class="active"><i class="material-icons">extension</i> Extensions</li>
                            </ol>
                        </div> -->
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
    	 <div class="header">
             <ul class="header-dropdown m-r--5"></ul>
         </div>
		<div class="body">			 
			<a href="{!! route('transaksi.create') !!}" class="btn btn-primary">+ Transaksi</a>
			<br>
			<br>
			<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
						<th class="text-center">No</th>
                    	<th class="text-center">Pelanggan</th>
                    	<th class="text-center">Kategori</th>
                    	<th class="text-center">Diskon</th>
                    	<th class="text-center">Total</th>
                        <th class="text-center">Aksi</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($transaksis as $transaksi)
						<tr>
                            <td class="text-center" width="1%">{{ $no }}</td>
							<td class="text-center">{!! $transaksi->user->name !!}</td>
							<td class="text-center">{!! $transaksi->kategori !!}</td>
							<td class="text-center">{!! $transaksi->diskon !!}</td>
							<td class="text-center">{!! $transaksi->total !!}</td>

							<td class="text-center">
                                <a href="{{ route('transaksi.show', [$transaksi->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">account_balance_wallet</i>
                                </a>
                                <a href="{{ route('transaksi.edit', [$transaksi->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <button onclick="event.preventDefault();confirmDeletion('{{ route('transaksi.destroy', [$transaksi->id]) }}');" class="btn btn-sm btn-outline-danger">
                                    <i class="material-icons">delete</i>
                                </button>                      
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