<?php include('includes/dbconnection.php');?>

<?php include_once('includes/header.php');?>
<br/>
<br/>

<!-- about_section start here  -->
<section id="about_section" class="about_section">
    <div class="container">
        <h2 class="title">About Me</h2>
        <div class="about_content">
            <div class="column left">
                <img src="images/about.jpg" alt="not_found">
            </div>
            <div class="column right">
            <?php 
                  $about_query = $conn->query("SELECT * FROM tblpage");
                  while($row = $about_query->fetch_assoc()){
                  ?>
                <p><?php echo $row['PageDescription']?></p>
                <?php } ?>
                <a href="#">Read More</a>

            </div>
        </div>
    </div>
</section>
<!-- about_section end here  -->
<?php include_once('includes/footer.php');?>

