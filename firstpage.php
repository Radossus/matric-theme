<?php
/**
* Template Name: Úvodní strana TESTTTTT
* Description: Homepage
*/
?>
<?php get_header(); ?>
<div id="landing-intro">
    <div class="container" id="intro-text">
        <div id = "card-info" class="card border-0 w-50" >
            <div class="card-header" id="landing-header">
                <div>Solution Engineer</div>
            </div>
            <div class="card-body" id="landing-text">
                <p>Poskytuji služby v oblasti podnikových informačních systémů. Mým cílem je navrhnout a udržovat spolehlivou infrastrukturu informačních a komunikačních technologií, která pokrývá celou řadu požadavků stanovených IT strategií.</p>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <?php while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; wp_reset_query();?>
</div>



<script>
    $( function() {
        $( "#landing-intro" ).hide();
        $( "#landing-intro" ).fadeIn(900);
        $( "#landing-header" ).hide();
        $( "#landing-header" ).fadeIn(600);
        $( "#landing-text" ).hide();
        $( "#landing-text" ).fadeIn(1000);
    } );
</script>