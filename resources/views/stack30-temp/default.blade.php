<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  {{-- head defaul untuk dipake global --}}
  @include('stack30-temp.partials._head')
  {{-- head tambahan untuk page tertentu --}}
  @yield('head_partials')
</head>
<body class="horizontal-layout horizontal-menu 2-columns menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  {{-- navbar --}}
  @include('stack30-temp.partials._navbar')
  {{-- menu --}}
  @include('stack30-temp.partials._menu')
  {{-- dynamic content --}}
  <div class="app-content content">
    @yield('content')
  </div>
  {{-- footer --}}
  @include('stack30-temp.partials._footer')
  {{-- scipt default yang di pake global --}}
  @include('stack30-temp.partials._script')
  {{-- scipt tambahan untuk page tertentu --}}
  @yield('script_partials')
</body>
</html>
