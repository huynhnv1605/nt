<?php
function showCustomer() { 
        include 'connect.php'?>

        <div class="details customer active">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Danh sách khách hàng</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>user_id</td>
                                <td>username</td>
                                <td>email</td>
                                <td>password</td>
                                <td>status</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "select * from user";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['u_id']?></td>
                                        <td><?php echo $row['u_name']?></td>
                                        <td><?php echo $row['email']?></td>                                        
                                        <td><?php echo $row['password']?></td>                                        
                                        <td><?php echo $row['status']?></td>                                        
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
