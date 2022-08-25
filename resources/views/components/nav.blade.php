   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
       data-scroll="false">
       <div class="container-fluid py-1 px-3">
           <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
               <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                   <li class="nav-item dropdown pe-2 d-flex align-items-center">
                       <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="fa-solid fa-user-gear"></i>
                           <span>{{ Auth::user()->name }}</span>
                       </a>
                       <ul class="dropdown-menu login-dropdown dropdown-menu-end  px-2 py-3 me-sm-n4"
                           aria-labelledby="dropdownMenuButton">
                           <li class="mb-2">
                               <a class="dropdown-item border-radius-md" href="{{ route('profile.show') }}">
                                   Profile
                               </a>
                           </li>
                           <li class="mb-2">
                               <button type="button" class="dropdown-item border-radius-md" data-bs-toggle="modal"
                                   data-bs-target="#logout-Modal">
                                   Logout
                               </button>
                           </li>
                       </ul>
                   </li>
                   </ul>
               </div>
           </div>
   </nav>
   <!-- End Navbar -->

   <div class="modal fade" id="logout-Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <form action="{{ route('logout') }}" method="post">
                @csrf
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ready to leave</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <p> select "Logout" below if you are ready to end your current session.</p>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary">Logout</button>
                   </div>
               </form>
           </div>
       </div>
   </div>

<style>
    .login-dropdown{
        margin-top: 1rem !important;
    }
</style>
