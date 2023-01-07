<?php include('includes/dbconnection.php');?>

<?php include_once('includes/header.php');?>
<br />
<br/>

<!--testmonial_section start here-->
<section id="testimonials_section">
    <div class="container">
        <h2 class="title">Client Testimonials</h2>           
           <div class="testimonial_content">
               <div class="flexslider">
                  <ul class="slides">
                  <?php 
                  $testimonial_query = $conn->query("SELECT * FROM testimonials");
                  while($row = $testimonial_query->fetch_assoc()){
                  ?>
                     <li>
                        <blockquote>
                           <p><?php echo $row['Description']; ?></p>
                           <br>
                        
                           <cite><?php echo $row['name']; ?></cite>
                        </blockquote>
                     </li> 
                     <?php } ?>
                     
                  </ul>
               </div> 
          </div> 
    </div>  

   </section> 


  
<!--testmonial_section end here-->


<?php include_once('includes/footer.php');?>
