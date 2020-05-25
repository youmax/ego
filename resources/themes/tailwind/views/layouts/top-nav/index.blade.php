
<nav :class="{'flex': open, 'hidden': !open}"
    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
    <a class="btn btn-nav" href="#">Contact</a>
    @include('layouts.top-nav.locale-currency')
    {{-- @include('layouts.top-nav.login-section') --}}
</nav>