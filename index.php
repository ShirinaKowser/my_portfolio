<!--
 // WEBSITE: https://lily_info_tech.com
 // TWITTER: https://twitter.com/
 // FACEBOOK: https://www.facebook.com/
 // GITHUB: https://github.com/shirinakowser/
-->
<?php include_once('includes/dbconnection.php');?>
<?php include_once('includes/header.php');?>
<?php 
    $sql = "SELECT * FROM users" ;
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
 ?>  
<!-- banner_section start here  -->
<section id="banner_section">
    <div class="banner">
        <div class="container">
            <script src="js/responsiveslides.min.js"></script>
            <script>
                $(function() {
                    $("#slider").responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        pager: true,
                    });
                });
            </script>
            <div class="slider">
                <div class="callbacks_container">
                    <div class="rslides" id="slider">
                        <div class="banner_content">
                             <div class="text-1">I'm a passionate 
                                <br><span class="typing"></span>
                            </div>
                            <br><br>
                            <div class="social-links">
                                <?php
                                if($data['twitter']){
                                ?>
                                <a href="<?php echo $data["twitter"]?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></i></a>
                                <?php } ?>
                                <?php
                                if($data['facebook']){
                                    ?>
                                    <a href="<?php echo $data["facebook"]?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <?php } ?>
                                <?php
                                if($data['instagram']){
                                    ?>
                                    <a href="<?php echo $data["instagram"]?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <?php } ?>

                                <?php
                                if($data['linkedin']){
                                    ?>
                                    <a href="<?php echo $data["linkedin"]?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                <?php } ?>
                                <?php
                                if($data['github']){
                                    ?>
                                    <a href="<?php echo $data["github"]?>" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                                <?php } ?>
                                <?php
                                if($data['youtube']){
                                    ?>
                                    <a href="<?php echo $data["youtube"]?>" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
                                <?php } ?>
                                
                            </div>                       
                         </div>
                    </div>
                </div>
            </div>
        </div>
        
</section>

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
                  $about_query = $conn->query("SELECT * FROM tblpage WHERE PageType = 'aboutus'");
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

<!-- about_section end here  -->

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
<!-- contact_section start -->
<section id="contact_section" class="contact_section">
    <div class="container">
        <h2 class="title">Contact Me</h2>
         <div class="row">
            
                <div class="col-md-6 d-flex align-items-stretch">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>My Address</h3>
                            <p><?php echo $data['address'] ?></p>
                        </div>

                            <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                <h3>Email Me</h3>
                                <p><?php echo $data['email'] ?></p>
                            </div>
                    
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Me</h3>
                                <p><?php echo $data['contactno'] ?></p>
                            </div>
                            <br><br>
                     </div>

                     <div class="col-md-6 d-flex align-items-stretch">

                            <?php 
                                if(isset($_POST['send_message'])){
                                $name = mysqli_real_escape_string($conn, $_POST['name']);
                                $email = mysqli_real_escape_string($conn, $_POST['email']);
                                $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                                $message = mysqli_real_escape_string($conn, $_POST['message']);
                                $contact= " INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ( '$name', '$email', '$subject', '$message')"; 
                                mysqli_query($conn,$contact);
                            
                                }
                                ?>        
                        
                            <form  method="post" role="form" class="php-email-form mt-5">
                                <div class="row">
                                <div class="form-group mt-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3 ">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                </div>
                                <div class="form-group mt-3">
                                <input type="text" class="form-control text-color" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                
                                <div class="text-center mt-1"><button type="submit" name="send_message" value="">Send Message</button></div>
                            </form> 

                        </div>
                </div>

    </div>
  </section><!-- End Contact Section -->

<!-- contact_section end -->


<!-- contact_section end -->


  

<?php include_once('includes/footer.php');?>


