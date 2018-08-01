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
						<th class="text-center">Nama</th>
                    	<th class="text-center">Alamat</th>
                    	<th class="text-center">telepon</th>
                    	<th class="text-center" width="20%">Aksi</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($pelanggans as $pelanggan)
						<tr>
                            <td class="text-center">{{$no}}</td>
							<td class="text-center">{!! $pelanggan->user->name !!}</td>
							<td class="text-center">{!! $pelanggan->alamat !!}</td>
							<td class="text-center">{!! $pelanggan->telepon !!}</td>

							<td class="text-center">
                                <a href="{{ route('pelanggan.edit', [$pelanggan->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <button onclick="event.preventDefault();confirmDeletion('{{ route('pelanggan.destroy', [$pelanggan->id]) }}');" class="btn btn-sm btn-outline-danger">
                                    <i class="material-icons">delete</i>
                                </button>                      
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