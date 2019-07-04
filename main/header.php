<?php session_start();?>
<?php include "main/dbhoop.php"; include "main/receiveData.php";?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
  		<title>GermanGuideNYC</title>
  		<meta charset="UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  		<meta name="description" content="Deutschsprachige Stadtfuehrungen durch New York"/>
  		<meta name="keywords" content="New York, Stadtfuehrungen, Big Apple, Gotham Tour, Reisen"/>
  		<meta name="author" content="Christian Spaeth"/>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="login">
          <?php if(isset($_SESSION['u_id'])){
                  echo '<form action= "main/logout.php" method="POST">
                          <button class="button" type="submit" name="submit"><i class="fas fa-sign-out-alt"></i></button>
                        </form>';
                } else {
                  echo'<form action= "main/login.php" method="POST">
                        <input class="button" type="text" name="username" placeholder="Username">
                        <input class="button" type="password" name="password" placeholder="Password">
                        <button class="button" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i></button>
                      </form>';
          }?>
        </div>  
        <nav>
          <a href="#"><h1 class="brand"><img class="logo" src="../images/germanguide.png" alt="Logo"> German<span>Guide</span>NYC</h1></a>
          <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
				  </div>
          <ul class="nav-links">
            <li><a href="../index.php#h1">HOME</a></li>
    				<li><a href="../review.php#r1">REVIEW</a></li>
    				<li><a href="../booking.php#b1">BOOKING</a></li>
    				<li><?php if(isset($_SESSION['u_id'])){echo '<a href="service.php#s1">SERVICE</a><br>';} else {echo '<a href="../legal.php#l1">LEGAL</a><br>';}?></li>
          </ul>
        </nav>
        <div><br><br><br><br><br><br><h1><?php echo $page;?></h1><br></div>
      </div>
    </header>
    <script src="../js/app.js"></script>
