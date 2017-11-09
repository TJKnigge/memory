
<html>
    <head>
        <meta charset="UTF-8">
        <title>Memory</title>
    </head>
    
    
    <script>
    
    
    
    </script>
    
    
    <body>
        <?php
        
        for($x = 1; $x < 11; $x++) {
            
            echo"<br>";
            for($y = 1; $y < 11; $y++) {
           
                $id= $x.$y;
        
       
        
            echo "<input onclick=schieten($id) type=button id=knop$id>";
        
            }
        }
        
        
        
        ?>
    </body>
    
    
</html>
