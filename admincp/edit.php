<?php
    include '../php/connection.php' ;
    session_start();
    $ln='fl';
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
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
  </script>

  <?php 
    
     $id = $_GET['id'];

    
    $select= "SELECT * FROM products WHERE `product_id`= $id";
    $select_query = mysqli_query($conn, $select);
    while ($row = $select_query -> fetch_assoc()) {
        $item = $row['item'];
        $amount = $row['quantity'];
        $price = $row['price'];
        $card_img = $row['card_img'];
        $game ;
        switch ($card_img) {
            case 'pubg.png':
                $game = 'PUBG';
                break;
            case 'freefire.png':
                $game = 'FF';
                break;
            case 'coc.png':
                $game = 'COC';
                break;
            default:
                $game = 'Err Check DB';
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
        <p>Product Details</p>
        <div class="add-section">
            <div class="record">ITEM: <?php echo $item ?> </div>
            <div class="record">AMOUNT: <?php echo $amount ?> </div>
            <div class="record">PRICE: <?php echo $price ?> </div>
            <div class="record">GAME: <?php echo $game ?> </div>
        </div>
        <p>Edit Product</p>
        <div class="form-wrapper">
            <div class="form-section">
                <form method="post">
                    <input type="text" name="new-item" value="<?php echo $item ?>" placeholder="New Item" autocomplete="off" required>
                    <input type="number" name="new-amount" value="<?php echo $amount ?>" placeholder="New Amount" autocomplete="off" required>
                    <input type="number" name="new-price" value="<?php echo $price ?>" placeholder="New Price" autocomplete="off" required>
                    <div class="dropdown-wrapper">
                        <select id="game-dropdown" name="new-game">
                            <option value=""> SELECT GAME</option>
                            <option value="pubg">PUBG</option>
                            <option value="freefire">FF</option>
                            <option value="coc">COC</option>
                        </select>
                    </div>
                    <button type="submit" name="edit-btn">EDIT</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    }
    //edit record 
    if(isset($_POST['edit-btn'])){
        $new_item = $_POST['new-item'];
        $new_amount = $_POST['new-amount'];
        $new_price = $_POST['new-price'];
        $new_game = $_POST['new-game'];
        $card_img;
        $cur_img;
        switch ($new_game) {
            case 'pubg':
                $card_img = 'pubg.png';
                $cur_img = 'uc.png';
                break;
            case 'freefire':
                $card_img = 'freefire.png';
                $cur_img = 'diamond.png';
                break;
            case 'coc':
                $card_img = 'coc.png';
                $cur_img = 'gems.png';
                break;
            default:
                $game = 'Err Check DB';
        }

        $edit = "UPDATE products SET `item`='$new_item', `quantity`='$new_amount', `price`='$new_price', `card_img`='$card_img', `cur_img`='$cur_img' WHERE `product_id`=$id";
        $edit_query= mysqli_query($conn, $edit);
            if($edit_query){
                echo '<script>
                    alert("Edit Successful. Redirecting to admin panel...") ;
                    window.location.href = "../admincp/";
                </script>';
            } 
            else{
                echo "Server error";
            }
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
        <p><i class="fa-solid fa-laptop-code"></i>  <a href="https://www.aprimregmi.com.np" target="_blank"> aprimr  </a></p>
    </div>

    


<style>
    .add-wrapper p {
        margin-top: 10px;
    }
    .wrapper{
        background-color: #333f4b;
        border-radius: 3px;
        padding: 3px 0px 2px 10px;
    }
    .wrapper .admin-info .greet{
        font-size: 7px;
    }
    .wrapper .admin-info a{
        margin: 0;
        padding: 0;
    }
    .wrapper .admin-info a .fa-solid{
        font-size: 8px;
        margin: 0;
        padding: 0;
    }
    .add-section{
        gap: 155px;
        padding: 0 20px;
        background-color: #1C262F;
    }
    .add-section .record{
        color: white;
        font-size: 18px;
        font-weight: 500;
    }
    .form-wrapper{
        display: flex;
        justify-content: center;
    }
    .form-wrapper .form-section{
        /* background-color: #1C262F; */
        margin-top: 20px;
        width: 30%;
    }
    .form-wrapper .form-section form{
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    .form-wrapper .form-section form input,.form-wrapper .form-section form .dropdown-wrapper{
        color: #333f4b;
        text-align: center;
        width: 60%;
        height: 40px;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-bottom: 2px solid #1C262F;
        outline: none;
        transition: border-color 0.3s;
    }
    .form-wrapper .form-section form input:focus{
        border-bottom: 2px solid #F5841A;
        color: #F5841A;
    }
    .form-wrapper .form-section form input::placeholder{
        color: #333f4b;
    }
    .form-wrapper .form-section form .dropdown-wrapper #game-dropdown{
        border: none;
        outline: none;
        text-align: center;
        width: 100%;
        height: auto;
        background-color: #ffffff;
    }
    .form-wrapper .form-section form button{
        width: 50%;
        height: auto;
        color: white;
        font-weight: bold;
        background-color: #F5841A;
        padding: 10px 0;
        outline: none;
        border: none;
        border-radius: 5px;
    }
    .copy{
        display: flex;
        justify-content: center;
        
    }
    .copy p{
        position: absolute;
        bottom: 0;
    }
    .copy p i , .copy p a{
        color: #F5841A;
        opacity: 0.4;
        text-decoration: none;
    }


    @media (max-width: 500px) {
        .add-section{
            height: auto;
            padding: 30px 0;
            gap: 20px;
        }
        .add-section .record{
            font-size: 12px;
            font-weight: 400;
        }
        .form-wrapper .form-section{
            width: 70%;
        }
        .form-wrapper .form-section form input{
            width: 90%;
        }
        .form-wrapper .form-section form .dropdown-wrapper {
            width: 90%;
        }
        .form-wrapper .form-section form button{
            width: 80%;
        }
    }
</style>
</body>
</html>