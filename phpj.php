<html>
    <style>
        table,th,td{
            border: 1px solid black;
        }
    </style>
    <body>
        
    <?php
           $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $stmt = $pdo->prepare("SELECT * FROM product");
           $stmt->execute();
          
           echo "<table>";
           echo "<tr>";
            echo "<th>รหัสสินค้า</th>";
            echo "<th>ชื่อสินค้า</th>";
            echo "<th>รายละเอียดสินค้า</th>";
            echo "<th>ราคา</th>";
            echo "</tr>";
            while($row=$stmt->fetch()){
            echo "<tr>";
            echo "<td>" . $row ["0"] ."</td>";
            echo "<td>" . $row ["1"] ."</td>";
            echo "<td>" . $row ["2"] ."</td>";
            echo "<td>" . $row ["3"] ."</td>";
            
            echo "</tr>";

        
           }
           echo "</table>"
           ?>
    </body>
</html>