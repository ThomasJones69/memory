<html>
    <head>
        <meta charset="UTF-8">
        <title>Memory</title>

        <script>
            function knop(a) {
                document.getElementById("foto" + a).src = 'panda.jpg';


                //<?php
//         
//         (moeten gaan werken met een switch en function;
//         dit om plaatjes te selecteren en te combineren en gelijken zichtbaar te maken
//         dus if 11 en 20  gelijk dan laten zien)
//         
//         selecteer("nrpl1, nrpl2");
//         
//         function selecteer($pl1, $pl2){
//             
//         return ($pl1, $pl2);
//         }
//         
//         switch (plaatje){
//             case"":
//             
//                 braek;
//             
//         }
//         
//         
//         
?>

            }
        </script>

        <style>

            .table {
                background-color: #4CAF50; 
                border: none;
                color: red;
                padding: 5px 5px;
                width: 50px;
                height: 50px;
                cursor: crosshair
            }

        </style>

    </head>





    <body>

        <p align='center'>
            <?php
            $dieren = array("Bear","Bear","Elephant","Elephant","Lion","Lion","Panda","Panda","Tiger","Tiger","Turtle","Turtle","Wolf","Wolf","Zebra","Zebra");
            for ($y = 1; $y < count($dieren); $y++) {
                //               $id = $x . $y;
                $tegel = $dieren[$y];
                echo alert($tegel);
                echo $dieren["<img src='$tegel.jpg'>"];
            }
            ?>
        </p>
    </body>


</html>