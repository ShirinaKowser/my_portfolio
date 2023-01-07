<?php include_once('includes/dbconnection.php');?>
<?php 
    $sql = "SELECT * FROM users" ;
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
 ?>  

<!-- footer_section start here -->

<section class="footer">
    <div class="container">
        <div class="col-md-12 col-12 footer-left">
            <ul>
            <li><a  href="index.php">Home</a></li>
                <li><a  href="about.php">About</a></li>
                <li><a  href="skills.php">Skills</a></li>
                <li><a  href="services.php">Works</a></li>
                <li><a  href="testimonials.php">Testimonials</a></li> 
                <li><a  href="contact.php">Contact</a></li>
            </ul>
        </div>
        
    </div>

</section>
<!--footer_section end-->

<!--copy_right section start here-->
<section class="copyright">

    <div class="container">
        <div class="copyright-left">
            <span>Created By <a href="https://github.com/ShirinaKowser">ShirinaKowser</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
        </div>
        <div class="copyright-right">
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
        <div class="clearfix"> </div>

    </div>
</section>
<!-- copyright_section end here -->

<!-- scroll-up-btn -->
<div class="scroll-up-btn">
    <i class="glyphicon glyphicon-menu-up"></i>
    
</div>
<!-- js link here -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slick.min.js "></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.flexslider.js "></script>
<script src="js/init.js "></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<!--coustom js here-->
<script src="js/custom.js"></script>


</body>

</html>