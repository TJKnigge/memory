
<html>
    <head>
        <meta charset="UTF-8">
        <title>Memory</title>
    
        <script>
        function knop(a){
            document.getElementById("foto" +a). src = 'panda.jpg';
         
         
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
//         ?>
          
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
}
    
    </style>
    
    </head>
    
    

    
    
    <body>
        
        <p align='center'>
        <table border="1">
        <?php
        
        for($x = 1; $x < 6; $x++) {
            echo"<tr>";
            for($y = 1; $y < 5; $y++) {
                $id= $x.$y;
            echo "<td><img id=foto$id src=panda.jpg width='100' height='75' onclick=knop($id)></td>\n";
            }
            echo "</tr>\n";
        }

        ?>
        </table>
        </p>
    </body>
    
    
</html>
