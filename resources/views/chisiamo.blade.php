<x-layout>
    <!-- Navigation-->
    
    <header class="masthead ">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">i nostri attori</h1>
                    <hr class="divider" />
                </div>
                <div class="col-6 p-5 align-self-baseline">
                    <p class="text-white-75 mb-5">Siamo una casa di produzione cinematografica specializzata in film epici e fantasy, nata dalla passione per le grandi leggende e i racconti senza tempo. Il nostro obiettivo è trasformare miti antichi in storie cinematografiche capaci di emozionare e coinvolgere il pubblico di oggi.

                        Con il progetto Merlino il Mago e Re Artù abbiamo voluto dare nuova vita al ciclo arturiano, unendo una narrazione intensa a una forte cura visiva. Lavoriamo con sceneggiatori, registi e artisti che condividono la nostra visione: creare mondi credibili, ricchi di magia, simboli e avventura.

                        Ogni produzione nasce da un’attenta ricerca storica e artistica. Dai costumi alle scenografie, dagli oggetti iconici come Excalibur alle atmosfere legate alla figura di Merlino, curiamo ogni dettaglio per offrire un’esperienza cinematografica immersiva e autentica.

                        Crediamo nel potere del cinema come mezzo per raccontare storie universali, dove coraggio, destino e magia si intrecciano. Il nostro lavoro è guidato dal desiderio di trasportare lo spettatore in epoche leggendarie, rendendo il mito vivo sul grande schermo.</p>

                </div>
                <div class="col-6 p-5 text-center">
                    <img src="https://m.media-amazon.com/images/M/MV5BZTBjYjM3ZjItZTI1MS00ODZhLWFhZDgtODgxMmMzN2JlOTExXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_.jpg" alt="" class="img-fluid maxi-img">
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="container Userheight">
    <div class="row gx-4 gx-lg-5 h-100 p-5 align-items-center justify-content-around align-items-center">
        @foreach($Users as $User)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
    <img src="{{ asset($User['img']) }}" class="card-img-top " alt="{{ $User['name'] }}">
    <div class="card-body">
        <h5 class="card-title">{{ $User['name'] }} {{ $User['surname'] }}</h5>
        <p class="card-text">{{ $User['role'] }}</p>
        <a href="{{ route('detail', ['name' => $User['name']]) }}" class="btn btn-primary">Leggi di più</a>
    </div>
</div>


            
         <!-- Controlla il contenuto di $User -->
          
          


             <!-- <x-card>
                img="{{ ($User['img']) }}"
                name="{{ $User['name'] }}"
                name="{{ $User['surname'] }}"
                text="{{ $User['role'] }}"
                textname="{{ $User['name'] }}"




             </x-card>
             -->
             
             
                
            </div>
        @endforeach
    </div>
</div>
    </section>











    <!-- Footer-->
    
    <!-- Bootstrap core JS-->
    </x-layout>