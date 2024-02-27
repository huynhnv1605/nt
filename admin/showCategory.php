<?php
function showCategory() { 
        include 'connect.php'?>

        <div class="details category">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Danh mục sản phẩm</h2>
                        <a href="#" class="btn">Add new</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>cate_id</td>
                                <td>cate_name</td>
                                <td>status</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "select * from category";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['cate_id']?></td>
                                        <td><?php echo $row['cate_name']?></td>
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
