<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        />

        {{-- https://fontawesome.com/kits/1da50133d0/use --}}
        <script
            src="https://kit.fontawesome.com/1da50133d0.js"
            crossorigin="anonymous"
        ></script>
    </head>

    <body>
        <header class="container">
            <div class="row">  
            <nav class="navbar navbar-light bg-white">
                <a class="navbar-brand" href="{{route('characters.index')}}"><h1>RPGManager</h1></a>
                @guest      
                <div class="ms-auto mt-3 mt-lg-0 text-right">
                    <a
                    href="{{route('login')}}"
                    class="btn btn-outline-primary btn-lg"
                    >Se connecter</a
                    >
                    <a
                    href="{{route('register-user') }}"
                    class="btn btn-primary btn-lg"
                    >S'inscrire</a
                    >
                </div>
                @endguest
                @auth
                <div class="ms-auto mt-3 mt-lg-0 text-right">
                    <a
                    href="{{route('signout')}}"
                    class="btn btn-outline-primary btn-lg"
                    >Se déconnecter</a
                    >
                    <a
                    href="{{ route('dashboard') }}"
                    class="btn btn-primary btn-lg"
                    >Mon compte</a
                    >
                </div>
                @endauth
            </nav>
        </div>

        </header>

        <main class="bg-light pt-14 pb-16">
            <div class="content bg-light">@yield('content')</div>
        </main>

        <footer class="tp-lg-10 pt-5 footer bg-white mt-10 bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- about company -->
                        <div class="mb-4">
                            <img
                                src="../../assets/images/brand/logo/logo.svg"
                                alt=""
                            />
                            <div class="mt-4">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore fuga doloremque sapiente, possimus eaque inventore porro consectetur odio molestiae molestias vitae minus iure officia magni. Ullam expedita unde doloremque eum!
                                </p>
                                <!-- social media -->
                                <div class="fs-4 mt-4">
                                    <a
                                        href="#"
                                        class="mdi mdi-facebook fs-4 text-muted me-2"
                                    ></a>
                                    <a
                                        href="#"
                                        class="mdi mdi-twitter text-muted me-2"
                                    ></a>
                                    <a
                                        href="#"
                                        class="mdi mdi-instagram text-muted"
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                        <div class="mb-4">
                            <!-- list -->
                            <h3 class="fw-bold mb-3">Company</h3>
                            <ul
                                class="list-unstyled nav nav-footer flex-column nav-x-0"
                            >
                                <li><a href="#" class="nav-link">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="mb-4">
                            <!-- list -->
                            <h3 class="fw-bold mb-3">Support</h3>
                            <ul
                                class="list-unstyled nav nav-footer flex-column nav-x-0"
                            >
                                <li>
                                    <a href="#" class="nav-link"
                                        >Help and Support</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <!-- contact info -->
                        <div class="mb-4">
                            <h3 class="fw-bold mb-3">Get in touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, molestiae.</p>
                            </div>
                            <span
                            >© 2022 Lorem ipsum dolor sit.</span
                        >
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
