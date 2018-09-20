
<ul class="list">
    <li class="header">Menu</li>
    <li class="active"></li>
    <li>
        <a href="{!! url('/home') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
    </li>
    <li>
        <a href="{!! route('transaksi.index') !!}">
            <i class="material-icons">payment</i>
            <span>Transaction</span>
        </a>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">people</i>
            <span>Coustumer</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="{!! route('pelanggan.index') !!}">
                    <span>Coustumer Data</span>
                </a>
            </li>
            <li>
                <a href="{{url('/topup')}}">
                    <span>Top Up</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">assignment</i>
            <span>Service Management</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="{{url('/service')}}">
                    <span>Service</span>
                </a>
            </li>
            <li>
                <a href="{{url('/paket')}}">
                    <span>Package</span>
                </a>
            </li>
            <li>
                <a href="{{url('/diskon')}}">
                    <span>Discount</span>
                </a>
            </li>
            <li>
                <a href="{{url('/ruangan')}}">
                    <span>Room</span>
                </a>
            </li>
            <li>
                <a href="{{url('/therapist')}}">
                    <span>Therapist</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{url('/report?startdate=&end_date=')}}">
                <i class="material-icons">report</i>
                <span>Report</span>
        </a>
    </li>
    <li>
        <a href="{!! route('user.index') !!}">
                <i class="material-icons">person_pin</i>
                <span>Manajemen User</span>
        </a>
    </li>
</ul>