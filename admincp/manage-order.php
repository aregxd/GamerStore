<?php
include '../php/connection.php';
session_start();
$ln = 'fl';
$ln = $_GET['ln'];
if (isset($_SESSION['islogined'])&& $ln=="tr") {

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="shortcut icon" href="Img/gamerStoreLogo.png" type="image/x-icon">
    <title>Gamer Store | Control Panel</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <script>//prevent form resubmittion
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <?php

    $odr_id = $_GET['id'];

    $select = "SELECT * FROM orders WHERE `odr_id`= $odr_id";
    $select_query = mysqli_query($conn, $select);
    while ($row = $select_query->fetch_assoc()) {
        $odr_id = $row['odr_id'];
        $game = $row['game'];
        $img;
        $item = $row['item'];
        $amount = $row['amount'];
        $price = $row['price'];
        $uid = $row['uid'];
        $ig_name = $row['ig_name'];
        $email = $row['email'];
        $quantity = $row['quantity'];
        $total_price = $row['total_price'];
        $payment_mode = $row['payment-mode'];
        $tra_code = $row['tra_code'];
        $tra_time = $row['tra_time'];
        $status = $row['status'];
        switch ($game) {
            case 'PUBG':
                $img = "uc.png";
                break;
            case 'FF':
                $img = "diamond.png";
                break;
            case 'COC':
                $img = "gems.png";
                break;
            default:
                $img = "";
                break;
        }


        ?>

        <!-- navbar -->
        <div class="nav-wrapper">
            <div class="navbar">
                <div class="logo">
                    <img src="../Img/gamerStoreLogo.png">
                    <p>G<span>S <text>Admin Panel</text></span></p>
                </div>
                <div class="links">
                    <div class="wrapper">
                        <div class="admin-info">
                            <p class="greet">Admin page</p>
                        </div>
                        <a href="../admincp/"><i class="fa-solid fa-chevron-left"></i></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit product -->
        <div class="add-wrapper">
            <p>Order Details</p>
            <hr>
            <div class="add-section">
                <div class="record">ORDER ID : <?php echo $odr_id ?></div>
                <div class="record">GAME : <?php echo $game ?></div>
                <div class="record">ITEM : <?php echo $item ?></div>
                <div class="record"><i class="fa-regular fa-gem"></i> AMOUNT : <?php echo $amount ?></div>
                <div class="record">PRICE : <?php echo $price ?></div>
                <div class="record">QUANTITY : <?php echo $quantity ?></div>
                <div class="record">UID : <?php echo $uid ?></div>
                <div class="record">IN GAME NAME : <?php echo $ig_name ?></div>
                <div class="record">EMAIL : <?php echo $email ?></div>
                <div class="record">PAYMENT MODE : <?php echo $payment_mode ?></div>
                <div class="record">TOTAL PRICE : <?php echo $total_price ?></div>
                <div class="record">TRANSACTION CODE : <?php echo $tra_code ?></div>
                <div class="record">TRANSACTION TIME : <?php echo $tra_time ?></div>
                <div class="record"> <?php echo $status ?><input type="hidden" id="status" value="<?php echo $status ?>">
                </div>

            </div>
            <hr>
            <div class="form-wrapper">
                <div class="form-section">
                    <form method="post">
                        <button type="submit" id="c" name="complete-btn"><i class="fa-solid fa-circle-check"></i>
                            COMPLETE</button>
                        <button type="submit" id="r" name="reject-btn"><i class="fa-solid fa-circle-xmark"></i></i>
                            REJECT</button>
                        <button type="submit" id="b" name="back-btn"><i class="fa-regular fa-window-restore"></i> ADMIN
                            PANEL</button>
                    </form>
                </div>
            </div>
        </div>

        <?php
    }
    // update ststus 
    if (isset($_POST['complete-btn'])) {

        $updateStatus = "UPDATE orders SET `status`= 'DELIVERED' WHERE `odr_id`=$odr_id";
        $update_query = mysqli_query($conn, $updateStatus);
        if ($update_query) {
            echo '<script>
                    alert(" Success.") ;
                    window.location.href = "../admincp/";
                </script>';
        } else {
            echo "Server error";
        }
    }
    if (isset($_POST['reject-btn'])) {

        $delete = "DELETE FROM `orders` WHERE `odr_id`=$odr_id";
        $delete_query = mysqli_query($conn, $delete);
        if ($delete_query) {
            echo '<script>
                    alert(" Success.") ;
                    window.location.href = "../admincp/";
                </script>';
        } else {
            echo "Server error";
        }
    }
    if (isset($_POST['back-btn'])) {
        echo '<script>window.location.href = "../admincp/";</script>';
    }
    }
     else{
        echo '<script>
         alert("Please login first to access this page.... \nRedirecting you to admin panel.") ;
         window.location.href = "../admincp/";
        </script>';
     }
    

    ?>
    <!-- copy -->
    <div class="copy">
        <p><i class="fa-solid fa-laptop-code"></i> <a href="https://www.aprimregmi.com.np" target="_blank"> aprimr </a>
        </p>
    </div>




    <style>
        .add-wrapper p {
            margin-top: 10px;
        }

        .wrapper {
            background-color: #333f4b;
            border-radius: 3px;
            padding: 3px 0px 2px 10px;
        }

        .wrapper .admin-info .greet {
            font-size: 7px;
        }

        .wrapper .admin-info a {
            margin: 0;
            padding: 0;
        }

        .wrapper .admin-info a .fa-solid {
            font-size: 8px;
            margin: 0;
            padding: 0;
        }

        .add-section {
            height: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 0 20px;
            background-color: white;
            padding-bottom: 15px
        }

        .add-section .record {
            padding: 15px 0 5px 0;
            color: #1C262F;
            font-size: 20px;
            font-weight: 500;
            text-align: left;
        }

        .add-section .record:last-child {
            font-size: 15px;
            padding: 10px 27px;
            background-color: #1DD8C5;
            border-radius: 3px;
            color: #fff;
        }

        .add-section .record span {
            font-weight: bold;
        }

        .form-wrapper {
            display: flex;
            justify-content: center;
        }

        .form-wrapper .form-section {
            /* background-color: #1C262F; */
            margin-top: 10px;
            width: 50%;
        }

        .form-wrapper .form-section form {
        margin-top: 10px;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .form-wrapper .form-section form #c {
            background-color: #87B0E6;
            display: none;
        }

        .form-wrapper .form-section form #r {
            background-color: #FC3349;
            display: none;
        }

        .form-wrapper .form-section form #b {
            display: none;
        }

        .form-wrapper .form-section form button {
            width: 40%;
            height: auto;
            color: white;
            font-weight: bold;
            background-color: #F5841A;
            padding: 10px 50px;
            outline: none;
            border: none;
            border-radius: 5px;
        }

        .form-wrapper .form-section form button:hover {
            box-shadow: 1px 1px 10px silver;
        }

        .copy {
            height: 100%;
            display: flex;
            justify-content: center;
            margin: 10px 0;

        }

        .copy p {
            position: absolute;
            bottom: 1;
        }

        .copy p i,
        .copy p a {
            color: #F5841A;
            opacity: 0.4;
            text-decoration: none;
        }


        @media (max-width: 500px) {
            .add-section {
                height: auto;
                padding: 30px 0;
                gap: 20px;
            }

            .add-section .record {
                font-size: 15px;
                font-weight: 400;
            }

            .form-wrapper .form-section {
                width: 70%;
            }

            .form-wrapper .form-section form input {
                width: 90%;
            }

            .form-wrapper .form-section form button {
                width: 100%;
            }

            .add-section {
                gap: 5px;
            }

            .add-section .record {
                padding: 10px 0 5px 0;
                font-size: 17px;
            }
        }

        hr {
            margin: 0 10%;
            opacity: 0.5;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let status = document.querySelector('#status').value;
            let completeBtn = document.querySelector('#c');
            let rejectBtn = document.querySelector('#r');
            let adminBtn = document.querySelector('#b');

            if (status === "DELIVERED") {
                completeBtn.style.display = "none";
                rejectBtn.style.display = "none";
                adminBtn.style.display = "block";
            }
            else {
                completeBtn.style.display = "block";
                rejectBtn.style.display = "block";
                adminBtn.style.display = "none";
            }
        });
    </script>
</body>

</html>