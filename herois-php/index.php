<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>
<body class="corpo">
<?php

    $universo = "dc";
    $heroi = "superman";



 if($universo =="dc"){
    echo "<div class='text'>VOCE ESCOLHEU DC"."<br></div>";

    for($i = 0; $i <1; $i++){
        if($heroi=="superman"){
            echo "<div class='div'><img src='img/dc/superman.jfif' class='text'></div>";
        }
        else if($heroi=="mulher maravilha"){
           echo "<div class='div'><img src='img/dc/mulher maravilha.jfif'></div>";
        }   
        else if($heroi=="lanterna verde"){
            echo "<div class='div'><img src='img/dc/lanterna verde.jfif'></div>";
        }       
        else if($heroi=="batman"){
            echo"<div class='div'><img src='img/dc/Batman.jfif'></div>";
        }
        else{
            echo"Opção inválida";
        }  
    }           
}

    if($universo =="marvel"){
        echo "<div class='text'>VOCE ESCOLHEU MARVEL"."<br></div>";

       for($i = 0; $i <1; $i++){ 
        if($heroi=="hulk"){
            echo"<img src='img/marvel/hulk.jfif'>";
        }
        else if($heroi=="capitao america"){
            echo"<img src='img/marvel/capitao-america.jfif'>";
        }
        else if($heroi=="homem de ferro"){
            echo"<img src='img/marvel/homem-de-ferro.jfif'>";
        }
        else if($heroi=="pantera negra"){
            echo"<img src='img/marvel/pantera-negra.jfif'>";
        }
        else if($heroi=="thor"){
            echo"<img src='img/marvel/thor.jfif'>";
        }
        else{
            echo"Opção inválida";
        }    
    }  
}
?>
</body>
</html>