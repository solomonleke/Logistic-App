<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transpix - Transport & Logistic</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <link rel="shortcut icon" type="image/png" href="logo.png">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <link rel="stylesheet" href="faq_style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/blog-admin" class="nav-link">Blogs</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/order-admin" class="nav-link">Orders</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/about-admin" class="nav-link">Settings</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/calculator" class="nav-link">Calculator</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link"  href="#" role="button">

       <p>Welcome|
         @if($message = Session::get('username'))
         {{$message}}
         @endif
       </p>
        </a>
        <div class="navbar-search-block">
       
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="/logout" role="button">
       <p>Logout</p>
        </a>
        <div class="navbar-search-block">
       
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
       
         
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="logo.png" alt="Logistic Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Transpix</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQs</p>
                </a>
              </li> -->
              <li class="nav-item active">
                <a href="/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/blog-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/order-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/about-admin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/calculator" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Calculator</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h1 class="card-title">Regulator</h1>
                </div>
               <div class="flash">
                @if($message = Session::get('success'))
                
                <h2>
                    {{$message}}  
                </h2>
                   @endif
               </div>
    
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>KM</th>
                        <th></th>
                        <th>Price</th>
                        
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                       
                        <td>1</td>
                        <td><div class="center"><i class="fas fa-arrows-alt-h arrow"></i></div></td>
                        <td><input name="KM_price" value="{{$data['KM_price']}}" type="number"></td>
                        
                      </tr>
               
            
                      </tbody>
                      <thead>
                        <tr>
                          <th>KG</th>
                          <th></th>
                          <th>Price</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                         
                          <td>1</td>
                          <td><div class="center"><i class="fas fa-arrows-alt-h arrow"></i></div></td>
                          <td><input name="KG_price" value="{{$data['KG_price']}}" type="number"></td>
                         
                        </tr>
                 
              
                        </tbody>
                        <thead>
                            <tr>
                              <th>Freight</th>
                              <th></th>
                              <th>Price</th>
                              
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                             
                              <td>Air Freight</td>
                              <td><div class="center"><i class="fas fa-arrows-alt-h arrow"></i></div></td>
                              <td><input name="air_fright" value="{{$data['air_fright']}}" type="number"></td>
                             
                            </tr>
                            <tr>
                             
                                <td>Road Freight</td>
                                <td><div class="center"><i class="fas fa-arrows-alt-h arrow"></i></div></td>
                                <td><input name="ocean_fright" value="{{$data['ocean_fright']}}" type="number"></td>
                               
                              </tr>
                              <tr>
                             
                                <td>OceanFreight</td>
                                <td><div class="center"><i class="fas fa-arrows-alt-h arrow"></i></div></td>
                                <td><input name="road_fright" value="{{$data['road_fright']}}" type="number"></td>
                               
                              </tr>
                     
                  
                            </tbody>
                        <style>
                            .arrow{
                                text-align: center;
                                font-size: 25px;
                                color: rgb(63, 63, 63);
                            }
                            .center{
                                display: flex;
                                justify-content: center
                            }
                            #btn{
                                text-decoration: none;
                                color: white;
                           }
                           .flash{
                               display: flex;
                               justify-content: center;
                               
                              

                           }
                           .flash h2{
                              background: rgb(6, 105, 6);
                              padding: 10px;
                              color: rgb(255, 255, 255);
                              font-size: 16px;
                           }
                        </style>
                    </table>
                    <br>
                    <div class="offset-lg-10 col-lg-2">
                        <button type="submit" class="btn btn-info">Update Calculator</button>
                    </div>

                </form>
                    
                </div>
   

   


  </div>
</div>
</div>
</div>
    </section>

</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
