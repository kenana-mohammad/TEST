
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.html">
          <img src="assets/images/logo/logo.svg" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a
         
            >
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                  <path
                    d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                </svg>
              </span>
              <span class="text">Dashboard</span>
            </a>
            
          </li>
          <!-- user -->

          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
</svg>
              </span>
              <h5 class="text">Users</h5>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="{{route('users.index')}}"> users </a>
              </li>
             
            </ul>
          </li>
         <!-- end_user -->
        
<!-- role -->

<li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_6"
              aria-controls="ddmenu_6"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
              <i class="lni lni-protection"></i>
              </span>
              <h5 class="text">role</h5>
            </a>
            <ul id="ddmenu_6" class="collapse dropdown-nav">
              <li>
                <a  href="{{route('roles.index')}}"> role </a>
              </li>
             
            </ul>
</li>
      
         <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_3"
              aria-controls="ddmenu_3"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
              <i class="lni lni-protection"></i>
              </span>
              <h5 class="text">films</h5>
            </a>
            <ul id="ddmenu_3" class="collapse dropdown-nav">
              <li>
                <a  href="{{route('film.index')}}"> film </a>
              </li>
             
            </ul>
</li>
         


    
<li class="nav-item nav-item-has-children">
   <a
     href="#0"
     class="collapsed"
     data-bs-toggle="collapse"
     data-bs-target="#ddmenu_4"
     aria-controls="ddmenu_4"
     aria-expanded="false"
     aria-label="Toggle navigation"
   >
     <span class="icon">
     <i class="lni lni-text-align-left"></i>
     </span>
     <h5 class="text">type</h5>
   </a>
   <ul id="ddmenu_4" class="collapse dropdown-nav">
     <li>
       <a href="{{route('type.index')}}"> Type  </a>
     </li>
    
   </ul>
</li>

<li class="nav-item nav-item-has-children">
   <a
     href="#0"
     class="collapsed"
     data-bs-toggle="collapse"
     data-bs-target="#ddmenu_5"
     aria-controls="ddmenu_5"
     aria-expanded="false"
     aria-label="Toggle navigation"
   >
     <span class="icon">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
     </span>
     <h5 class="text">Type Films</h5>
   </a>
   <ul id="ddmenu_5" class="collapse dropdown-nav">
     <li>
       <a href="{{route('film_Type.index')}}"> Type Film </a>
     </li>
    
   </ul>
</li>

          <span class="divider"><hr /></span>
</aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->
