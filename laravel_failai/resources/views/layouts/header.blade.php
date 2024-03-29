<header>
    <div class="d-flex align-items-center darkgreentogreen">
        <div class="container">
            <div class="row d-flex justify-content-end text-light mt-2 fw-bold align-items-center">
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-end">
                    <div class="me-2"><a href="{{ url()->current() }}?lang=en"><img
                                class="rounded-circle  border border-3 border-light" src="/img/UK-flag.png" alt="lt"
                                style="height: 30px; width: 30px;"></a></div>
                    <div class="me-5"><a href="{{ url()->current() }}?lang=lt"><img
                                class="rounded-circle border border-3 border-light" src="/img/Flag_of_LT.png" alt="lt"
                                style="height: 30px; width: 30px;"></a></div>
                    <img class="rounded" src="/img/email.svg" alt="email" style="height: 30px; width: 30px;">
                    <div class="d-flex justify-content-start ms-2">info@autorent.lt</div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-end">
                    <img class="rounded" src="/img/phone.svg" alt="gearbox" style="height: 30px; width: 30px;">
                    <div class="d-flex justify-content-start ms-2">+37067777777</div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark">
                {{--                <a class="navbar-brand" href="#">Meniu</a>--}}
                <div class="d-flex flex-row align-items-center text-light">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                             class="bi bi-car-front" viewBox="0 0 16 16">
                            <path
                                d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                            <path
                                d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                        </svg>
                    </div>
                    <div class="align-self-center mx-2 fw-bold fs-3">Auto<span style="color: #48bb78">Rent</span> </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                    {{--                    <p class="navbar-text visible-xs-inline-block">Menu</p>--}}
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse my-2" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ms-auto">
                        <li>
                            <a class="nav-link text-light fs-6" href="{{route('home')}}">{{__('Pradžia')}}</a>
                        </li>
                        <div class="d-none d-lg-block vr bg-light mx-2"></div>
                        <li>
                            <a class="nav-link text-light fs-6"
                               href="{{route('rental.index')}}">{{__('Automobiliai')}}</a>
                        </li>
                        <div class="d-none d-lg-block vr bg-light mx-2"></div>
                        <li>
                            <a class="nav-link text-light fs-6"
                               href="{{route('category.index')}}">{{__('Kategorijos')}}</a>
                        </li>
                        <div class="d-none d-lg-block vr bg-light mx-2"></div>
                        <li>
                            <a class="nav-link text-light fs-6" href="{{route('contacts')}}">{{__('Kontaktai')}}</a>
                        </li>
                        <div class="d-none d-lg-block vr bg-light mx-2"></div>
                        <li>
                            <a class="nav-link text-light fs-6" href="/">{{__('Apie')}}</a>
                        </li>
                        @if (auth()?->user()?->isAdmin())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('Admin valdymas')}}
                                </a>
                                <div class="dropdown-menu text-center green"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item "
                                       href="{{route('rentals.index')}}">{{__('Automobiliai')}}</a>
                                    <a class="dropdown-item "
                                       href="{{route('categories.index')}}">{{__('Kategorijos')}}</a>
                                    <a class="dropdown-item "
                                       href="{{route('fuelTypes.index')}}">{{__('Kuro tipai')}}</a>
                                    <a class="dropdown-item "
                                       href="{{route('gearboxes.index')}}">{{__('Pavarų dėžės')}}</a>
                                    <a class="dropdown-item " href="{{route('addresses.index')}}">{{__('Adresai')}}</a>
                                    <a class="dropdown-item " href="{{route('users.index')}}">{{__('Vartotojai')}}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item " href="{{route('dashboard')}}">{{__('Admin skydelis')}}</a>
                                </div>
                            </li>
                        @endauth
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()?->email}}
                                </a>

                                <div class="dropdown-menu text-center green"
                                     aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                       href="{{route('profile.edit')}}">{{__('Redaguoti profilį')}}</a>
                                    <div class="dropdown-divider"></div>

                                    <form action="{{route('user.rentals')}}" method="post">
                                        <input type="hidden" class="form-control"
                                               name="user"
                                               value="{{Auth::user()?->id}}">
                                        <button type="submit" class="btn ms-2 me-2 lightgreenbackground">
                                            {{__('Mano automobiliai')}}
                                        </button>
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('user.reservations')}}" method="post">
                                        <input type="hidden" class="form-control"
                                               name="email"
                                               value="{{Auth::user()?->email}}">
                                        <button type="submit" class="btn ms-2 me-2 lightgreenbackground">
                                            {{__('Mano rezervacijos')}}
                                        </button>
                                        @csrf
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('logout')}}" method="post">
                                        <button type="submit" class="btn btn-danger ms-2 me-2">
                                            {{__('Atsijungti')}}
                                        </button>
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item active">
                                <a role="button" style="color: #f8f9fa;"
                                   class="btn ms-1 me-1 my-1 lightgreenbackground" href="{{route('login')}}">{{__('Prisijungti')}}</a>
                            </li>
                            <li class="nav-item active">
                                <a role="button" style="color: #f8f9fa;"
                                   class="btn ms-1 me-1 my-1 lightgreenbackground" href="{{route('register')}}">{{__('Registracija')}}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
