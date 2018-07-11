
<ul class="list">
    <li class="header">Menu</li>
    <li class="active">
        <a href="{!! url('/home') !!}">
            <i class="material-icons">home</i>
            <span>Home</span>
        </a>
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
                <a href="{!! route('pelanggan.create') !!}">
                    <span>Registration</span>
                </a>
            </li>
            <li>
                <a href="{!! route('pelanggan.index') !!}">
                    <span>Coustumer Data</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span>Top Up</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">people</i>
            <span>Service Management</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="{!! route('pelanggan.create') !!}">
                    <span>Service</span>
                </a>
            </li>
            <li>
                <a href="{!! route('pelanggan.index') !!}">
                    <span>Package</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span>Discount</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span>Room</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span>Therapist</span>
                </a>
            </li>
        </ul>
    </li>
    <a href="{!! route('pelanggan.index') !!}">
            <i class="material-icons">people</i>
            <span>Report</span>
    </a>
    <a href="{!! route('user.index') !!}">
            <i class="material-icons">people</i>
            <span>Manajemen User</span>
    </a>
</ul>