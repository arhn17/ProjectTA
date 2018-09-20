<html>
<head>
    <style type="text/css">
    @page {
  margin: 0;
}
        body {
  padding: .5in;
  font-size: 5px
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
    </style>
</head>
<body> 
    <div>
        <img width="100px" src="{{url('images/logo.png')}}" style="float: left;">
        <div style="margin-left: 10px">
            <h5><b>TRANSACTION REPORT</b></h5>
            <h5><b>Period : {{$start_date}} - {{$end_date}}</b></h5>
            <h5>Total Transaction : {{count($transaction)}}</h5>
        </div>
    </div>
    <br><br>
    <div>
        <table width="1000px">
            <thead>
                <tr>
                    <td align="center">ID</td>
                    <td align="center">Date</td>
                    <td align="center">Coustumer</td>
                    <td align="center">Status</td>
                    <td align="center">Duration (Minute)</td>
                    <td align="center">Discount</td>
                    <td align="center">Total</td>
                    <td align="center">Bill</td>
                </tr>
            </thead>
            <tbody>

                <?php $total = 0; ?>
                @if(!empty($transaction)) {
                    @foreach($transaction as $item_transaction) 
                        <tr>
                            <td>{{$item_transaction->id}}</td>
                            <td>{{$item_transaction->trans_date}}</td>
                            <td>{{$item_transaction->pelanggan->nama}}</td>
                            <td>Paid</td>
                            <td>{{$item_transaction->durasi}}</td>
                            <td>
                                @if($item_transaction->diskon_id != null) {{$item_transaction->durasi}} {{$item_transaction->diskon->nilai}} %
                                @else -
                                @endif
                            </td>
                            <td>{{$item_transaction->total}}</td>
                            <td>
                                @if($item_transaction->diskon_id == null)
                                    {{$item_transaction->total}}
                                    <?php $total += $item_transaction->total ?>
                                @else
                                    {{$item_transaction->total - ($item_transaction->total / $item_transaction->diskon->nilai)}}
                                    <?php $total += $item_transaction->total - ($item_transaction->total / $item_transaction->diskon->nilai) ?>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif
                <tr>
                    <td><b>GRAND TOTAL</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>{{$total}}</b></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>