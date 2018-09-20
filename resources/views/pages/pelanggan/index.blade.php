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
                <a href="{!! route('pelanggan.create') !!}" class="btn btn-primary"><i class="material-icons">add</i><span>New Coustumer</span></a>
            </div>
			<div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center" width="1%">ID</th>
						<th class="text-center">Name</th>
                    	<th class="text-center">Address</th>
                    	<th class="text-center">Hp</th>
                        <th class="text-center">Saldo</th>
                        <th class="text-center" width="20%">Status</th>
                    	<th class="text-center" width="15%">Aksi</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($pelanggans as $pelanggan)
						<tr>
                            <td class="text-center">{{ $pelanggan->id }}</td>
							<td class="text-center">{!! $pelanggan->nama !!}</td>
							<td class="text-center">{!! $pelanggan->alamat !!}</td>
							<td class="text-center">{!! $pelanggan->telepon !!}</td>
                            <td class="text-center">Rp.{{number_format($pelanggan->saldo)}}</td>
                            <td class="text-center">@if($pelanggan->user_id ==1) Non Member @else Member @endif</td>
							<td class="text-center">
                                <a href="{{ route('pelanggan.edit', [$pelanggan->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a> <a href="#" onclick="delete_pelanggan({{$pelanggan->id}})" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">delete</i>
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
@section('script')
<script type="text/javascript">
    function delete_pelanggan(id){
        var token = $('meta[name="token"]').attr('content');

        swal({
            title: "Are you sure ?",
            text: "You will delete all data that used this user !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function () {

            $.ajax({
                type : "GET",
                url : "/pelanggan/delete/"+ id,
                dataType : "json",
            }).done(function(response){
                if (response.message == 0) {
                    swal({
                            title: "Deleted success",
                            text: "",
                            type: "success",
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "OK"
                        }, function(){location.reload()});
                }
                else{
                    swal("Deleted was failed !", "", "error");
                }
            }).error(function(data){
                swal("Deleted was failed !", "", "error");
            });
        });
    }
</script>
@endsection