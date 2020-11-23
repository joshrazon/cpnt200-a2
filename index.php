<?php

  include 'includes/config.php';

  // write query for all customers
  $sql = 'SELECT * FROM customer';

  // make query and get results
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // echo "<pre>" . print_r($customers, true) . "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
  <title>Customers</title>
</head>
<body>
  <div class="flex-container">
    <h1>Our Customers</h1>
    <?php  // loop over customers array using foreach?>
    <?php  foreach($customers as $customer){?>
    <div class="customers">
      <a href="customer.php?id=<?php echo $customer['id']; ?>">
      <h2>
        <span><?php echo $customer['last_name']; ?>,</span>
        <span><?php echo $customer['first_name']; ?> </span>
        </h2>
      </a> 
      <p>Phone Number: <?php echo $customer['phone']; ?> </p>
      <p>Email: <?php echo $customer['email']; ?> </p>
    </div>
  <?php  } ?>
</body>
</html>