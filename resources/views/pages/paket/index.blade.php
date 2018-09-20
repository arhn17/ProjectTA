@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Package Data</h2>
    </div>
    <div class="card">            
            <div class="header">
            	 <ul class="header-dropdown m-r--5"></ul>
            </div>
            <div class="body">  
                @if($save == "success")
                    <div class="alert alert-success">
                        <ul>
                             <li>Data Saved</li>
                        </ul>
                    </div>
                    @elseif($save == "error")
                    <div class="alert alert-danger">
                        <ul>
                             <li>Saving Failed</li>
                        </ul>
                    </div>
                @endif
                <div class="text-right">
                    <a href="{{url('/paket/new')}}" class="btn btn-primary"><i class="material-icons">add</i><span>New Package</span></a>
                </div>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">No</th>
						<th class="text-center">Name</th>
                    	<th class="text-center" width="20%">Member Price</th>
                        <th class="text-center" width="20%">Normal Price</th>
                        <th class="text-center" width="20%">Action</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no=1; ?>
                    @foreach($paket as $paket)
                        <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$paket->nama_paket}}</td>
                            <td class="text-center">{{$paket->tarif_member}}</td>
                            <td class="text-center">{{$paket->tarif_normal}}</td>
                            <td class="text-center">
                                <a href="/paket/show/{{$paket->id}}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="/paket/destroy/{{$paket->id}}" class="btn btn-sm btn-outline-danger">
                                    <i class="material-icons">delete</i>
                                </a> </td>
                        </tr>
                    <?php $no++; ?>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
    </div>
</div>
@endsection