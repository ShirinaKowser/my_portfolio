<?php include_once('includes/dbconnection.php');?>

<?php include_once('includes/header.php');?>

  <br/>
  <br/>
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
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                
                                <div class="text-center mt-2"><button type="submit" name="send_message" value="">Send Message</button></div>
                            </form> 

                        </div>
                </div>

    </div>
  </section><!-- End Contact Section -->

<!-- contact_section end -->


<?php include_once('includes/footer.php');?>


