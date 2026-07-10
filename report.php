<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NETRA Eye Care Hospital, Kadamwadi, Kolhapur 416003</title>
<link rel="icon" type="image/png" href="images/logo.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php include_once ('header.php'); ?>
<body><br>
<h3 style="text-align:center;">APPOINTMENT REPORTS</h3><hr>
<div class="container" >
<div class="row" >
<form method="POST" action="" style="display: flex;">
<div class="col-md-3" style=" margin-left: 110px;">
<div class="form-group" >
<label class="control-label">Start Form Date :</label>
 
<input class="form-control" type="date" name="form" required>
</div>
</div>
<div class="col-md-3" style=" margin-left: 110px;" >
<div class="form-group">
<label class="control-label">To Date :</label>
<input class="form-control" type="date" name="to" required>
</div>
</div>
<div class="col-md-3" style=" margin-left: 110px; margin-top: 25px;">
<div class="form-group">
<input class="btn btn-primary " type="submit" value="submit">
</div>
</div>
</form>
</div>
</div><hr><br>
<?php
$con = mysqli_connect("localhost", "root", "", "hospitalms"); if (isset ($_POST['form']) && isset ($_POST['to'])) {
$form = $_POST['form'];
$to = $_POST['to'];
$sql = "SELECT * FROM appointmenttb WHERE appdate BETWEEN '$form' AND '$to'";
$res = mysqli_query($con, $sql); if ($res->num_rows > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<th scope="col">#</th>
<th scope="col">Fullname</th>
<th scope="col">Gender</th>
<th scope="col">Email</th>
<th scope="col">Contact</th>
<th scope="col">Doctor</th>
<th scope="col">Fees</th>
<th scope="col">Date</th>
<th scope="col">Time</th>
</tr>
<?php
$i = 1;
while ($row = mysqli_fetch_array($res)) {
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo "  " . " Mr." . $row["fname"] . " " . $row["lname"] . " "; ?></td>
<td><?php echo $row["gender"] . " "; ?></td>
<td><?php echo $row["email"] . " "; ?></td>
<td><?php echo $row["contact"] . " "; ?></td>
<td><?php echo $row["doctor"] . " "; ?></td>
<td><?php echo $row["docFees"] . " "; ?></td>
<td><?php echo $row["appdate"] . " "; ?></td>
<td><?php echo $row["apptime"] . " "; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
} else {
echo "No Data found";
}
}
$con->close();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
 
