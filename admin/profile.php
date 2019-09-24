<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
  <link rel="stylesheet" type="text/css" href="../src/css/NavigationBar.css">
	<!-- <link rel="stylesheet" type="text/css" href="src/css/Profile.css">
     -->
     <style type="text/css">
        .container {
          width: 60%;
          height: 400px;
          border: 2px solid black;
          font-size: 40px;
          font-family: sans-serif;
          padding-left: 20px;
          padding-top: 50px;
          margin: 100px 5px 5px 250px; 
          background-color: lightcyan;
        }
        .container a{
            text-decoration: none;
            margin: 600px 10px 5px 40px;
            color: green;
        }

        .content{
          width: 350px;
          height: 250px;
          border: 1px solid black;
          margin: 10px 20px 30px 30px;
          float: right;
        }
     </style>
</head>
<body>

  <header>
  <div class="container">
      <div id="branding">
          <h1><a href="AdminPanel.php"><span class="highlight">Khulla</span> Mann </a></h1>
      </div>

    <div class="togglearea">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <input type="checkbox" id="toggle">
    <div class="navbar">
      <a href="AdminPanel.php">Admin Panel</a>
        <a href="Donorinfo.php">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php">Total Donation Post</a>
        <a href="DoneeVerifying.php" class="current">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
    </div>
  </div>
</header>

	<?php 
    include '../src/db/connection.php';
    if(isset($_GET['value_key'])){
    $var = $_GET['value_key'];
    $sql = "SELECT document,username FROM doneeinfo,userprofile where doneeinfo.donee_id = '{$var}' and userprofile.user_id= '{$var}' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div class="container" align="center">
    	<div class="content">
    		<?php echo "<img src='".$row["document"]."' height='250' width='350'>";
            echo"<br>"; ?>
    	</div>
    	<?php 
        echo "<br><br>";
    	echo $row['username'];
        echo"<br><br><br><br><br>";
    	echo "<a href='transfer.php?value_key=".$var."'>"."Approve</a>";  
        echo "<a href='delete.php?value_key=".$var."'>"."Delete</a>"; 
        ?>    
    </div>
    <?php
   } 
   ?>

</body>
</html>