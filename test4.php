<head>
    <script></script>
    <link rel="stylesheet" href="admin/style.css">
    <style>
        .main_form.hidden {
            display: none;
        }

        .main_form {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeIn linear 0.3s;
            z-index: 2;
        }
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            z-index: 999;
        }
        .body {
            z-index: 1000;
        }
        .info {
            width: 500px;
            height: auto;
            border-radius: 40px;
            background: linear-gradient(#fff,#fafafa);
            background-size: cover;
            overflow: hidden;
            padding: 3rem;
            position: relative;
        }
        .container {
            padding-bottom: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        input[type=text] {
            width: 250px;
            border: 1px solid black;
            border-radius: 15px;
            padding: 8px 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            cursor: pointer;
            height: 30px;
            border: 1px solid black;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 2.4rem;
            height: 2.4rem;
            border: 1px solid #ccc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.6rem;
            color: #666;
            cursor: pointer;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Watch Shop</span>
                    </a>
                </li>

                <li class="active">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

    <div class="cardBox">
        <div class="card active">
            <div>
                <?php
                                $conn = mysqli_connect('localhost','root','','doan') or die('Không thể kết nối!');  
                                $sql = "SELECT count(*) as count from product where status = 1";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                            ?>
                <div class="numbers">
                    <?php echo $row['count']?>
                </div>
                <div class="cardName">Products</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">80</div>
                <div class="cardName">Sales</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">284</div>
                <div class="cardName">Comments</div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">$7,842</div>
                <div class="cardName">Earning</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details active">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>List Products</h2>
                <a href="#" class="btn">View All</a>
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
                    </tr>
                </thead>
                <?php
                            $sql = "select * from product where status = 1";
                            $result = $conn->query($sql);
                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) { ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $row['pro_id']?>
                        </td>
                        <td>
                            <?php echo $row['cate_id']?>
                        </td>
                        <td>
                            <?php echo $row['pro_name']?>
                        </td>
                        <td>
                            <?php echo $row['quantity']?>
                        </td>
                        <td>
                            <?php echo $row['price']?>
                        </td>
                        <td>
                            <?php echo $row['image']?>
                        </td>
                        <td>
                            <?php echo $row['sale']?>
                        </td>
                    </tr>
                </tbody>

                <?php }
                    $row['pro_name'] = '';
                            } else {
                                echo "no result";
                            }
                            ?>
            </table>

        </div>
    </div>
</div>
            <?php
                $sql = "select * from product where status = 1";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) { ?>
                <div class="main_form hidden">
                    <div class="overlay"></div>
                    <div class="body">
                        <div class="info">
                            <div class="container">
                                <form action="">    
                                    <table>
                                        <tr>
                                            <td> Họ và tên </td>
                                            <td> <input type="text" name="txtName" value="<?php echo $row['pro_name'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td> MSSV </td>
                                            <td> <input type="text" name="txtID"></td>
                                        </tr>
                                        <tr>
                                            <td> Lớp quản lý </td>
                                            <td> <input type="text" name="txtClass"></td>
                                        </tr>
                                        <tr>
                                            <td> Email </td>
                                            <td> <input type="text" name="txtMail"></td>
                                        </tr>
                                        <tr>
                                            <td> Số điện thoại </td>
                                            <td> <input type="text" name="txtPhone"></td>
                                        </tr>
                                        <tr>
                                            <td> Địa chỉ </td>
                                            <td> <input type="text" name="txtAdd"></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="close">
                                &times
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

    <script src="admin/main.js"></script>
    <script>

        let items = $$('.details.active tbody tr')
        let forms = $$('.main_form.hidden')
        let blurs = $$('.overlay')
        let closes = $$('.close')
        // let form1 = $$('.main__modal.hidden')

        items.forEach(function (item, index) {
            let form = forms[index]
            let blur = blurs[index]
            let close = closes[index]
            item.onclick = function () {
                form.classList.remove('hidden')
            }

            blur.onclick = function () {
                form.classList.add('hidden')
            }
            close.onclick = function () {
                form.classList.add('hidden')
            }
        })
        
    </script>
</body>