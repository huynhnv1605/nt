<?php
function showComment() { 
        include 'connect.php'?>

        <div class="details comment">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Danh sách bình luận</h2>
                        <a href="#" class="btn">Add new</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>cmt_id</td>
                                <td>pro_id</td>
                                <td>u_id</td>
                                <td>content</td>
                                <td>datetime</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "select * from comment";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['cmt_id']?></td>
                                        <td><?php echo $row['pro_id']?></td>
                                        <td><?php echo $row['u_id']?></td>
                                        <td><?php echo $row['content']?></td>
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
