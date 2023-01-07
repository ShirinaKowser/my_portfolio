<?php include('includes/dbconnection.php');?>

<?php include_once('includes/header.php');?>
<br/>
<br/>
<!-- skills_section start -->
<section id="skills_section" class="skills_section">
    <div class="container">
        <h2 class="title">My Skills</h2>
        <div class="skills_content">
            <div class="column left">
                <div class="text">My Creative Skills On :</div>
                <?php 
                  $skills_query = $conn->query("SELECT * FROM skills");
                  while($row = $skills_query->fetch_assoc()){
                  ?>
                <p><?php echo $row['PageDescription']?></p>
                <?php } ?>  <a href="#">Read More</a>
            </div>
           
            <div class="column right">
            <?php 
                  $skills_query = $conn->query("SELECT * FROM skills");
                  while($row = $skills_query->fetch_assoc()){
                  ?>
                <div class="bars">
                    <div class="info">
                        <span><?php echo ucwords($row['subject'])?></span>
                        <span><?php echo $row['expertise']?></span>                       
                    </div>
                   <div class="line <?php echo $row['subject']?>"></div>
                </div>
                <?php } ?>

             </div>
        </div>
    </div>
</section>
<!-- skills_section end -->

<?php include_once('includes/footer.php');?>
