<?php 
    /**
     * php/footer/footer-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<section id="footer-primary">
    <div class="background-overlay"></div>

    <div class="row">
        <div class="columns col-xl-12 wrapper-content">
            <div class="row">
                
                <!-- #FOOTER-LOGO -->
                <div id="footer-logo" class="columns col-sm-12 col-md-6">
                    <div class="row">

                        <div class="columns col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/logos/logo-scgolfpanel-340x317.png'?>" alt="South Carolina Golf Course Ratings Panel"/>
                        </div>

                        <div class="columns col-sm-8">
                            <h3>South Carolina Golf Course Ratings Panel</h3>
                        </div>

                    </div>
                </div>

                <!-- #FOOTER-MENU -->
                <div id="footer-menu" class="columns col-sm-12 col-md-6">
                    <?php include(get_stylesheet_directory().'/php/menus/menu-footer-primary.php'); ?>
                </div>

            </div>
        </div>
    </div>

</section>