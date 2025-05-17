
<?php

$con = mysqli_connect('localhost' , 'root' , '' , 'php_practice');

$query = "SELECT c.id  cid , p.id pid, c.product_id , c.session_id , c.qty ,
           p.name , p.price , p.image from cart c
          INNER join products p on p.id = c.product_id;";

$queryRun = mysqli_query($con , $query);

while($row = mysqli_fetch_assoc($queryRun)){
    echo  $row['name']."<br>";
    echo  $row['product_id']."<br>";
    echo  $row['session_id']."<br>";
    echo  $row['price']."<br>";
    echo  $row['image']."<br>";
    echo  $row['qty']."<br>";
    echo  $row['cid']."<br>";
    echo  $row['pid']."<br>";

    echo  "<hr><br>";

}

?>