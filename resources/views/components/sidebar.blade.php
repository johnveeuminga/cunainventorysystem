<aside id="sidebar">
    <div id="sidebar-wrap">
        <div class="logo text-center text-lg text-uppercase p-3">
            <a href="{{ route('dashboard.index') }}" class="text-white">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <ul class="nav mt-4 flex-column">
            <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="text-uppercase nav-link">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.branches.index') }}" class="text-uppercase nav-link">
                    <i class="fas fa-map-marker-alt"></i>
                    Branch
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.inventory.index') }}" class="text-uppercase nav-link">
                    <i class="fas fa-wrench"></i>
                    Inventory
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('dashboard.users.index') }}" class="text-uppercase nav-link">
                    <i class="fas fa-users"></i>
                    Accounts
                </a>
            </li>
        </ul>
    </div>
</aside>