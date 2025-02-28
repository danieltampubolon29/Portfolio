<div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
    <div class="d-flex align-items-center p-3">
        <a href="#" class="apanya sidebar-logo fw-bold text-decoration-none fs-4">FernanDev</a>
        <i class="sidebar-toggle ri-arrow-left-circle-line ms-auto fs-5 d-none d-md-block"></i>
    </div>
    <ul class="sidebar-menu p-3 m-0 mb-0">
        <li class="sidebar-menu-item active">
            <a href="#">
                <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                Dashboard
            </a>
        </li>
        <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">MENU</li>
        <li class="sidebar-menu-item has-dropdown">
            <a href="#">
                <i class="ri-pages-line sidebar-menu-item-icon"></i>
                Pages
                <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
            </a>
            <ul class="sidebar-dropdown-menu">
                <li class="sidebar-dropdown-menu-item">
                    <a href="{{ route('portfolio.index') }}">
                        Portfolio
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar-menu-item has-dropdown">
            <a href="#">
                <i class="ri-user-line sidebar-menu-item-icon"></i>
                Authentication
                <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i>
            </a>
            <ul class="sidebar-dropdown-menu">
                <li class="sidebar-dropdown-menu-item">
                    <a href="{{ route('profile.edit') }}">
                        Profile
                    </a>
                </li>
                <li class="sidebar-dropdown-menu-item">
                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" onclick="document.getElementById('logout-form').submit();">
                        Log Out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>