<div class="sidebar">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        <img src="{{('assets/img/oasis.enc')}}" alt="">
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        {{ Auth::user()->name  }}

      </a>
    </div>
    <ul class="nav">
      <li class=" {{Route::currentRouteName()=='home' ? 'active' : '' }}">
        <a href="{{ route('categories.index') }}">
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class=" {{Route::currentRouteName()=='categories.index' ? 'active' : '' }}">

        <a href="{{ route('categories.index') }}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>Category</p>

        </a>
      </li>
      <li class=" {{Route::currentRouteName()=='products.index' ? 'active' : '' }}">

        <a href="{{ route('products.index')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>products</p>

        </a>
      </li>
      <li>
        <a href="./notifications.html">
          <i class="tim-icons icon-bell-55"></i>
          <p>Notifications</p>
        </a>
      </li>
      <li class=" {{Route::currentRouteName()=='user.index' ? 'active' : '' }}">

        <a href="{{ route('user.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>User Profile</p>
        </a>
      </li>
      <li>
    </ul>
  </div>
</div>