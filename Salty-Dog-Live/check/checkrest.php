
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"

crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Quicksand" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="../headers/styleBoot.css">



    <br>

    <div class="container">

        <div class="container" style="width:90%; margin-left: 6%">

            <div class="row">

                   <div class="col">

<?php
   $dbhost = '23.238.115.234';
   $dbuser = 'saltydog_kat';
   $dbpass = 'Saltyk9';
   $dbname = 'saltydog_Lucky_Receipts';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

// $servers = $_POST['servers'];
   $amount = $_POST['amount'];
   $location = $_POST['location'];
   $link_address = 'https://saltydog.com/lucky/LuckyRecformrest/formpage.html';
   $win_address = 'https://saltydog.com/lucky/';


   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Checked successfully<br><br>';
   $sql = "SELECT * FROM rest_receipts WHERE location = '$location' AND amount = $amount;";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
         echo "Your receipt MAY be a 'Lucky Receipt'. Please send us a copy of it.   <br>";
         echo "<a href='$link_address'>Click here to send us a copy of your receipt.</a>";
         
      }
   } else {
      echo "Thank you for checking, unfortunatley this is not a winning receipt.<br>";
      echo "<a href='$win_address'>Click here to go back to 'Lucky Receipts Page'.</a>";
   }
   mysqli_close($conn);
?>

</div>
</div>
</div>
</div>