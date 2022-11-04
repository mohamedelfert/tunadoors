@include('dashboard.layouts._head')

@include('dashboard.layouts._navbar')

@include('dashboard.layouts._sidebar')

@include('dashboard.layouts._messages')

@yield('content')

@include('partials._session')

@include('dashboard.layouts._footer')
