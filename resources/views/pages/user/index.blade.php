@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>DATA USER</h2>
    </div>
    <div class="card">            
            <div class="header">
            	 <ul class="header-dropdown m-r--5"></ul>
            </div>
            <div class="body">  
                <div class="text-right">
                    <a href="{!! route('user.create') !!}" class="btn btn-primary"><i class="material-icons">add</i><span>New User</span></a>
                </div>
			<br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
				<thead>
					<tr>
                        <th class="text-center">No</th>
						<th class="text-center">Name</th>
                    	<th class="text-center">Email</th>
                    	<th class="text-center">Status</th>
                        <th class="text-center">Option</th>
                    	<th class="text-center">Action</th>
                    </tr>
				</thead>
				<tbody>
                    <?php $no = 1; ?>
					@foreach($users as $user)
						<tr>
                            <td class="text-center" width="1%">{{ $no }}</td>
							<td class="text-center">{!! $user->name !!}</td>
							<td class="text-center">{!! $user->email !!}</td>
                            <td class="text-center">
                                @if($user->status == 0)
                                    <span>Active </span>
                                @else
                                    <span>Non Active </span>
                                @endif
                                </td>
                            <td class="text-center">
                                @if($user->status == 0)
                                    <a href="user/activated/{{$user->id}}/1" class="btn btn-sm btn-outline-primary">
                                        Deactivated
                                    </a>
                                @else
                                    <a href="user/activated/{{$user->id}}/0" class="btn btn-sm btn-outline-secondary">
                                        Activated
                                    </a>
                                @endif
                             </td>
							<td class="text-center">
                                <a href="user/show/{{ $user->id }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">account_balance_wallet</i>
                                </a>
                                <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">mode_edit</i>
                                </a>
                                <a href="user/destroy/{{ $user->id }}" class="btn btn-sm btn-outline-danger">
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
@endsection