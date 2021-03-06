<?php 
/* Footer for corporate-landing-page
 Footer Widgets and scripts are loaded here 
 */
?>
    <footer id="colophon" class="site-footer" role="conteninfo">
        <div class="holder">
            <div class="container">
                <div class="widget-area">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <?php dynamic_sidebar('footer-1');?>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <?php dynamic_sidebar('footer-2');?>    
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <?php dynamic_sidebar('footer-3');?>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <?php dynamic_sidebar('footer-4');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php /*do_action( 'corporate_landing_page_footer');*/ ?>
        <!-- Footer contactanos -->
        <div class="site-info">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="d-none d-sm-block"><?php dynamic_sidebar('footer-5');?></div>
                    <div><?php dynamic_sidebar('footer-6');?></div>
                </div>
            </div>
        </div>
        <!-- /Footer contactanos -->
    </footer>
        </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
        <?php wp_footer();?>
        
    </body>
</html>