<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/admin">
            <span class="align-middle">Eigentum</span>
        </a>
`
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Dashboard
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/dashboard">
                    <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Dashboard Admin</span>
                </a>
            </li>


            <li class="sidebar-header">
                Role
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('customer.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Customer</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('developer.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Developer</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('agent.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Agent</span>
                </a>
            </li>

            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li> --}}

            <li class="sidebar-header">
                Tables
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('property.index')}}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Property</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('unit.index')}}">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Unit</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('guide.index')}}">
                    <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Guide</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('subscribe.index')}}">
                    <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Subscribe</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('order.index')}}">
                    <i class="align-middle" data-feather="globe"></i> <span class="align-middle">Order</span>
                </a>
            </li>

            <li class="sidebar-header">
                Filters
            </li>

            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/specification/data">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Specification</span>
                </a>
            </li> --}}
            
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('type.index')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Type</span>
                </a>
            </li>
            

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('status.index')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Status</span>
                </a>
            </li>
            

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul>

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>
