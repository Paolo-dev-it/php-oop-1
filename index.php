<?php 

   include_once __DIR__ . '/class.php';


   $movie1 = new movies('Spiderman','Stan Lee',12, 'Azione' );
   $movie2 = new movies('Batman','Bob Kane',19, 'Noir');
   $movie3 = new movies('Avatar','James Cameron',23, 'Fantascienza');
   $movie4 = new movies('Il signore degli Anelli','J.R.R Tolkien',10, 'Fantasy');
   $movie5 = new movies('Toy Story','Andrew Stanton',18, 'Animazione');

    echo $movie1 -> showOnScreen();
    echo $movie2 -> showOnScreen();
    echo $movie3 -> showOnScreen();
    echo $movie4 -> showOnScreen();
    echo $movie5 -> showOnScreen();

    '<pre>';
        var_dump($movie1,$movie2,$movie3,$movie4,$movie5);
    '</pre>';
    


    

?>