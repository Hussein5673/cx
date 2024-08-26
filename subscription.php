<?php
// Include the database connection details
include 'username_database_password_server.php';

// Establish the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check connection
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Check if a subscription tier has been selected
if (isset($_GET['tier'])) {
    // Get the selected tier
    $subType = htmlspecialchars($_GET['tier']);

    // Set the SubPrice based on the selected tier
    switch ($subType) {
        case 'Gold':
            $subPrice = 50.00;
            break;
        case 'Silver':
            $subPrice = 30.00;
            break;
        case 'Bronze':
            $subPrice = 20.00;
            break;
        default:
            die("Invalid subscription type.");
    }

    // Generate a unique SubID (or let the database handle it if it's auto-incremented)
    $subID = uniqid();

    // Set StartingDate to the current date and EndDate to one year later
    $startingDate = date('Y-m-d');
    $endDate = date('Y-m-d', strtotime('+1 year'));

// Generate a random integer for SubID
$subID = rand(1000, 9999); // Generate a random integer SubID

// Include SubID in the insert statement
$sql = "INSERT INTO Subscription_table (SubID, SubType, SubPrice, StartingDate, EndDate) VALUES (?, ?, ?, ?, ?)";

// Prepare the statement
$params = array($subID, $subType, $subPrice, $startingDate, $endDate);
$stmt = sqlsrv_query($conn, $sql, $params);


  // Execute the query and check if it was successful
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    // Show an alert and redirect using JavaScript
    echo "<script type='text/javascript'>
            alert('You subscribed successfully!');
            window.location.href = 'index.php';
          </script>";
    exit;
}
}

// Close the connection
sqlsrv_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subscription Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="NoorSSubscriptionPage">
  <div class="HeaderStore" style="width: 1716px; height: 91px; left: 129px; top: 107px; position: absolute; background: white; border-radius: 20px">
    <div class="Frame7" style="width: 426px; left: 706px; top: 25px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
      <div class="Menu" style="padding: 12px; background: white; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
        <div class="Menu" style="color: black; font-size: 16px; font-family: Abel; font-weight: 400; line-height: 16px; word-wrap: break-word">Latest</div>
      </div>
      <div class="Menu" style="padding: 12px; background: white; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
        <div class="Menu" style="color: black; font-size: 16px; font-family: Abel; font-weight: 400; line-height: 16px; word-wrap: break-word">Collections</div>
      </div>
      <div class="Menu" style="padding: 12px; background: white; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
        <div class="Menu" style="color: black; font-size: 16px; font-family: Abel; font-weight: 400; line-height: 16px; word-wrap: break-word">Deals</div>
      </div>
      <div class="Menu" style="padding: 12px; background: white; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
        <div class="Menu" style="color: black; font-size: 16px; font-family: Abel; font-weight: 400; line-height: 16px; word-wrap: break-word">Subscriptions</div>
      </div>
      <div class="Menu" style="padding: 12px; background: white; border-radius: 8px; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
        <div class="Menu" style="color: black; font-size: 16px; font-family: Abel; font-weight: 400; line-height: 16px; word-wrap: break-word">Browse</div>
      </div>
    </div>
    <div class="GameVault" style="width: 360px; height: 70px; left: 30px; top: 12px; position: absolute; text-align: center; color: black; font-size: 57px; font-family: Righteous; font-weight: 400; line-height: 64px; word-wrap: break-word">Game Vault</div>
  </div>
  <h1 style="color: white;left:400px ;top:250px ;position: absolute;">Choose Your Subscription</h1>
  <div class="Subscriptions" style="width: 1091px; height: 382px; position: relative">
    <div class="Subscriptions" style="width: 1091px; height: 382px; left: 474px; top: 333px; position: absolute">
        <a href="subscription.php?tier=Gold"><div class="Card" style="width: 328px; height: 382px; padding-top: 12px; padding-bottom: 20px; padding-left: 12px; padding-right: 12px; left: 0px; top: 0px; position: absolute; background: #52A1CA; border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
        <img class="GoldBarImg" style="width: 230px; height: 255px; border-radius: 16px" src="img/gold bar img.png" />
        <div class="GoldSubscription" style="align-self: stretch; height: 25px; color: #E7ECF1; font-size: 22px; font-family: Roboto; font-weight: 400; line-height: 28px; word-wrap: break-word">Gold Subscription </div>
      </div></a>
      <a href="subscription.php?tier=Silver"><div class="Card" style="width: 328px; height: 382px; padding-top: 12px; padding-bottom: 20px; padding-left: 12px; padding-right: 12px; left: 388px; top: 0px; position: absolute; background: #52A1CA; border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
        <img class="GoldBarImg" style="width: 230px; height: 255px; border-radius: 16px" src="img/silver.png" />
        <div class="SilverSubscription" style="align-self: stretch; height: 25px; color: #E7ECF1; font-size: 22px; font-family: Roboto; font-weight: 400; line-height: 28px; word-wrap: break-word">Silver Subscription</div>
      </div></a>
      <a href="subscription.php?tier=Bronze"><div class="Card" style="width: 328px; height: 382px; padding-top: 12px; padding-bottom: 20px; padding-left: 12px; padding-right: 12px; left: 763px; top: 0px; position: absolute; background: #52A1CA; border-radius: 20px; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: inline-flex">
        <img class="GoldBarImg" style="width: 230px; height: 255px; border-radius: 16px" src="img/bronze.png" />
        <div class="BronzeSubscription" style="align-self: stretch; height: 25px; color: #E7ECF1; font-size: 22px; font-family: Roboto; font-weight: 400; line-height: 28px; word-wrap: break-word">Bronze Subscription </div>
      </div></a>
  </div>
</div>
</div>
</body>
</html>