<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/c866864c-cdfe-49b6-92cf-352e9804fd34.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Jeewaka Herbals</span>
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
          </li>
      </ul>
    </div>
  </aside>
