<?php

/*
 * Template name: About page
 */

get_header();

global $redux;

// echo '<pre>';
// var_dump($redux["about-section-title"]);
?>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End-->
<!-- About Details Start -->
<div class="about-details section-padding30">
    <div class="container">
        <div class="row">
            <div class="offset-xl-1 col-lg-8">
                <div class="about-details-cap mb-50">
                    <h4 > 
                    <?php echo $redux["about-title"]; ?>
                   
                    </h4>
                    <p>
                    <?php echo $redux["about-section-title"]; ?>
                 
                    </p>
                </div>

                <div class="about-details-cap mb-50">
                    <h4 >
                    <?php echo $redux["about-top-section-title"]; ?>
                   </h4>
                    <p>
                    <?php echo $redux["about-text"]; ?> 
                    </p>

                    <p> 
                    <?php echo $redux["about-intro"]; ?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Details End -->
<?php
get_template_part('video');
?>
<div style="margin: 100px 0;"></div>
<?php
get_template_part('advantages');
?>

<?php

get_footer();

?>
