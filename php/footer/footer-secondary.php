<?php 
    /**
     * php/footer/footer-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 2022
    **/
?>

<section id="footer-secondary">
    <div class="row">
        <div class="columns col-xl-12 wrapper-content">
            <div class="row">

                <!-- #FOOTER-COPYRIGHT -->
                <div id="footer-copyright" class="columns col-sm-12 col-lg-5">
                    <p>Copyright &copy; <?php echo date('Y') ?> | <a href="/"><?php bloginfo('name'); ?></a></p>
                </div>

                <!-- #FOOTER-SECONDARY-MENU -->
                <div id="footer-secondary-menu" class="columns col-sm-12 col-lg-7">
                    <?php include(get_stylesheet_directory().'/php/menus/menu-footer-secondary.php'); ?>
                </div>

            </div>
        </div>
    </div>
</section>