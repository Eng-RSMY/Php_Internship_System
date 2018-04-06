

<?php
//including the database connection file
include_once("config.php");

// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
 header("location: ../login.php");
 exit;
}

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM companies ORDER BY company_id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Edit Companies</title>
	<meta charset="utf-8">
  <title>IBIS Internship System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
  <link href="../..img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../style.css" rel="stylesheet">
</head>

<body>
	
	 <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#"><img src="../../img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../">Home</a></li>
          <li class="menu-active"><a href="../logout.php" class="btn btn-danger">Sign Out of Your Account</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main">

    <section id="about">
      <div class="container">
      	<div class="row">
      		<a href="../main.php"> Home</a>
      	</div>
        <div class="row about-container">

<h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>
<br/><br/>

	<table width='100%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
		<td>Phone</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['company_id']."</td>";
		echo "<td>".$res['company_name']."</td>";
		echo "<td>".$res['company_email']."</td>";
		echo "<td>".$res['comapny_address']."</td>";
		echo "<td>".$res['company_phone']."</td>";

		echo "<td><a href=\"edit.php?company_id=$res[company_id]\">Edit</a> | 
		<a href=\"delete.php?company_id=$res[company_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	<p><a href="add_cm.php" class="btn btn-primary">Add New Data</a></p>
	
</main>
</section>
</div>
</div>
</body>
</html>
