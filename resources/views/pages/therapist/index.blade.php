@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Therapist Data</h2>
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
                    <a href="{{url('/therapist/new')}}" class="btn btn-primary"><i class="material-icons">add</i><span>New Therapist</span></a>
                </div>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center" width="1%">ID</th>
						<th class="text-center">Therapist Name</th>
                        <th class="text-center" width="20%">Action</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no=1; ?>
                    @foreach($therapist as $therapist)
                        <tr>
                            <td class="text-center">{{$no}}</td>
                            <td class="text-center">{{$therapist->id}}</td>
                            <td>{{$therapist->nama}}</td>
                            <td class="text-center">
                                <a href="/therapist/show/{{$therapist->id}}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="/therapist/destroy/{{$therapist->id}}" class="btn btn-sm btn-outline-danger">
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