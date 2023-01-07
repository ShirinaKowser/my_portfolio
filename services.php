<?php include('includes/dbconnection.php');?>

<?php include_once('includes/header.php');?>
<br/>
<br/>
<!-- works_section start -->
<section id="services_section" class="services_section">
    <div class="container">
        <h2 class="title">My Works</h2>
        <div class="services_content">
        <?php 
                  $works_query = $conn->query("SELECT * FROM works");
                  while($row = $works_query->fetch_assoc()){
                  ?>
            <div class="card">
                <div class="box">
                <h3><?php echo $row['company'] ?></h3>
                <div class="text"><?php echo $row['title']?></div>
                <p><?php echo $row['JobDescription']?></p>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>
<!-- works_section end -->
<?php include_once('includes/footer.php');?>

