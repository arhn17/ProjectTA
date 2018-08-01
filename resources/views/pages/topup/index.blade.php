@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>History Topup Data</h2>
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
                    <a href="{{url('/topup/new')}}" class="btn btn-primary"><i class="material-icons">add</i><span>New Topup</span></a>
                </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th class="text-center" width="1%">No</th>
                        <th class="text-center">Coustumer</th>
                        <th class="text-center">Nominal</th>
                        <th class="text-center">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach($topup as $topup)
                        <tr>
                            <td class="text-center">{{$no}}</td>
                            <td class="text-center">{{$topup->pelanggan->user->name}}</td>
                            <td class="text-center">{{$topup->nominal}}</td>
                            <td class="text-center">{{$topup->waktu_topup}}</td>
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