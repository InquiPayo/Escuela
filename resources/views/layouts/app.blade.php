<!doctype html>
<html>
    @include('layouts.head')
  <body>
  
    @include('layouts.nav')

    <div id="app">
        @yield('content')
    </div>
    
    @include('layouts.footer')
    @include('layouts.scripts')
    
</body>
</html>