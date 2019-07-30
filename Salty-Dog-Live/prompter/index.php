<?php

date_default_timezone_set('America/New_York');
$mysqli = new mysqli('localhost', 'salty_dev', 'Mzu!d266', 'saltydog_dev');

if ($mysqli->connect_errno) {
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}



$sql = 'SELECT * FROM requests; ORDER BY created DESC LIMIT 10';

$result = $mysqli->query($sql);

while($row = $result->fetch_assoc()) {
    $requests[] = $row;
}

$result->free();
}
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SaltyDogPrompter</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



  <div class="container text-center">

    <div style="padding-top:90px;" class="row">
      <div class="col-xs-12">

	<div class="text-center">
		<form action="clearall.php">
			<input type="submit" value="Clear All" />
		</form>
	</div>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Song Title</th>
      <th scope="col">Requested By</th>
      <th scope="col">Location</th>
    
    </tr>
  </thead>
  <tbody>

            <?php foreach($requests AS $request): ?>
              <tr>
                <td><?php echo $request['song_title']; ?></td>
                <td><?php echo $request['submitter']; ?></td>
                <td>
                  <?php if(!empty($request['location'])): ?>
                    <?php if($request['location'] == 1): ?>
                      The Dock
                    <?php elseif ($request['location'] == 2): ?>
                      Internet Request
                    <?php endif; ?>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
</table>
        <div class="container" style="font-size:18px;" class="table table-striped text-left">
          <thead>
            <tr>
              <th>Song Title</th>
              <th>Requested By</th>
              <th>Location</th>
            </tr>
          </thead>

          <tbody>

            <?php foreach($requests AS $request): ?>
              <tr>
                <td><?php echo $request['song_title']; ?></td>
                <td><?php echo $request['submitter']; ?></td>
                <td>
                  <?php if(!empty($request['location'])): ?>
                    <?php if($request['location'] == 1): ?>
                      The Dock
                    <?php elseif ($request['location'] == 2): ?>
                      Internet Request
                    <?php endif; ?>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>

      </div>
    </div>

  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

<script>
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
</script>    
  </body>
</html>