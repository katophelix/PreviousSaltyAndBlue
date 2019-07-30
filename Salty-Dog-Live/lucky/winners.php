
<?php
$servername = "23.238.115.234";
$username = "saltydog_kat";
$password = "Saltyk9";
$dbname = "saltydog_staging";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lucky8 ORDER BY id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $requests[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
 <!-- $result = $mysqli->query($sql);

 while($row = $result->fetch_assoc()) {
    $requests[] = $row;
 }

$result->free();
}
 $mysqli->close();

?>  -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SaltyDogWinners</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!--<![endif]-->
    <link rel="icon" type="image/png" href="../images/social-logos/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Quicksand" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="../headers/styleBoot.css">
    <link type="text/css" rel="stylesheet" href="../headers/mega-header.css">

</head>
  <body>



  <div class="container justify-content-center">
      <div class="my-container text-center">
      <br>
  <div id="back-button">

<a class="btn btn-secondary " href="https://saltydog.com/lucky/win.html" role="button" style="border:none" aria-haspopup="true" aria-expanded="false">

    Back to Lucky Receipts

</a>

</div>
    <div class="row" style="width: 90%; text-align: center">
      <div class="col"style="width: 90%; text-align: center">
        <h1>Previous Winners</h1>        
      </div>
    </div>

    <div class="row"style="width: 90%; text-align: left">
      <div class="col"style="width: 90%; text-align: left">
      <table class="table table-striped">
  <thead>
    <tr>
    <th>Receipt Number</th>
            
              <th>Name</th>
    </tr>
  </thead>
  <tbody>

 <?php foreach($result AS $request): ?>
  <tr>
    <td><?php echo $request['claimNumber']; ?></td>
  
    <td><?php echo $request['name']; ?></td>
  
  </tr>
<?php endforeach; ?>  

</tbody>
</table>
        

      </div>
    </div>

  </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- <script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 15000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
</script>     -->
  </body>
</html>