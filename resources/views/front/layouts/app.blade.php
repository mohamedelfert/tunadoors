@include('front.layouts._head')

@include('front.layouts._navbar')

@include('front.layouts._sidebar')

@include('front.layouts._messages')

@yield('content')

@include('partials._session')

@include('front.layouts._footer')
