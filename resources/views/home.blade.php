<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>The Hotel Property Team</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('public-theme/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    </head>

    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">

            <div class="container px-4 px-lg-5">

                {{-- Shown for mobile devices --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>

                {{-- Navigation --}}
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">The Team</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Hotels Available</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Recent Deals</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Industry News</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>

            </div>

        </nav>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('public-theme/assets/img/thpt-home-bg.jpg') }}')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-8">
                        <div class="site-heading">
                            <h1 style="text-transform: uppercase;">Not Your Typical Hotel Property Broker</h1>
                            <span class="subheading">We work closely with a range of parties to develop bespoke opportunities which meet the very specific needs of our clients, be they buyers or sellers.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">

            {{-- About Links --}}
            <div class="row ">

                {{-- Hotel Investment --}}
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

                    <div class="card text-center">

                        <div class="mx-auto mt-3 bg-secondary w-100 py-2">
                            <img class="card-img-top rounded-circle border" src="public-theme/assets/img/investment-icon.png" style="max-height: 80px; max-width: 80px;">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Hotel Investment</h5>
                            <p class="card-text">Working with institutions, sovereign funds and high net worth individuals who wish to acquire, hold or dispose of investments in hotel property.</p>
                            <a href="#" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>

                </div>

                {{-- Hotel Operations --}}
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

                    <div class="card text-center">

                        <div class="mx-auto mt-3 bg-secondary w-100 py-2">
                            <img class="card-img-top rounded-circle border" src="public-theme/assets/img/building-icon.png" style="max-height: 80px; max-width: 80px;">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Hotel Operations</h5>
                            <p class="card-text">Acting on behalf of hotel operating companies who are seeking investment or wish to transact hotel real estate.</p>
                            <a href="#" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>

                </div>

                {{-- Hotel Development --}}
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

                    <div class="card text-center">

                        <div class="mx-auto mt-3 bg-secondary w-100 py-2">
                            <img class="card-img-top rounded-circle border" src="public-theme/assets/img/development-icon-2.png" style="max-height: 80px; max-width: 80px;">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Hotel Investment</h5>
                            <p class="card-text">Supporting investors, operators or developers who wish to develop individual assets, mixed use schemes, or obtain change of use to maximise yields.</p>
                            <a href="#" class="btn btn-primary">Read more...</a>
                        </div>
                    </div>

                </div>
                
            </div>

        </div>

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">

                            {{-- Twitter --}}
                            <li class="list-inline-item">
                                <a href="https://twitter.com/HotelPropTeam" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>

                            {{-- Facebook --}}
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/thehotelpropertyteam" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>

                            {{-- Github --}}
                            <li class="list-inline-item">
                                <a href="https://github.com/liteninkiran/thpt" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>

                        </ul>

                        {{-- Copyright --}}
                        <div class="small text-center text-muted fst-italic">Copyright &copy; 2021 - The Hotel Property Team</div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('public-theme/js/scripts.js') }}"></script>

    </body>

</html>
