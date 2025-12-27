<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creativi - Start Bootstrap Theme</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet">

    <!-- CSS locali -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simplelightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
</head>




<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Maxi FILM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('Homepage') }}">Homepage</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('servizi') }}">services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('chisiamo') }}">Chi Siamo</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">chi siamo</h1>
                    <hr class="divider" />
                </div>
                <div class="col-6 p-5 align-self-baseline">
                    <p class="text-white-75 mb-5">Siamo una casa di produzione cinematografica specializzata in film epici e fantasy, nata dalla passione per le grandi leggende e i racconti senza tempo. Il nostro obiettivo è trasformare miti antichi in storie cinematografiche capaci di emozionare e coinvolgere il pubblico di oggi.

                        Con il progetto Merlino il Mago e Re Artù abbiamo voluto dare nuova vita al ciclo arturiano, unendo una narrazione intensa a una forte cura visiva. Lavoriamo con sceneggiatori, registi e artisti che condividono la nostra visione: creare mondi credibili, ricchi di magia, simboli e avventura.

                        Ogni produzione nasce da un’attenta ricerca storica e artistica. Dai costumi alle scenografie, dagli oggetti iconici come Excalibur alle atmosfere legate alla figura di Merlino, curiamo ogni dettaglio per offrire un’esperienza cinematografica immersiva e autentica.

                        Crediamo nel potere del cinema come mezzo per raccontare storie universali, dove coraggio, destino e magia si intrecciano. Il nostro lavoro è guidato dal desiderio di trasportare lo spettatore in epoche leggendarie, rendendo il mito vivo sul grande schermo.</p>

                </div>
                <div class="col-6 p-5 text-center">
                    <img src="https://m.media-amazon.com/images/M/MV5BZTBjYjM3ZjItZTI1MS00ODZhLWFhZDgtODgxMmMzN2JlOTExXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg" alt="" class="img-fluid mpia">
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container Userheight">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-around align-items-center">
        @foreach($Users as $User)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($User['img']) }}" class="card-img-top" alt="{{ $User['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $User['name'] }} {{ $User['surname'] }}</h5>
                        <p class="card-text">{{ $User['role'] }}</p>
                        <a href="{{ route('detail', ['name' => $User['name']]) }}" class="btn btn-primary">Leggi di più</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    </section>











    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">film &teatro; 2025 - Company Maxifilm</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/plugins.js') }}"></script>

    <script src="{{ asset('js/smoothscroll.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>

    <!-- Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>