<?php
function showOrder() { 
        include 'connect.php'?>

        <div class="details order">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>List Orders</h2>
                        <a href="#" class="btn">Add new</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>o_id</td>
                                <td>pro_name</td>
                                <td>fullname</td>
                                <td>quantity</td>
                                <td>price</td>
                                <td>address</td>
                                <td>datetime</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "select * from order_detail";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['o_id']?></td>
                                        <td><?php echo $row['pro_name']?></td>
                                        <td><?php echo $row['fullname']?></td>
                                        <td><?php echo $row['quantity']?></td>
                                        <td><?php echo $row['price']?></td>
                                        <td><?php echo $row['address']?></td>
                                        <td><?php echo $row['date_time']?></td>                                        
                                        <td><button><a href="">edit</a></button></td>
                                        <td><button><a href="">delete</a></button></td>
                                    </tr>
                                </tbody>
                        <?php }
                        } else {
                            echo "no result";
                        }
                        ?>
                    </table>
                </div>
            </div>
    <?php }

?>
