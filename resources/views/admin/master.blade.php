  <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <!-- Styles -->
   @livewireStyles
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('spicatheme/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('spicatheme/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('spicatheme/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('spicatheme/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="{{route('tags.index')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('tags.index')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>

            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.show') }}">
              <i class="mdi mdi-account-circle"></i>::
              <span class="menu-title">Profile</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{route('tags.index')}}">
              <i class="mdi mdi-arrow-all"></i>::

              <span class="menu-title">Tags</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">
              <i class="mdi mdi-arrow-collapse-horizontal"></i>::
              <span class="menu-title">Categories</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('gigs.index') }}">
              <i class="mdi mdi-comment-check"></i>::
              <span class="menu-title">Gigs</span>
            </a>
          </li>

      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          <!--<button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
              <img class="h-8 w-8 rounded-full object-cover" src="{{-- Auth::user()->profile_photo_url --}}" alt="{{-- Auth::user()->name --}}" />
          </button>-->

          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="{{ route('profile.show') }}"><img src="{{ Auth::user()->profile_photo_url }}" alt="logo" width="10%" style="border-radius:50%;" /></a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('profile.show') }}"><img src="{{ Auth::user()->profile_photo_url }}" alt="logo" width="10%" style="border-radius:50%;" /></a>
          </div>
      @else
          <span class="inline-flex rounded-md">
              <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                  {{ Auth::user()->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
              </button>
          </span>
      @endif
          <h6 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back,  {{ Auth::user()->name }}</h6>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h6 class="mb-0 font-weight-bold d-none d-xl-block">{{ date('d-M-Y') }}</h6>
            </li>

            <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
               <!-- <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                  </div>
                </a>-->
              </div>
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
               <!-- <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>=-->
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">



                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <!--<button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-8 w-8 rounded-full object-cover" src="{{-- Auth::user()->profile_photo_url --}}" alt="{{-- Auth::user()->name --}}" />
                </button>-->
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                   <img src="{{ Auth::user()->profile_photo_url }}"  alt="logo" style="border-radius: 50%;"/></a>
                    <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                </a>

            @else
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                        {{ Auth::user()->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>

              </div>
            </li>

            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
       @yield('content')
        </div>
      </div>
        <!-- partial:./partials/_footer.html -->
        <footer class="footer" >
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @stack('modals')

  @livewireScripts
  <!-- base:js -->
  <script src="{{asset('spicatheme/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('spicatheme/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('spicatheme/js/off-canvas.js')}}"></script>
  <script src="{{asset('spicatheme/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('spicatheme/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('spicatheme/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->


</body>

</html>
