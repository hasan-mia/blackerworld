<li class="nav-item dropdown ms-lg-2">
    <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
        <i class="align-middle fas fa-cog"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i>
            View Profile</a>
        <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i>
            Contacts</a>
        <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i>
            Analytics</a>
        <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i>
            Settings</a>
        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i
                class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign
            out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
