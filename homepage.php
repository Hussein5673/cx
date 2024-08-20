<?php
session_start(); // Start the session at the beginning
if(isset($_SESSION['logged_in'])){$username = $_POST['username']; // To get the username
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="HomePage" >
  <div class="Header" style="width: 100%; height: 80px; left: 8px; top: 8px; position: absolute">
    </div>
  </div>
  <div class="Frame39">
    <div class="InterfaceInterface5224px">
        <div class="Icon">
            <img src="Icons/Icon.png" alt="Icon Image">
        </div>
    </div>
    <input type="text" class="SearchInput" placeholder="Search">
</div>
<div class="WelcomeToGameVaultFeelFreeToBrowseThroughOurLatestCollectionOfGames" style="width: 856px; height: 278px; left: 300px; top: 253px; position: absolute; color: white; font-size: 57px; font-family: Roboto; font-weight: 400; line-height: 64px; word-wrap: break-word">Welcome To Game Vault<br/><br/>Feel free to browse through our latest collection of games</div>
    <nav>
    <a href=""><div class="GameVault" style="width: 348px; height: 70px; left: 56px; top: 14px; position: absolute; text-align: center; color: white; font-size: 57px; font-family: Righteous; font-weight: 400; line-height: 64px; word-wrap: break-word">Game Vault</div></a>
  </div>  
  <div class="MenuButtons">
    <div class="Menu">
        <a href="Catalog_page.html"><div class="MenuItem">Catalogue</div></a>
    </div>
    <div class="Menu">
        <a href="SignIn.html"><div class="MenuItem">Signin</div></a>
    </div>
    <div class="Menu">
        <a href="friendspage.html"><div class="MenuItem">Friends</div></a>
    </div>
    <div class="Menu">
        <a href="subscription.html"><div class="MenuItem">Subscriptions</div></a>
    </div>
    <div class="Menu">
        <a href="profile_page.html"><div class="MenuItem">Profile</div></a>
    </div>
    <div class="Menu">
        <a href="cart_page.html"><div class="MenuItem">Your Cart</div></a>
    </div>
    <div class="Menu">
        <a href="GameInfoPage_Overwatch.html"><div class="MenuItem">Overwatch</div></a>
    </div>
</div>



</div>

</body>
</html>