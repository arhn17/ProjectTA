<html>
    <table>
        <tr>
            <td colspan="2"></td>
            <td><b>TRANSACTION REPORT</b></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><b>Period : {{$start_date}} - {{$end_date}}</b></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>Total Transaction : {{count($transaction)}}</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td></td>
        </tr>
    </table>
    <table>
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
    </table>
    <table>
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
    </table>
</html>