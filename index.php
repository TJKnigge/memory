
<html>
    <head>
        <meta charset="UTF-8">
        <title>Memory</title>
    
        <script>
        function knop(a){
            document.getElementById("foto" +a). src = 'panda.jpg';
            alert(a);
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
        <table border="1">
        <?php
        
        for($x = 1; $x < 6; $x++) {
            echo"<tr>";
            for($y = 1; $y < 5; $y++) {
                $id= $x.$y;
            echo "<td><img id=foto$id src=panda.jpg onclick=knop($id)></td>\n";
            }
            echo "</tr>\n";
        }

        ?>
        </table>
    </body>
    
    
</html>
