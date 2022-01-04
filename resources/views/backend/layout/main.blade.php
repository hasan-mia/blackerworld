@include('backend.partials.header')

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <div class="wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.partials.sidebar')

        <div class="main">
            <!-- partial:partials/_navbar.html -->
            @include('backend.partials.navbar')

            <main class="content">
                {{-- main content section --}}
                @yield('content')
                <!-- content-wrapper ends -->

                <!-- partial:partials/_footer.html -->
                @include('backend.partials.footer')
            </main>

        </div>

    </div>

    <!-- All js script plugins -->
    @include('backend.partials.scripts')
</body>


</html>
