<?php
include '../src/db/connection.php';
$sql = "SELECT  user_id, username,email,address,contact_no,account_no FROM userprofile,doneeinfo Where role='Donee' AND userprofile.user_id=doneeinfo.donee_id AND flag='1' order by userprofile.username";
$result = mysqli_query($conn,$sql);

	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."<td>"."Email"."</td>"."<td>"."Address"."</td>"."<td>"."Contact No."."</td>". "<td>"."Account No."."</td>"."</tr>";
    // output data of each row
 $row = $result->fetch_assoc();
        echo "<tr>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>" ."<td>".$row["contact_no"]."</td>" ."<td>".$row["account_no"]."</td>"."</tr>";

  ?>