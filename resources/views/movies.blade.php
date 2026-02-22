<x-layout>
    <!-- Navigation-->
    
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-11 align-self-end">
                    <h1 class="text-white font-weight-bold">TUTTI I NOSTRI FILM</h1>
                    <hr class="divider" />
                </div>
                @foreach ($movies as $movie)
                <div class="col-12 col-md-3 align-self-end">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie ['title']}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$movie ['director']}}</li>
                            <li class="list-group-item">{{$movie ['genres']}}</li>
                            
                        </ul>
                        <div class="card-body">

                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>

                </div>
                @endforeach
                

            </div>
        </div>
    </header>

    <!-- Footer-->
    
    </x-layout>