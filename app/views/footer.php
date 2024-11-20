
     <section class="contact section-padding pt-0" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-12">
            <form action="#" method="get" class="contact-form webform"  role="form">
                
                <div class="form-group d-flex flex-column-reverse">
                    <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">

                    <label for="cf-name" class="webform-label">Full Name</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="Your Email">

                    <label for="cf-email" class="webform-label">Your Email</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder="Your Message"></textarea>

                    <label for="cf-message" class="webform-label">Message</label>
                </div>

                <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
            </form>
          </div>

            <div class="mx-auto col-lg-4 col-md-6 col-12">
                <h3 class="my-4 pt-4 pt-lg-0">Quick Contact</h3>

                <p class="mb-1">9650891653</p>

                <p>
                    <a href="#">
                        mrdilipshankar@gmail.com
                    <i class="fas fa-arrow-right custom-icon"></i>
                    </a>
                </p>

                <ul class="social-links mt-2">
                    <li><a href="https://fb.com/tooplate" rel="noopener" class="fab fa-facebook"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-twitter"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-instagram"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-linkedin"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                </ul>
                
              <p class="copyright-text mt-5 pt-3">&copy; <?php echo date('Y');?> </p>
                
                <p>Design: Dilip Shankar Prajapati</p>
            </div>

        </div>
      </div>
    </section>
     <!-- SCRIPTS -->
     <script src="<?php echo JS;?>jquery.min.js"></script>
     <script src="<?php echo JS;?>bootstrap.min.js"></script>
     <script src="<?php echo JS;?>smoothscroll.js"></script>
     <script src="<?php echo JS;?>owl.carousel.min.js"></script>
     <script src="<?php echo JS;?>custom.js"></script>

</body>
</html>