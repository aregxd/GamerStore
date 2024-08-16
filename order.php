<?php
include 'php/connection.php';
session_start();

//php mailer imports
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';
// 


$pid = $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="shortcut icon" href="Img/gamerStoreLogo.png" type="image/x-icon" />
  <title>GS | Place an Order</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="order.css" />
</head>

<body>
  <!-- info -->
  <div class="info-wrapper">
    <div class="navbar">
      <div class="logo">
        <img src="Img/gamerStoreLogo.png" />
        <p>Gamer <span>Store</span></p>
      </div>
      <div class="links">
        <div class="wrapper">
          <a class="info-cross"><i class="fa-solid fa-circle-xmark"></i></a>
        </div>
      </div>
    </div>
    <div class="info">
      <div class="info-area">
          <div class="title" >
            <h1>How to Order</h1>
        </div>
        <main>
            <section id="step1">
                <h2>Step 1: Enter User ID</h2>
                <p>Provide your User ID. You can find your User ID in the profile section of the game.</p>
            </section>
            <section id="step2">
                <h2>Step 2: Enter In-Game Name</h2>
                <p>Enter your in-game name.</p>
            </section>
            <section id="step3">
                <h2>Step 3: Enter Email</h2>
                <p>Provide your email address. This email will be used to contact you if there are any errors with your inputs.</p>
            </section>
            <section id="step4">
                <h2>Step 4: Select Quantity</h2>
                <p>Choose the quantity of items you wish to purchase.</p>
            </section>
            <section id="step5">
                <h2>Step 5: Select Payment Method</h2>
                <p>You can pay via eSewa or khalti or IME Pay.</p>
                <div id="paymentMethods">
                    <img src="Img/payment/esewa.png" class="payment">
                    <img src="Img/payment/khalti.png" class="payment">
                    <img src="Img/payment/ime-pay.png" class="payment">
                </div>
                <p>After selecting your payment method, a QR code will appear. <br> Enter your in-game name in the remarks while making the payment.</p>
            </section>
            <section id="step6">
                <h2>Step 6: Enter Transaction Code</h2>
                <p>Enter the transaction code you received after payment.</p>
                <div class="images">
                  <img src="Img/info/transaction-esewa.png" >
                  <img src="Img/info/transaction-khalti.png" >
                  <img src="Img/info/transaction-ime.png" >
                </div>
            </section>
            <section id="step7">
                <h2>Step 7: Enter Transaction Time</h2>
                <p>Enter the time of your transaction.</p>
                <div class="images">
                  <img src="Img/info/time-esewa.png" >
                  <img src="Img/info/time-khalti.png" >
                  <img src="Img/info/time-ime.png" >
                </div>
            </section>
            <section id="step8">
                <h2>Step 8: Double Check Details</h2>
                <p>Review all the details you have filled out. Ensure everything is correct and then proceed to click 'Buy Now' to complete your purchase.</p>
            </section>
        </main>
        <div class="footer">
            <p>&copy; 2024 @ GamerStore</p>
            <p>Developed with <i class="fa-solid fa-heart"></i> by <a href="https://www.aprimregmi.com.np/index.html" target="_blank">aprimr</a>.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="web-page">
    <!-- navbar -->
    <div class="navbar">
      <div class="logo">
        <img src="Img/gamerStoreLogo.png" />
        <p>Gamer <span>Store</span></p>
      </div>
      <div class="links">
        <div class="wrapper">
          <a href="index.php"><i class="fa-solid fa-angle-left"></i></a>
          <a class="info-btn"><i class="fa-solid fa-circle-info"></i></a>
        </div>
      </div>
    </div>

    <!-- order area -->
    <div class="order-wrapper">
      <div class="order-container">
        <!-- card col -->
         <?php
          $fetch = "SELECT * FROM products WHERE `product_id`=$pid";
          $fetchquery = mysqli_query($conn,$fetch);
          while($row = $fetchquery -> fetch_assoc()){
          ?>
        <div class="card-col">
          <div class="card">
            <img src="Img/<?php echo $row['card_img'] ?>" />
            <div class="details">
              <p class="game"><i class="fa-solid fa-gamepad"></i><?php echo $row['item'] ?></p>
              <div class="uc-price">
                <div class="uc">
                  <img src="Img/<?php echo $row['cur_img'] ?>" />
                  <p><?php echo $row['quantity'] ?></p>
                </div>
                <div class="price">
                  <p>रु. <span><?php echo $row['price'] ?><input type="hidden" class="price-per-item" value="<?php echo $row['price']?>"></span></p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- order col -->
        <div class="order-desc-col">
          <div class="order-desc-container">
            <div class="desc-area">
              <p class="title">PLACE AN ORDER</p>
              <p class="detail"><span><?php echo $row['description'] ?></span></p>
              <p class="message">
                QR CODE WILL APPEAR AFTER YOU SELECT PAYMENT MODE.
              </p>
            </div>
            <div class="form-area">
              <form method="POST">
                <div class="input-area">
                  <p>Enter UID</p>
                  <input class="input" type="text" name="uid" placeholder="Eg. 123456789" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Ingame Name</p>
                  <input class="input" type="text" name="ig-name" placeholder="Eg. BlackxDevil" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Your Email</p>
                  <input class="input" type="email" name="email" placeholder="Email" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Quantity</p>
                  <div class="number-input">
                    <div class="decrement" >-</div>
                    <input type="number" id="number" name="quantity" value="1" />
                    <div class="increment">+</div>
                  </div>
                </div>
                <div class="input-area">
                  <p>Enter Transaction Code</p>
                  <input class="input" type="text" name="tra-code" placeholder="Eg. 0MFD0VS" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Transaction Time</p>
                  <input class="time" type="datetime-local" required name="tra-time" />
                </div>
                <div class="payment-container">
                  <p>Select Payment Mode:</p>
                  <label class="esewa-radio">
                    <input type="radio" name="image-radio" value="ESEWA" />
                    <img src="Img/payment/esewa.png" />
                  </label>
                  <label class="khalti-radio">
                    <input type="radio" name="image-radio" required value="KHALTI" />
                    <img src="Img/payment/khalti.png" />
                  </label>
                  <label class="ime-radio">
                    <input type="radio" name="image-radio" value="IME PAY" />
                    <img src="Img/payment/ime-pay.png" />
                  </label>
                </div>
                <div class="line"></div>
                <div class="total">
                    <p>NET PAYABLE AMOUNT :</p>
                    <p><span style="color:#1C262F">रु.</span> <span class="final-price"></span> </p>
                </div>
                <div class="confirm">
                  <button type="submit" name='order-btn'> Confirm Order</button>
                </div>
                <?php } ?>
              </form>
              <div class="disclaimer">
                *Enter your in game name in remarks while doing payment.
              </div>
              <div class="disclaimer">
                *Once order is confirmed you cannot edit it later , check your details twice before confirming order.
              </div>
              <div class="disclaimer">
                *The email you provided will be used to contact you in case of any misfilled, you will not be refunded if you are not reachable through that email.
              </div>
              <div class="disclaimer">
                *Please contact us on our social handles if you have any queries regarding your order.
              </div>
            </div>
          </div>
        </div>
        <?php 
          if(isset($_POST['order-btn'])){ 

            $mail = new PHPMailer(true);          //Php mailer

            $uid = $_POST['uid'];
            $ig_name = $_POST['ig-name'];
            $email = $_POST['email'];
            $tra_code = $_POST['tra-code'];
            $tra_time = $_POST['tra-time'];
            $payment_mode ;
            if (isset($_POST['image-radio'])) {
              $payment_mode = $_POST['image-radio'];
            }
            if($_GET['pid']){
              $pid = $_GET['pid'];
              $fetch = "SELECT * FROM products WHERE `product_id`=$pid";
              $fetchquery = mysqli_query($conn,$fetch);
              while($row = $fetchquery -> fetch_assoc()){
                $game;
                switch($row["card_img"]){
                  case 'pubg.png':
                    $game="PUBG";
                    break;
                  case 'freefire.png':
                    $game="FF";
                    break;
                  case 'coc.png':
                    $game="COC";
                    break;
                }
                $item = $row['item'];
                $amount = $row['quantity'];
                $price = $row['price'];
                $_SESSION['price'] = $price;
              }
            }
            $quantity;
            $final_price;
            if (isset($_POST['quantity'])) {
              $quantity = $_POST['quantity'];
              $final_price = $price * $quantity;
            }
          

          $insert = "INSERT INTO `orders` (`game`, `item`, `amount`,`price`,`uid`,`ig_name`,`email`,`quantity`,`total_price`,`payment-mode`,`tra_code`,`tra_time`) VALUES ( '$game', '$item' ,'$amount', '$price','$uid','$ig_name','$email','$quantity','$final_price','$payment_mode','$tra_code','$tra_time')";
          $insert_query = mysqli_query($conn,$insert);
          if($insert_query){
            //send mail
            try {
              // Server settings
              $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
              $mail->isSMTP();                                           
              $mail->Host       = 'smtp.gmail.com';                      
              $mail->SMTPAuth   = true;                                 
              $mail->Username   = 'aprimregmi24@gmail.com';             
              $mail->Password   = 'txjs ktgd mvhv dfyy';                  
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
              $mail->Port       = 587;                                   

              // Recipients
              $mail->setFrom('aprimregmi24@gmail.com', 'Gamer Store WebApp');
              $mail->addAddress('aprimregmi24@gmail.com');                

              // Content
              $mail->isHTML(true);                                        
              $mail->Subject = 'Lwww, New order aayo hai!!';
              $mail->Body    = '<h1>Details &rarr; </h1><br>
                                <h3>Game: ' . $game . '</h3>
                                <h3>Item: ' . $item . '</h3>
                                <h3>Amount: ' . $amount . '</h3>
                                <h3>Price: Rs.' . $price . '</h3>
                                <h3>UID: ' . $uid . '</h3>
                                <h3>IG Name: ' . $ig_name . '</h3>
                                <h3>Email: ' . $email . '</h3>
                                <h3>Quantity: ' . $quantity . '</h3>
                                <h3>Total Price: Rs.' . $final_price . '</h3>
                                <h3>Payment Mode: ' . $payment_mode . '</h3>

                                ';

              if ($mail->send()) {
                  echo "<script>
                  alert('YOUR ORDER REQUEST IS SUCCESSFULLY SENT. PLEASE WAIT PATIENTLY UNTIL YOU GET YOUR ORDER COMPLETED.');
                  window.location.href = '../gamerstore/';
                  </script>";
                  exit();
              } else {
                  echo "<script>alert('YOUR ORDER CANNOT BE PLACED. PLEASE TRY AGAIN.');</script>";
                  exit();
              }

          }
          catch (Exception $e) {
            echo "Mail could not be sent to the admin. errorCode <br>{$mail->ErrorInfo}";
          }
        }  
        else{
          echo "<script>alert('YOUR ORDER CANNOT BE PLACED. PLEASE TRY AGAIN.');</script>";
        }
      }
      ?>

        <!-- qr col -->
        <div class="qr-code">
          <div class="esewa">
            <img src="Img/payment/esewa-qr.png">
            <a class="download-esewa" href="Img/payment/esewa-qr.png" download><i class="fa-solid fa-qrcode"></i>DOWNLOAD QR</a>
          </div>
          <div class="khalti">
            <img src="Img/payment/khalti-qr.png">
            <a class="download-khalti" href="Img/payment/khalti-qr.png" download><i class="fa-solid fa-qrcode"></i>DOWNLOAD QR</a>
          </div>
          <div class="ime">
            <img src="Img/payment/ime-qr.png">
            <a class="download-ime" href="Img/payment/ime-qr.png" download><i class="fa-solid fa-qrcode"></i>DOWNLOAD QR</a>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer>
      <div class="footer-container">
        <div class="footer-column">
          <div class="footer-content">
            <div class="logo">
              <img src="Img/gamerStoreLogo.png" />
              <p class="site-name">Gamer <span>Store</span></p>
            </div>
            <p class="about">
              Gamer Store is your premier online platform for purchasing
              in-game items and games at competitive prices. At Gamer Store,
              we offer a wide range of products to enhance your gaming
              experience, including in-game purchases and various game titles.
            </p>
          </div>
        </div>
        <div class="footer-column">
          <div class="footer-content">
            <h3>Contact Info</h3>
            <p>
              <i class="fa-solid fa-envelope"></i> gamerstore2081@gmail.com
            </p>
            <p>
              <i class="fa-solid fa-location-dot"></i> Bharatpur Chitwan,
              Nepal
            </p>
            <p><i class="fa-solid fa-phone"></i> +977 970-4989205</p>
          </div>
        </div>
        <div class="footer-column">
          <div class="footer-content">
            <h3>Payment Via</h3>
            <div class="payment-partners">
              <img src="Img/payment/esewa.png" />
              <img src="Img/payment/khalti.png" />
              <img src="Img/payment/ime-pay.png" />
            </div>
          </div>
        </div>
      </div>
      <div class="social-links">
        <a href="https://shorturl.at/OWxF0" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://shorturl.at/UwpgR" target="_blank"><i class="fa-brands fa-instagram" target="_blank"></i></a>
        <a href="https://shorturl.at/OHxI3" target="_blank"><i class="fa-brands fa-whatsapp" target="_blank"></i></a>
      </div>
      <div class="footer">
        <div class="footer-bottom">
          <p>&copy; Gamer Store @ All rights reserved.</p>
        </div>
        <div class="footer-bottom">
          <p>
            Developed with <i class="fa-solid fa-heart"></i> by
            <a href="https://www.aprimregmi.com.np/index.html" target="_blank">aprimr</a>.
          </p>
        </div>
      </div>
    </footer>
  </div>

  <script>
    let infoBtn = document.querySelector(".info-btn");
    let infoCross = document.querySelector(".info-cross");
    let infoNav = document.querySelector(".info-wrapper");
    let mainBody = document.querySelector(".web-page");
    infoBtn.addEventListener("click", () => {
      mainBody.style.display = "none"; // default none
      infoNav.style.display = "block"; // default block
    });
    infoCross.addEventListener("click", () => {
      mainBody.style.display = "block"; // default block
      infoNav.style.display = "none"; // default none
    });

    //order form item increment decrement
    document.addEventListener("DOMContentLoaded", () => {
      const numberInput = document.getElementById("number");
      const incrementButton = document.querySelector(".increment");
      const decrementButton = document.querySelector(".decrement");
      const pricePerItem = document.querySelector(".price-per-item").value;
      let finalPrice = document.querySelector(".final-price");
      finalPrice.innerText=pricePerItem;


      incrementButton.addEventListener("click", () => {
        numberInput.value = parseInt(numberInput.value) + 1;
        let quantity = numberInput.value;
        let totalPrice =pricePerItem * quantity;
        finalPrice.innerText=totalPrice;
      });

      decrementButton.addEventListener("click", () => {
        numberInput.value = Math.max(1, parseInt(numberInput.value) - 1);
        let quantity = numberInput.value;
        let totalPrice =pricePerItem * quantity;
        finalPrice.innerText=totalPrice;
        
      });
    });

    //show qr code
    document.addEventListener("DOMContentLoaded", () => {
      let esewaRadio = document.querySelector(".esewa-radio");
      let khaltiRadio = document.querySelector(".khalti-radio");
      let imeRadio = document.querySelector(".ime-radio");

      let esewaQr = document.querySelector(".esewa");
      let khaltiQr = document.querySelector(".khalti");
      let imeQr = document.querySelector(".ime");

      esewaRadio.addEventListener('click', ()=> {
        esewaQr.style.display="block";
        khaltiQr.style.display="none";
        imeQr.style.display="none";
      });

      khaltiRadio.addEventListener('click', ()=> {
        esewaQr.style.display="none";
        khaltiQr.style.display="block";
        imeQr.style.display="none";
      });

      imeRadio.addEventListener('click', ()=> {
        esewaQr.style.display="none";
        khaltiQr.style.display="none";
        imeQr.style.display="block";
      });
    });

    // download qr pressed
    document.addEventListener("DOMContentLoaded", () => {
      let dwnlEsewa = document.querySelector('.download-esewa');
      let dwnlKhalti = document.querySelector('.download-khalti');
      let dwnlIme = document.querySelector('.download-ime');
      dwnlEsewa.addEventListener("click", () => {
        dwnlEsewa.innerHTML = 'DOWNLOADING...';
        setTimeout(() => {
          dwnlEsewa.innerHTML = '<i class="fa-solid fa-circle-check"></i>DOWNLOADED';
          dwnlEsewa.style.backgroundColor="white";
          dwnlEsewa.style.color="black";
        }, 1000); 
      });
      dwnlKhalti.addEventListener("click", () => {
        dwnlKhalti.innerHTML = 'DOWNLOADING...';
        setTimeout(() => {
          dwnlKhalti.innerHTML = '<i class="fa-solid fa-circle-check"></i>DOWNLOADED';
          dwnlKhalti.style.backgroundColor="white";
          dwnlKhalti.style.color="black";
        }, 1000); 
      });
      dwnlIme.addEventListener("click", () => {
        dwnlIme.innerHTML = 'DOWNLOADING...';
        setTimeout(() => {
          dwnlIme.innerHTML = '<i class="fa-solid fa-circle-check"></i>DOWNLOADED';
          dwnlIme.style.backgroundColor="white";
          dwnlIme.style.color="black";
        }, 1000); 
      });
      

      
    });
  </script>
</body>

</html>