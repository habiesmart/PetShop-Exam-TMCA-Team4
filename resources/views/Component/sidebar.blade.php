<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">
                <img src="{{ asset('img/logo_dark.png') }}" height="30">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">
                <img src="{{ asset('img/emblem_dark.png') }}" height="20">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Menu</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" asp-area="" asp-controller="Order" asp-action="Index" href="{{ route('order') }}">Order</a></li>
                    <li><a class="nav-link" asp-area="" asp-controller="Order" asp-action="Index" href="{{ route('order-list') }}">Order List</a></li>
                    <li><a class="nav-link" asp-area="" asp-controller="Paket" asp-action="Index" href="{{ route('paket-perawatan')}}" >Paket Perawatan</a></li>
                </ul>
            </li>
            {{-- <li class="menu-header">Transaction</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Transaction</span></a>
                <ul class="dropdown-menu">
                    <li>
                    <li><a class="nav-link" asp-area="" asp-controller="Penjualan" asp-action="Index">Penjualan</a></li>
                </ul>
            </li> --}}
        </ul>
    </aside>
</div>