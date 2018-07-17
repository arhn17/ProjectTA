@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Service Data</h2>
    </div>
    <div class="card">            
            <div class="header">
            	 <ul class="header-dropdown m-r--5"></ul>
            </div>
            <div class="body">  
                <div class="text-right">
                    <a href="{{url('/service/new')}}" class="btn btn-primary"><i class="material-icons">add</i><span>New Service</span></a>
                </div>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">No</th>
						<th class="text-center">Name</th>
                    	<th class="text-center">Type</th>
                        <th class="text-center">Level</th>
                    	<th class="text-center">Duration</th>
                        <th class="text-center">Action</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no=1; ?>
                    @foreach($service as $service)
                        <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$service->nama_services}}</td>
                            <td class="text-center">{{$service->tipe}}</td>
                            <td class="text-center">{{$service->level}}</td>
                            <td class="text-center">{{$service->durasi}}</td>
                            <td class="text-center">
                                <a href="/service/show?id={{$service->id}}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="/service/destroy/{{$service->id}}" class="btn btn-sm btn-outline-danger">
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