<nav class="navbar navbar-expand navbar-theme">
    <a class="sidebar-toggle d-flex me-2">
        <i class="hamburger align-self-center"></i>
    </a>

    <form class="d-none d-sm-inline-block">
        <input class="form-control form-control-lite" type="text" placeholder="Search projects...">
    </form>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">

            {{-- Messages --}}
            @include('backend.partials.messages')

            {{-- Notifications --}}
            @include('backend.partials.notifications')

            {{-- Settings --}}
            @include('backend.partials.settings')

        </ul>
    </div>

</nav>
