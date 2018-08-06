@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Coustumer Data</h2>
    </div>
    <div class="card">
    	<div class="header">
            <ul class="header-dropdown m-r--5"></ul>
         </div>
		<div class="body">
            <div class="text-right">
                <a href="{!! route('pelanggan.create') !!}" class="btn btn-primary"><i class="material-icons">add</i><span>New Coustumer</span></a>
            </div>
			<div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">No</th>
						<th class="text-center">Name</th>
                    	<th class="text-center">Address</th>
                    	<th class="text-center">Hp</th>
                        <th class="text-center">Saldo</th>
                        <th class="text-center" width="20%">Status</th>
                    	<th class="text-center" width="1%">Aksi</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($pelanggans as $pelanggan)
						<tr>
                            <td class="text-center">{{$no}}</td>
							<td class="text-center">{!! $pelanggan->nama !!}</td>
							<td class="text-center">{!! $pelanggan->alamat !!}</td>
							<td class="text-center">{!! $pelanggan->telepon !!}</td>
                            <td class="text-center">{{number_format($pelanggan->saldo)}}</td>
                            <td class="text-center">@if($pelanggan->user_id ==1) Non Member @else Member @endif</td>
							<td class="text-center">
                                <a href="{{ route('pelanggan.edit', [$pelanggan->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>                     
                            </td>
                            <?php $no++; ?>
						</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
    </div>
</div>
</div>
</div>
@endsection