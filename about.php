<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};



?>
<!DOCTYPE html>  
<html>  
<body>
    <style>
        h1 {text-align: center;
        color: blue;}
        p {font-style:initial;
            color: slategrey;
        font-size: large;}
        div {text-align: center;}
        </style>
          
<h1>ABOUT SRI KRISHNA TRADERS</h1>
<p>Welcome to Sri Krishna Traders, your one-stop destination for high-quality rice. We are a family-owned business that has been providing premium rice to our customers for many years.At Sri Krishna Rice Shop, we take pride in offering a wide variety of rice, including basmati rice, sona masoori rice, ponni rice, and much more. Our rice is sourced from the finest farms in the country and is carefully selected to ensure that we provide our customers with the best quality possible.we believe in providing our customers with exceptional service and value for money. We take great care to ensure that our prices are competitive, so you can enjoy the finest quality rice without breaking the bank.</p>  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d521.3621958568696!2d77.37686782003995!3d10.549322711754344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9cfff44325e47%3A0x9cf3b34fc799281d!2sKrishna%20Stores!5e0!3m2!1sen!2sin!4v1679589835688!5m2!1sen!2sin" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>  
</html>  
