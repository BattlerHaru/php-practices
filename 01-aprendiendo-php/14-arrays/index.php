<?php 

// array iterativo
$peliculasSpiderMan = array("Spider-Man 1", "Spider-Man 2", "Spider-Man 3");

echo $peliculasSpiderMan[1].'<br>';

echo '<hr>';

$peliculasShrek = ["Shrek 1", "Shrek 2", "Shrek 3"];

// array asociativo
$catherine = array(
    'nombre' => "Catherine",
    'edad'   => 25
);

echo $catherine['nombre'].'<br>';

echo '<hr>';


// array multidimensional
$catherineClassic = array(
    array(
        'nombre' => "Catherine",
        'edad'   => 25
    ),
    array(
        'nombre' => "Katherine",
        'edad'   => 25
    ),
    array(
        'nombre' => "Quaterine",
        'edad'   => 20
    )
);

echo $catherineClassic[1]['nombre'].'<br>';

echo '<hr>';



for ($i=0; $i < count($peliculasShrek) ; $i++) { 
    echo $peliculasShrek[$i].'<br>';
}

echo '<hr>';

foreach ($peliculasSpiderMan as $PeliculaSpider) {
    echo $PeliculaSpider.'<br>';
}

echo '<hr>';



?>