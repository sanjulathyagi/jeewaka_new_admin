<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header text-center">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ url('/') }}" target="_blank">
        <img src="{{ asset('assets/img/c866864c-cdfe-49b6-92cf-352e9804fd34.jpg') }} "  class="navbar-brand-img h-100" alt="main_logo">
        {{-- <span class="ms-1 font-weight-bold">Jeewaka Herbals</span> --}}
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ in_array($curr_url,['dashboard'])?'active':'' }}" href="{{ route('dashboard') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-desktop"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['categories.all','categories.new','categories.edit'])?'active':'' }}" href="{{ route('categories.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa-solid fa-layer-group text-sucess text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Category Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['products.all','products.new','products.edit'])?'active':'' }}" href="{{ route('products.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fab fa-pagelines"></i>
              </div>
              <span class="nav-link-text ms-1">Product Management</span>
            </a>
            <ul class="collapse list-unstyled" id="item-menu">
                <li class="nav-item">
                  <a class="nav-link {{ in_array($curr_url,['products.all','products.new','products.edit'])?'active':'' }}"
                   href="{{ route('products.all') }}">
                        <i class="fab fa-envira ml-4"></i>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['products.receive.all'])?'active':'' }}"
                        href="{{ route('products.receive.all') }}">
                        <i class="fas fa-cubes ml-4"></i><span class="hide-menu">Stock Receive</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['products.return.all'])?'active':'' }}"
                        href="{{ route('products.return.all') }}">
                        <i class="fas fa-undo ml-4"></i><span class="hide-menu">Stock Return</span>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['orders.all','orders.new','orders.edit'])?'active':'' }}" href="{{ route('orders.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-shopping-bag"></i>
              </div>
              <span class="nav-link-text ms-1">Order Management</span>
            </a>
            <ul class="collapse list-unstyled" id="order-menu">
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['orders.retail.new','orders.retail.all','orders.retail.edit','orders.retail.view'])?'active':'' }}"
                        href="{{ route('orders.retail.all') }}">
                        <i class="fas fa-briefcase ml-4"></i><span class="hide-menu">Retail Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['orders.wholesale.new','orders.wholesale.all','orders.wholesale.edit','orders.wholesale.view'])?'active':'' }}"
                        href="{{ route('orders.wholesale.all') }}">
                        <i class="fas fa-luggage-cart ml-4"></i><span class="hide-menu">Wholesale Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['quotations.all','quotations.view'])?'active':'' }}"
                        href="{{ route('quotations.all') }}">
                        <i class="fas fa-clipboard-list ml-4"></i><span class="hide-menu">Quotations</span>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['customers.all','customers.new','customers.edit'])?'active':'' }}" href="{{ route('customers.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-users"></i>
              </div>
              <span class="nav-link-text ms-1">Customer Management</span>
            </a>
            <ul class="collapse list-unstyled" id="customer-menu">
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['customers.all','customers.edit','customers.view','customers.new'])?'active':'' }}"
                        href="{{ route('customers.all') }}">
                        <i class="fas fa-users-cog ml-4"></i><span class="hide-menu">Customers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['agency.all','agency.edit','agency.view','agency.new'])?'active':'' }}"
                        href="{{ route('agency.all') }}">
                        <i class="fas fa-building ml-4"></i><span class="hide-menu">Agency</span>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['requests.all','requests.new','requests.edit'])?'active':'' }}" href="{{ route('requests.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              <span class="nav-link-text ms-1">Request Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['profits.all','profits.new','profits.edit'])?'active':'' }}" href="{{ route('profits.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-money"></i>
              </div>
              <span class="nav-link-text ms-1">Profit Management</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ in_array($curr_url,['settings.all','settings.new','settings.edit'])?'active':'' }}" href="{{ route('settings.all') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fa fa-cog"></i>
              </div>
              <span class="nav-link-text ms-1">Settings</span>
            </a>
            <ul class="collapse list-unstyled" id="homesubmenu">
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['settings.social'])?'active':'' }}"
                        href="{{ route('settings.social') }}">
                        <i class="fa fa-users ml-4"></i><span class="hide-menu">Social</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['settings.contact'])?'active':'' }}"
                        href="{{ route('settings.contact') }}">
                        <i class="fa fa-phone ml-4"></i><span class="hide-menu">Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['settings.day'])?'active':'' }}"
                        href="{{ route('settings.day') }}">
                        <i class="fa fa-clock ml-4"></i><span class="hide-menu">Open Time</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ in_array($curr_url,['settings.shipping'])?'active':'' }}"
                        href="{{ route('settings.shipping') }}">
                        <i class="fas fa-shipping-fast ml-4"></i><span class="hide-menu">Shipping</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
          </li>
      </ul>
    </div>
  </aside>
