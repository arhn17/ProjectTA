@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Room Data</h2>
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
                    <a href="{{url('/ruangan/new')}}" class="btn btn-primary"><i class="material-icons">add</i><span>New Room</span></a>
                </div>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">No</th>
						<th class="text-center">Room Name</th>
                    	<th class="text-center" width="20%">Status</th>
                        <th class="text-center" width="40%" colspan="2">Action</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no=1; ?>
                    @foreach($ruangan as $ruangan)
                        <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$ruangan->nama_ruang}}</td>
                            <td class="text-center">
                                @if($ruangan->status == 1) Active
                                @else Inactive
                                @endif
                            </td>
                            <td class="text-center">
                                @if($ruangan->status == 1)
                                    <a href="/ruangan/status/{{$ruangan->id}}/0" class="btn btn-sm btn-outline-warning">
                                        Inactivate
                                    </a>
                                @else 
                                    <a href="/ruangan/status/{{$ruangan->id}}/1" class="btn btn-sm btn-outline-primary   ">
                                        Activate
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="/ruangan/show/{{$ruangan->id}}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="/ruangan/destroy/{{$ruangan->id}}" class="btn btn-sm btn-outline-danger">
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