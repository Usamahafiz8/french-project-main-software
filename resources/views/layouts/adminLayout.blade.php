<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">   
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/formstyle.css')}}">
    <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/wizard.css')}}">
    @yield('tablestyling')
    @yield('tablescript')
    <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
   <script src="{{asset('js/dynamictable.js')}}"></script>
    <script src="{{asset('js/wizard.js')}}"></script>
    <script src="{{asset('js/ajaxcalls.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   
   <script src="{{asset('js/plugin.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
   <!-- javascript -->
   <script src="{{asset('js/owl.carousel.js')}}"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  </head>

  <body>
    <div class="wrapper">
      <div id="overlay"></div>
      <!-- sidebar start -->
      <div class="sidebar shadow">
        <div class="admin_brand d-flex justify-content-between align-items-baseline">
          <div>
            <a class="nav-link fw-bold" href="{{url('admin/home')}}">
              <span class="icon"><img src="{{asset('images/logo.png')}}"></span>
            </a>
          </div>
          <div class="d-block d-md-none">
            <a href="javascript:void(0)" id="close_sidebar"><i class="fas fa-times-circle fa-lg"></i></a>
          </div>
        </div>

        <ul class="nav nav-pills flex-column">

          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/home')}}">
              <span class="icon" data-bs-toggle="tooltip" data-bs-title="Dashboard"><i
                  class="fas fa-dashboard"></i></span>
              <span class="menu">Dashboard</span>
            </a>
          </li>

          <!-- drodown menu start -->
          <!-- <li class="nav-item position-relative" data-bs-toggle="collapse" href="#masterCollapse" role="button"
            aria-expanded="false" aria-controls="masterCollapse">
            <a class="nav-link" href="#">
              <span class="icon" data-bs-toggle="tooltip" data-bs-title="Master">
                <i class="fas fa-cubes"></i>
              </span>
              <span class="menu">Master</span>
            </a>
          </li>
          <div class="collapse" id="masterCollapse">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon" data-bs-toggle="tooltip" data-bs-title="Child One">
                  <i class="fas fa-cube"></i>
                </span>
                <span class="menu">Child One</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="icon" data-bs-toggle="tooltip" data-bs-title="Child Two">
                  <i class="fas fa-cube"></i>
                </span>
                <span class="menu">Child Two</span>
              </a>
            </li>
          </div> -->
          <!-- dropdown menu end -->



          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/manageAuditor')}}">
              <span class="icon" data-bs-toggle="tooltip" data-bs-title="Users"><i class="fas fa-book"></i></span>
              <span class="menu">Auditors</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{url('admin/manageCustomer')}}">
              <span class="icon" data-bs-toggle="tooltip" data-bs-title="Users"><i class="fas fa-users"></i></span>
              <span class="menu">Customers</span>
            </a>
          </li>


          <li class="nav-item">
            
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              <span class="icon" data-bs-toggle="tooltip" data-bs-title="Users"><i class="fas fa-sign-out-alt"></i></span>
              <span class="menu">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>


        </ul>
      </div>
      <!-- sidebar end -->
      <div class="content">
        <!-- top navbar start -->
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
          <div class="container-fluid px-3">

            <button class="navbar-toggler border-0" type="button" id="show_sidebar_phone">
              <span class="navbar-toggler-icon"></span>
            </button>


            <a class="navbar-brand d-none d-md-block" href="javascript:void(0)" id="show_sidebar_pc">
              <i class="fas fa-bars fa-lg"></i>
            </a>

            <div class="fw-bold text-secondary d-md-none d-block">Admin Panel</div>


            <div class="ms-auto d-flex align-items-center">

              <div class="nav-item d-none d-md-block me-2" data-bs-toggle="tooltip" data-bs-title="Full Screen"
                data-bs-placement="left">
                <a href="#" class="nav-link" id="fullscreen">
                  <i class="fa-solid fa-expand"></i>
                </a>
              </div>

              <div class="dropdown">

                <a class="nav-link dropdown-toggle py-1 px-3 rounded-1" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('avatars/')}}/{{auth()->user()->avatar }}" class="rounded-circle" width="50" height="25">
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card me-2"></i>Profile</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear me-2"></i>Account</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                  </li>
                </ul>
              </div>


            </div>


          </div>
        </nav>
        <!-- top navbar end -->
        <!-- main content start -->
        <main class="bg-opacity-25 min-vh-100">
            @yield('contentdata')
        </main>
        <!-- main content end -->

        <!-- footer start -->
        <!-- <footer
          class="bg-light shadow text-secondary text-center d-flex flex-column flex-md-row justify-content-between p-3 p-md-4">
          <div>Copyright &copy; 2022 <a href="">test</a></div>
          <div>Made with ❤️ </div>
        </footer> -->
        <!-- footer end -->

      </div>
    </div>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
      const ctx = document.getElementById('myChart');
      const lc = document.getElementById('lineChart');
      const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
      const lineChart = new Chart(lc, {
        type: 'line',
        data: {
          labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      const cdat = document.getElementById('curr_date_time');
      setInterval(() => {
        let date = new Date();
        cdat.innerText = date.toLocaleString('en-IN', {
          weekday: 'short',
          day: 'numeric',
          year: 'numeric',
          month: 'long',
          hour: 'numeric',
          minute: 'numeric',
          second: 'numeric',
        });
      }, 1000);


    </script>

    
  </body>

</html>