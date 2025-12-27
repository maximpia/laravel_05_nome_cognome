<?php

use Illuminate\Support\Facades\Route;

    

    





Route::get('/home', function () {
    return view('Homepage');
})->name('Homepage');



Route::get('/chisiamo', function () {
   $Users = [
    [
        'name' => 'Merlin',
        
        'surname' => 'collin',
        'role' => 'Mago',
        'img' => 'media/merlin.jpeg' // immagine libera di mago
    ],
    [
        'name' => 'Bradley',
        
        'surname' => 'james',
        'role' => 'Arthur Pendragon',
        'img' => 'media/arthur.jpeg' // immagine libera di re/cavaliere
    ],
    [
        'name' => 'Katie',
        
        'surname' => 'McGrath',

        'role' => 'Antagonista magica morgana',
        'img' => 'media/morgan.jpg' // immagine fantasy libera
    ],
    [
        'name' => 'Gwen',
        
        'surname' => 'Coulby',
        'role' => 'amica del re',
        'img' => 'media/guenievre.jpeg' // immagine libera ambientazione
    ],
    [
        'name' => 'Gaius',
        
        'surname' => 'angeli',
        'role' => 'Guaritore di Camelot',
        'img' => 'media/gaius.jpeg' // immagine libera
    ]
];
   

    return view('chisiamo', ['Users'=>$Users]);
})->name('chisiamo');


Route::get('/service', function () {
    return view('servizi');
})->name('servizi');



Route::get('/detail/{name}', function ($name) {
    $Users = [
    [
        'name' => 'Merlin',
        'surname' => 'Morgan',
        'role' => 'Mago di corte',
        'description' => 'Colin Morgan, nato ad Armagh in Irlanda del Nord, interpreta Merlin come un giovane mago goffo e leale. Nonostante le sue insicurezze iniziali, cresce diventando il potente mago di corte e protettore di Camelot, usando la magia per difendere il regno e il suo amico Artù.',
        'img' => 'media/merlin.jpeg'
    ],
    [
        'name' => 'Bradley',
        'surname' => 'James',
        'role' => 'Arthur Pendragon',
        'description' => 'Bradley James, nato a Exeter in Inghilterra, dà vita ad Arthur come un principe severo e coraggioso, destinato a diventare un grande re. Inizialmente diffidente verso la magia, evolve in un sovrano giusto e rispettato, imparando a fidarsi di Merlin e a difendere Camelot con onore e saggezza.',
        'img' => 'media/arthur.jpeg'
    ],
    [
        'name' => 'Katie',
        'surname' => 'McGrath',
        'role' => 'Antagonista magica',
        'description' => 'Katie McGrath, attrice irlandese, interpreta Morgana come una figura complessa: inizialmente amica di Arthur e Merlin, diventa una potente e vendicativa strega dopo essere stata tradita. Il suo personaggio incarna la lotta tra luce e oscurità, diventando una delle principali antagoniste della serie.',
        'img' => 'media/morgana.jpeg'
    ],
    [
        'name' => 'Gwen',
        'surname' => 'Coulby',
        'role' => 'Amica di Arthur e futura regina',
        'description' => 'Angel Coulby, nata a Londra, interpreta Gwen come una giovane donna dolce e coraggiosa, che diventa la serva personale e poi la moglie di Re Arthur. Nonostante le sue umili origini, dimostra grande forza interiore e lealtà, diventando una regina amata dal popolo di Camelot.',
        'img' => 'media/guinevere.jpeg'
    ],
    [
        'name' => 'Gaius',
        'surname' => 'Wilson',
        'role' => 'Guaritore di Camelot',
        'description' => 'Richard Wilson, attore scozzese, interpreta Gaius come il saggio medico di corte e mentore di Merlin. Con la sua esperienza e conoscenza della magia, guida Merlin nei suoi doveri, offrendo consigli preziosi e proteggendo i segreti del giovane mago.',
        'img' => 'media/gaius.jpeg'
    ]
];

    foreach ($Users as $User) {
        if ($name == $User['name']) {
            return view('detail', ['User' => $User]);
        }
    }
    abort(404);
})->name('detail');


Route::get('/movies', function () {

    $movies = [
    [
        'id' => 1,
        'title' => 'Il Cavaliere Oscuro',
        'director' => 'Christopher Nolan',
        'img' => 'dark_knight.jpg',
        'genres' => 'Azione', 'Drammatico', 'Thriller'
    ],
    [
        'id' => 2,
        'title' => 'Pulp Fiction',
        'director' => 'Quentin Tarantino',
        'img' => 'pulp_fiction.jpg',
        'genres' => 'Crime', 'Drammatico'
    ],
    [
        'id' => 3,
        'title' => 'Forrest Gump',
        'director' => 'Robert Zemeckis',
        'img' => 'forrest_gump.jpg',
        'genres' => 'Drammatico', 'Romantico'
    ],
    [
        'id' => 4,
        'title' => 'Inception',
        'director' => 'Christopher Nolan',
        'img' => 'inception.jpg',
        'genres' => 'Azione', 'Fantascienza', 'Thriller'
    ],
    [
        'id' => 5,
        'title' => 'The Shawshank Redemption',
        'director' => 'Frank Darabont',
        'img' => 'shawshank_redemption.jpg',
        'genres' => 'Drammatico'
    ],
];
    return view('movies', ['movies'=>$movies]);
})->name('movies.list');