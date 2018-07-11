<div class="image">
    <img src="{{ url('template/images/user.png') }}" width="48" height="48" alt="User" />
</div>
<div class="info-container">
    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</div>
    <div class="email">Admin Name</div>
    <div class="btn-group user-helper-dropdown">
        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
        <ul class="dropdown-menu pull-right">
            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
            <li role="seperator" class="divider"></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">input</i>Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>