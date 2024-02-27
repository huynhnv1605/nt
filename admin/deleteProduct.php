<?php
    include 'connect.php';
    if(isset($_GET['pro_id'])){
        $pro_id = $_GET['pro_id'];
        
        $sql = "update product set status = 0 where pro_id = $pro_id" ;
        $result = $conn->query($sql);

        header("Location: http://localhost/doan/admin/");
    }
?>