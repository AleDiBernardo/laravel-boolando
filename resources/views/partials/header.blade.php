<header>
    <div class="container">

        <div class="left-side">
        
            <ul class="d-flex justify-content-center gap-3">
                <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }} d-md-none d-lg-none"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Request::route()->getName() === 'woman' ? 'active' : '' }}"><a href="{{ route('woman') }}">Woman</a></li>
                <li class="{{ Request::route()->getName() === 'man' ? 'active' : '' }}"><a
                    href="{{ route('man') }}">Man</a></li>
                    <li class="{{ Request::route()->getName() === 'children' ? 'active' : '' }}"><a
                        href="{{ route('children') }}">Children</a></li>
              </ul>
        </div>
        <div class="middle d-none d-md-block d-lg-block">
            <a href="{{ route('home') }}">
            <img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt="">
            </a>
        </div>
        <div class="right-side">
                <ul>
                    <li><a href="#"><i class="fa-regular fa-user"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
        </div>
    </div>
</header>