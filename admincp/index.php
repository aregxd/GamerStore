
<?php 
    include '../php/connection.php';

    session_start();
    $_SESSION['islogined']=false;

    if(isset($_POST['login-btn'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $select = "SELECT * FROM admin ";
        $result = mysqli_query($conn, $select);
        if($record = $result -> fetch_assoc()){
            $username_init = $record['username'];
            $password_init = $record['password'];
            if( $username == $username_init ){
                if( $password == $password_init ){
                    $_SESSION['islogined']=true;
                    $_SESSION['username']= $username;
                }else{
                    echo'<script>
                        alert(`Incorrect admin password. Redirecting to home page...`)
                        window.location.href = "../";
                    </script>';
                    header('Location: ../');
                }
            }else{
                echo'<script>
                    alert(`Incorrect admin username. Redirecting to home page...`);
                    window.location.href = "../";
                </script>';
            }
        }
    }

    if (isset($_POST['add-btn']) && isset($_SESSION['islogined'])){
        $item = $_POST['item'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];
        $game = $_POST['game'];
        $add_item= false;
        if($game == "pubg"){
            $card_img = "pubg.png";
            $cur_img = "uc.png";
            $add_item= true;
        }
        elseif($game == "freefire"){
            $card_img = "freefire.png";
            $cur_img = "diamond.png";
            $add_item= true;
        }
        elseif($game == "coc"){
            $card_img = "coc.png";
            $cur_img = "gems.png";
            $add_item= true;
        }else{
            echo 'Game select gara na yrr..';
        }
        if($add_item){
            $insert = "INSERT INTO `products` ( `item`, `quantity`, `price`, `card_img`, `cur_img`) VALUES ( '$item', '$amount', '$price', '$card_img', '$cur_img')";
            $insert_query  = mysqli_query($conn,$insert);
        }
        
        
    }
    
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

    <div class="login-wrapper">
        <div class="login-page">
            <div class="form-wrapper">
                <div class="logo">
                    <img src="../Img/gamerStoreLogo.png">
                    <p>G<span>S <text>Admin Panel</text><i class="fa-solid fa-key"></i></span></p>
                </div>
                <div class="form">
                    <form method="post">
                        <input type="text" name="username" autocomplete="off" placeholder="Enter username" required><br>
                        <input type="text" name="password" autocomplete="off" placeholder="Enter password" required><br>
                        <button type="submit" name="login-btn"><i class="fa-solid fa-user-plus"></i>Login</button>
                        <p><a href="../">Go to user's page.</a></p>
                    </form>
                    
                </div>
                <div class="copy">
                    <p><i class="fa-solid fa-laptop-code"></i>  <a href="https://www.aprimregmi.com.np" target="_blank"> aprimr  </a></p>
                </div>
            </div>
        </div>
    </div>
    

    <div class="body-wrapper">
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
                            <p class="greet">k xa admin !</p> 
                            <p class="name">@ <?php echo $_SESSION['username'] ?></p>  
                        </div>
                        <a href="../php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </div>

    <!-- add products -->
        <div class="add-wrapper">
            <p>Add products</p>
            <div class="add-section">
                <form method="POST">
                    <input type="text" name="item" placeholder="ITEM" required autocomplete="off">
                    <input type="number" name="amount" placeholder="AMOUNT" required autocomplete="off">
                    <input type="number" name="price" placeholder="PRICE" required autocomplete="off">
                    <div class="dropdown-wrapper">
                        <select id="game-dropdown" name="game">
                            <option value="">Select game</option>
                            <option value="pubg">PUBG</option>
                            <option value="freefire">Freefire</option>
                            <option value="coc">COC</option>
                        </select>
                    </div>
                    <!-- <div class="dropdown-wrapper">
                        <select id="currency-dropdown" name="currency">
                            <option value="uc">UC</option>
                            <option value="diamond">DIAMOND</option>
                            <option value="gems">GEMS</option>
                        </select>
                    </div> -->
                    <button type="submit" name="add-btn">ADD</button>
                </form>
            </div>
        </div>

    </div>
    


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let loginWrapper = document.querySelector(".login-wrapper");
            let bodyWrapper = document.querySelector(".body-wrapper");
            let form = document.querySelector("form");

            if (loginWrapper && bodyWrapper) {
                <?php if ($_SESSION['islogined']): ?>
                    loginWrapper.style.display = "none";//none ho orignal
                    bodyWrapper.style.display = "block";// block ho orignal

                <?php else: ?>
                    loginWrapper.style.display = "block"; // block ho orignal
                    bodyWrapper.style.display = "none"; //none ho orignal
                <?php endif; ?>
            }
        });
    </script>

</body>
</html>