<!--
 // WEBSITE: https://lily_info_tech.com
 // TWITTER: https://twitter.com/
 // FACEBOOK: https://www.facebook.com/
 // GITHUB: https://github.com/shirinakowser/
-->
<?php include_once('includes/dbconnection.php');?>

<?php 
    $sql = "SELECT * FROM users" ;
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
 ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title><?php echo $data['title']?>-<?php echo $data['title']?></title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="lily_info_tech">
    <meta name="theme-name" content="personal portfolio" />

    <!--css link here-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">


    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/boxicons.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/layout.css">

    


    <!--google-fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!--coustom css link here-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<!--header_section start-->
<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
            <h1><a href="index.php" class="navbar-brand">Shirina Kowser</a></h1>       
         </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right margin-top active">
                <li><a  href="index.php">Home</a></li>
                <li><a  href="about.php">About</a></li>
                <li><a  href="skills.php">Skills</a></li>
                <li><a  href="services.php">Works</a></li>
                <li><a  href="testimonials.php">Testimonials</a></li> 
                <li><a  href="contact.php">Contact</a></li>
                <li><a  href="admin/login.php">Admin</a></li>

            </ul>
            <div class="clearfix"> </div>
        </div>

        
</nav>


<div class="clearfix"> </div>

