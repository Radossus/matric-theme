<?php get_header(); ?>
<div id="landing-intro">
    <div class="container" id="intro-text">
        <div class="d-flex justify-content-between">
            <div id ="card-info" class="p-2 mt-5 mb-5" >
                <div id="landing-header">
                    <h1 class="text-white">Solution Engineer</h1>
                </div>
                <div id="landing-text">
                    <p>Poskytuji služby v oblasti podnikových informačních systémů. Mým cílem je navrhnout a udržovat spolehlivou infrastrukturu informačních systémů, která pokrývá celou řadu požadavků stanovených IT strategií.</p>
                </div>
            </div>
            <div class="text-right" id="text-animation">
                <span id="text1" class="float-right">Consultancy</span>
                <span id="text2">Optimalisation</span>
                <span id="text3" class="m-auto w-auto">Clouds</span>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        <div class="row p-2">
            <?php while(have_posts()) : the_post(); ?>
                <article>
               <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <p class="post-meta"><?php the_time( 'F jS, Y' ); ?></p>
                    <?php the_content() ?>
                </article>

            <?php endwhile; wp_reset_query();?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
