<div class="sidebar">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="" class="simple-text logo-mini">
        <img src="{{('assets/img/anime3.png')}}" alt="">
      </a>
      <a href="" class="simple-text logo-normal">
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
      <li class=" {{explode('.', Route::currentRouteName())[0]=='sales' ? 'active' : ''   }}">

        <a href="{{ route('sales.index') }}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>sales</p>
        </a>
      </li>
      <li   class=" {{explode('.', Route::currentRouteName())[0]=='sales-statuses' ? 'active' : ''   }}">

        <a href="{{ route('sales-statuses.index')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>sales statuses</p>

        </a>
      </li>
      <li class=" {{explode('.', Route::currentRouteName())[0]=='products' ? 'active' : ''   }}">

        <a href="{{ route('products.index')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>products</p>

        </a>
      </li>
      <li class=" {{explode('.', Route::currentRouteName())[0]=='product-statuses' ? 'active' : ''   }}">

        <a href="{{ route('product-statuses.index')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>product statuses</p>

        </a>
      </li> 
      <li class=" {{explode('.', Route::currentRouteName())[0]=='categories' ? 'active' : ''   }}">

        <a href="{{ route('categories.index') }}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>Category</p>

        </a>
      </li>



      <li class=" {{explode('.', Route::currentRouteName())[0]=='materials' ? 'active' : ''   }}">

        <a href="{{ route('materials.index')}}">
          <i class="tim-icons icon-puzzle-10"></i>
          <p>materials</p>

        </a>
      </li>
      <li>
        <a href="./notifications.html">
          <i class="tim-icons icon-bell-55"></i>
          <p>Notifications</p>
        </a>
      </li>
      <li class=" {{explode('.', Route::currentRouteName())[0]=='user' ? 'active' : ''   }}">

        <a href="{{ route('user.index') }}">
          <i class="tim-icons icon-single-02"></i>
          <p>User Profile</p>
        </a>
      </li>
      <li>
    </ul>
  </div>
</div>