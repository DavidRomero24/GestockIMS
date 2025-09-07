<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(16, 63, 125);">

  <!-- Brand Logo -->


  <div>
    <a href="index3.html" class="brand-link" style="display: flex; justify-content: center;">
      <img src="{{asset('backend/dist/img/GESTOCK.png')}}" style="width: 90%; height: auto;" alt="">
      <!-- <div style="display: block; "> -->
        <!-- <strong style="color: white; display: block">GESTOCK</strong>  -->
        <!-- <span class="font-weight-light" style="font-size: small;">Inventory Management System</span> -->
      <!-- </div> -->
    </a>
  </div>

  <!-- Sidebar -->
  <div class="sidebar" style="background-color: rgb(16, 63, 125);">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->
    <div class="form-inline" style="margin-top: 10px;">
      <div class="input-group" data-widget="sidebar-search">
        <input style="background-color: #FBF9F1;" class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar" style="background-color: #0DCAF0;">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="home" class="nav-link active" style="background-color: #0DCAF0;">
            <i class="nav-icon fas fa-home nav-icon"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <li class="nav-item" style="color: #FBF9F1">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-shopping-bag"></i>
            <p>
              Buy
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a style="display: flex; " href="{{route('products.index')}}" class="nav-link">
                <div style="margin: 0; display: flex; margin-right: 10px;">   
                  <svg  xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="25" height="25" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)"><path d="M15.5,24h-7c-2.481,0-4.5-2.019-4.5-4.5V4.5C4,2.019,6.019,0,8.5,0h7c2.481,0,4.5,2.019,4.5,4.5v15c0,2.481-2.019,4.5-4.5,4.5ZM8.5,1c-1.93,0-3.5,1.57-3.5,3.5v15c0,1.93,1.57,3.5,3.5,3.5h7c1.93,0,3.5-1.57,3.5-3.5V4.5c0-1.93-1.57-3.5-3.5-3.5h-7Zm5.5,19.5c0-.276-.224-.5-.5-.5h-3c-.276,0-.5,.224-.5,.5s.224,.5,.5,.5h3c.276,0,.5-.224,.5-.5Z" fill="#ffffff" fill-opacity="1" data-original-color="#000000ff" stroke="none" stroke-opacity="1"/></g></svg>
                </div> 
                <p style="display: flex; justify-content: center; align-items: center; ">Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="test-500" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)"><path d="m6.5,0C2.91,0,0,2.91,0,6.5s2.91,6.5,6.5,6.5,6.5-2.91,6.5-6.5S10.09,0,6.5,0Zm-1.479,5.24l3.286.548c1.271.211,2.193,1.3,2.193,2.588,0,1.447-1.177,2.624-2.624,2.624h-.376v1h-2v-1c-1.654,0-3-1.346-3-3h2c0,.551.449,1,1,1h2.376c.344,0,.624-.28.624-.624,0-.307-.22-.565-.521-.616l-3.286-.548c-1.27-.211-2.192-1.3-2.192-2.588,0-1.447,1.177-2.624,2.624-2.624h.376v-1h2v1c1.654,0,3,1.346,3,3h-2c0-.551-.448-1-1-1h-2.376c-.344,0-.624.28-.624.624,0,.307.219.565.521.616Zm3.398,13.354c.774.775.774,2.037,0,2.812l-2.507,2.507-1.414-1.414,1.498-1.498h-2.997c-1.654,0-3-1.346-3-3v-4h2v4c0,.552.449,1,1,1h3.006l-1.508-1.498,1.414-1.414,2.506,2.506Zm15.581-12.594v4h-2v-4c0-.552-.449-1-1-1h-3.006l1.508,1.498-1.414,1.414-2.506-2.506c-.774-.775-.774-2.037,0-2.812L18.087.088l1.414,1.414-1.498,1.498h2.997c1.654,0,3,1.346,3,3Zm-5,12.227l4.996-2.81v5.728l-4.996,2.855v-5.773Zm-7.004-2.814l5.004,2.814v5.777l-5.004-2.859v-5.732Zm11.365-1.934l-5.361,3.015-5.365-3.018,5.361-3.064,5.365,3.066Z" fill="#ffffff" fill-opacity="1" data-original-color="#000000ff" stroke="none" stroke-opacity="1"/></g></svg>
                <p style="margin-left: 10px;">Supplies</p>
              </a>
            </li>
          </ul>
        </li>
