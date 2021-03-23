<?php
$t_name = $_POST['name'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];
$t_system=$_POST['system'];
$t_number=$_POST['number'];
if (!empty($t_name) || !empty($quantity) || !empty($amount) || !empty($t_system)  || !empty($t_number)) {
  $host = "sdb-b.hosting.stackcp.net";
  $dbUsername = "porosh";
  $dbPassword = "Ibqy$2^Zf,X]";
  $dbname = "porosh-3136398471";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// echo $t_name.'<br>'.$quantity.'<br>'.$amount.'<br>'.$t_system.'<br>'.$t_number.'<br><br><br>';
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
//$SELECT = "SELECT email From booking Where email = ? Limit 1";
$SQL = $conn->prepare("INSERT Into food (t_name, quantity, amount, t_system,t_number) values(?, ?, ?, ?, ?);");
$SQL->bind_param("siiss",$t_name,$quantity,$amount,$t_system,$t_number);
if($SQL->execute()===TRUE) {
echo 'Thanks For Your Response.You will get your food early '.'<br>';
}
else
{
echo "Error:<br>".$conn->error;
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">



    <!-- Icons font CSS-->
    <link href="vendor4/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor4/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- vendor4 CSS-->
    <link href="vendor4/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor4/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main5.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Online Food Ordering</h2>
                    <form method="POST" action="Order.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Item Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Quantity" name="quantity">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="number" placeholder="Total Amount" name="amount">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Payment System" name="system">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Payment Number" name="number">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor4/jquery/jquery.min.js"></script>
    <!-- vendor4 JS-->
    <script src="vendor4/select2/select2.min.js"></script>
    <script src="vendor4/datepicker/moment.min.js"></script>
    <script src="vendor4/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global2.js"></script>

</body>

</html>
<!-- end document-->
