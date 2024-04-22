<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6 ">
    <div
        class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="" class="b-brand">
      <h3 style="color:white">Victor <span style="color:red">Agro</span></h3>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div"
            id="layout-sidenav" >	
    
            <ul class="nav pcoded-inner-navbar sidenav-inner">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                    class="nav-item pcoded-hasmenu">
                    <a href="{{ route('dashboard') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span
                            class="pcoded-mtext">Dashboard</span></a>						
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Product</label>
                </li>
                <li data-username="basic components button alert badges breadcrumb pagination progress tooltip popovers carousel cards collapse tabs pills modal spinner grid system toasts typography extra shadows embeds"
                    class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span
                            class="pcoded-mtext">Products</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="{{ route('product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product List</a></li>
                        <li class=""><a href="" class="">Add Product</a></li>
                    </ul>
                </li>
            </ul>		
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->