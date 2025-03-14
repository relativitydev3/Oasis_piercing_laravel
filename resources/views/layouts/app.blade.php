<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="{{ asset('assets/img/oasis.enc')}}" href="{{ asset('assets/img/oasis.enc')}}">



  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>@yield('title','Home')</title>


  {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}



  <!-- plantilla -->
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css')}}" rel="stylesheet" />




  <!-- Scripts -->
  @vite([ 'resources/js/app.js'])
  <!-- 'resources/sass/app.scss', -->
  @yield('styles')
  <!-- <title>@yield('title')</title> -->

</head>

<body class="">


  <div id="app">

    @include('components.navbar')
    <div class="main-panel">
    <div style="display: flex;">
  <div style="width: 260px;">
    @include('components.sidebar-wrapper')
  </div>
  <div style="flex: 1;">
    <div class="">
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div>
</div>




    </div>
  </div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{ asset('assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/black-dashboard.min.js?v=1.0.0')}}" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/demo/demo.js')}}"></script>
<script>
  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');
      $navbar = $('.navbar');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;
      white_color = false;

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($navbar.length != 0) {
          $navbar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
        var $btn = $(this);

        if (sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          sidebar_mini_active = false;
          blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
        } else {
          $('body').addClass('sidebar-mini');
          sidebar_mini_active = true;
          blackDashboard.showSidebarMessage('Sidebar mini activated...');
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);
      });

      $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
        var $btn = $(this);

        if (white_color == true) {

          $('body').addClass('change-background');
          setTimeout(function() {
            $('body').removeClass('change-background');
            $('body').removeClass('white-content');
          }, 900);
          white_color = false;
        } else {

          $('body').addClass('change-background');
          setTimeout(function() {
            $('body').removeClass('change-background');
            $('body').addClass('white-content');
          }, 900);

          white_color = true;
        }


      });

      $('.light-badge').click(function() {
        $('body').addClass('white-content');
      });

      $('.dark-badge').click(function() {
        $('body').removeClass('white-content');
      });
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

  });
</script>

</html>