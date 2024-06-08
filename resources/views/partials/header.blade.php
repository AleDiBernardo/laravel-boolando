<header>
    <div class="container">

        <div class="left-side">
        
            <ul class="d-flex justify-content-center gap-3">
                <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Request::route()->getName() === 'woman' ? 'active' : '' }}"><a href="{{ route('woman') }}">Donna</a></li>
                <li class="{{ Request::route()->getName() === 'man' ? 'active' : '' }}"><a
                    href="{{ route('man') }}">Uomo</a></li>
                    <li class="{{ Request::route()->getName() === 'kid' ? 'active' : '' }}"><a
                        href="{{ route('kid') }}">Bambini</a></li>
              </ul>
        </div>
        <div class="middle">
            <img src="{{Vite::asset('resources/img/boolean-logo.png')}}" alt="">
            
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