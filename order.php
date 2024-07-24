<?php
include 'php/connection.php';
session_start();
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
        aprimregmi
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
          <a href="../gamerstore/"><i class="fa-solid fa-angle-left"></i></a>
          <a class="info-btn"><i class="fa-solid fa-circle-info"></i></a>
        </div>
      </div>
    </div>

    <!-- order area -->
    <div class="order-wrapper">
      <div class="order-container">
        <!-- card col -->
        <div class="card-col">
          <div class="card">
            <img src="Img/pubg.png" />
            <div class="details">
              <p class="game"><i class="fa-solid fa-gamepad"></i>PUBG UC</p>
              <div class="uc-price">
                <div class="uc">
                  <img src="Img/uc.png" />
                  <p>60</p>
                </div>
                <div class="price">
                  <p>रु. <span>120</span></p>
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
              <p class="detail"><span>Weekly membership of Garena Free Firee offers a total 450 diamonds out of which
                  100 diamonds are instantly transferred to the account whereas 350 diamonds are allotted as daily
                  check-in.</span></p>
              <p class="message">
                QR CODE WILL APPEAR AFTER YOU SELECT PAYMENT MODE.
              </p>
            </div>
            <div class="form-area">
              <form method="POST">
                <div class="input-area">
                  <p>Enter UID</p>
                  <input class="input" type="text" name="" placeholder="Eg. 123456789" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Ingame Name</p>
                  <input class="input" type="text" name="" placeholder="Eg. BlackxDevil" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Your Email</p>
                  <input class="input" type="email" name="" placeholder="Email" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Quantity</p>
                  <div class="number-input">
                    <div class="decrement">-</div>
                    <input type="number" id="number" value="1" />
                    <div class="increment">+</div>
                  </div>
                </div>
                <div class="input-area">
                  <p>Enter Transaction Code</p>
                  <input class="input" type="text" name="" placeholder="Eg. 0MFD0VS" required autocomplete="off" />
                </div>
                <div class="input-area">
                  <p>Enter Transaction Time</p>
                  <input class="time" type="datetime-local" name="" />
                </div>
                <div class="payment-container">
                  <p>Select Payment Mode:</p>
                  <label class="esewa-radio">
                    <input type="radio" name="image-radio" value="ESEWA" />
                    <img src="Img/payment/esewa.png" />
                  </label>
                  <label class="khalti-radio">
                    <input type="radio" name="image-radio" value="KHALTI" />
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
                  <p><span style="color:#1C262F">रु. </span>340</p>
                </div>
                <div class="confirm">
                  <button type="submit"> Confirm Order</button>
                </div>
              </form>
              <div class="disclaimer">
                *Once order is confirmed you cannot edit it later , check your details twice before confirming order.
              </div>
              <div class="disclaimer">
                *The email you provided will be used to contact you in case of any misfilled, you will not be refunded if you are not reachable through that email.
              </div>
            </div>
          </div>
        </div>
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

      incrementButton.addEventListener("click", () => {
        numberInput.value = parseInt(numberInput.value) + 1;
      });

      decrementButton.addEventListener("click", () => {
        numberInput.value = Math.max(0, parseInt(numberInput.value) - 1);
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