<!-- section of sales -->
        <li class="nav-item" style="color: #FBF9F1">
          <a href="#" class="nav-link">
            <i class='fas fa-tags' style="margin-left:5px;"></i>
            <p style="margin-left:9px;">
              Sales
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('orders.index')}}" class="nav-link">
                <i class="fa fa-cart-plus nav-icon"></i>
                <p>Order</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('services.index') }}" class="nav-link">
                <i class='fas fa-phone' style="margin-left:5px"></i>
                <p style="margin-left: 10px;">Services</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- section of staff -->
        <li class="nav-item" style="color: #FBF9F1">
          <a href="#" class="nav-link">
            <i class='fas fa-user-friends' style="margin-left:5px;"></i>
            <p style="margin-left:6px;">
              Staff
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('employees.index')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)"><path d="m9,12c3.309,0,6-2.691,6-6S12.309,0,9,0,3,2.691,3,6s2.691,6,6,6Zm0-10c2.206,0,4,1.794,4,4s-1.794,4-4,4-4-1.794-4-4,1.794-4,4-4Zm-4,12h5.76c-.392.585-.651,1.266-.732,2h-5.028c-1.654,0-3,1.346-3,3v5H0v-5c0-2.757,2.243-5,5-5Zm16.5,0h-.5v-.5c0-.827-.673-1.5-1.5-1.5h-3c-.827,0-1.5.673-1.5,1.5v.5h-.5c-1.378,0-2.5,1.122-2.5,2.5v7.5h12v-7.5c0-1.378-1.122-2.5-2.5-2.5Zm-7,2h7c.276,0,.5.224.5.5v1.5h-8v-1.5c0-.276.224-.5.5-.5Zm-.5,6v-2h3v1h2v-1h3v2h-8Z" fill="#ffffff" fill-opacity="1" data-original-color="#000000ff" stroke="none" stroke-opacity="1"/></g></svg>
                <p style="margin-left: 10px;">Employee</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('customers.index')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="20" height="20" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)"><path d="m1,2.5C1,1.119,2.119,0,3.5,0s2.5,1.119,2.5,2.5-1.119,2.5-2.5,2.5S1,3.881,1,2.5Zm22.226,16.744l-7.291,1.687c.043.183.066.373.066.569,0,1.598-1.499,2.845-3.167,2.414-.849-.22-1.541-.919-1.753-1.77-.362-1.452.544-2.768,1.842-3.076l-1.369-6.068h-2.935c-.758,0-1.45-.428-1.789-1.106l-1.369-2.739c-.117-.235-.274-.44-.459-.61v7.687l.546.329c.902.543,1.454,1.518,1.454,2.571v3.868c0,.553-.448,1-1,1s-1-.447-1-1v-3.869c0-.351-.184-.675-.484-.856l-2.764-1.664C.715,15.987.074,14.871.057,13.661l-.057-4.058c0-2.576,2.69-4.512,5.389-3.16.865.433,1.539,1.176,1.972,2.042l1.257,2.515h2.484l-1.078-4.78c-.122-.538.217-1.073.755-1.195.54-.122,1.074.217,1.196.756l3.004,13.318,7.795-1.804c.54-.126,1.075.211,1.2.749.125.538-.21,1.075-.749,1.2Zm-21.226-.244c-.552,0-1,.447-1,1v3c0,.553.448,1,1,1s1-.447,1-1v-3c0-.553-.448-1-1-1Zm13.067-7.251c-.316-1.351.523-2.709,1.872-3.028l2.775-.66c.658-.156,1.335-.047,1.909.309.574.354.975.912,1.129,1.568l.668,2.852c.316,1.351-.523,2.709-1.872,3.028l-2.775.66c-.195.047-.392.069-.587.069-.463,0-.918-.128-1.321-.378-.574-.354-.975-.912-1.129-1.569l-.668-2.851Z" fill="#ffffff" fill-opacity="1" data-original-color="#000000ff" stroke="none" stroke-opacity="1"/></g></svg>
                <p style="margin-left: 10px;">Supplier</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('customers.index')}}" class="nav-link">
                <i class="far fa-user-circle nav-icon" style="font-size:23px; margin-rigth:30px"></i>
                <p>Customer</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>