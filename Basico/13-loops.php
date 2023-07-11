<?php include 'includes/header.php';

$x = 100;

// while ($x <= 10) {
//     echo $i;
//     echo "<br>";
//     $i++;
// }

do {
    echo $x;
    echo "<br>";
    $x++;
} while ($x <= 10);




for ($i=1; $i < 16; $i++) { 
    $lista = array();
    $lista[$i] = $i; 
    
    if ($i % 3 === 0 && $i % 5 === 0) {
        $lista[$i] = "FizzBuzz";
        
    }else if($i % 3 === 0){
        $lista[$i] = "Fizz";
       
    }else if($i % 5 === 0){
        $lista[$i] = "Buzz";
        
    }
    echo "<pre>";
    var_dump($lista);
    echo "</pre>";
    
}



include 'includes/footer.php';