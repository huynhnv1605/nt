<?php
    function formatCurrency($number)
    {
        return number_format($number, 0, ',', '.');
    }
    
    function showProduct() { 
        include 'connect.php'?>
    
        <div class="details active">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>List Products</h2>
                        <a href="addnewProduct.php" class="btn">Add new</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Pro_id</td>
                                <td>cate_id</td>
                                <td>pro_name</td>
                                <td>quantity</td>
                                <td>price</td>
                                <td>image</td>
                                <td>sale</td>
                                <td>edit</td>
                                <td>delete</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "select * from product where status = 1";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['pro_id']?></td>
                                        <td><?php echo $row['cate_id']?></td>
                                        <td><?php echo $row['pro_name']?></td>
                                        <td><?php echo $row['quantity']?></td>
                                        <td><?php echo $row['price']?></td>
                                        <td><?php echo $row['image']?></td>
                                        <td><?php echo $row['sale']?></td>
                                        <td><button><a href="editProduct.php?pro_id=<?php echo $row['pro_id']?>">edit</a></button></td>
                                        <td><button><a href="deleteProduct.php?pro_id=<?php echo $row['pro_id']?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">delete</a></button></td>
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

