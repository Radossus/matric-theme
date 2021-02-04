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
    <div class="container pt-3 pb-3">
        <div class="text-center">
        <a href="<? echo get_home_url().'/clanky'; ?>" class="btn btn-success btn-lg m-1" role ="button">Všechny články</a>
        <?php
        $categories = get_the_category();
        if ( $categories ) {
            foreach ( $categories as $category ) {
                $output .= '<a class="btn btn-success btn-lg m-1" role ="button" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>';
            }
                echo trim($output);
            }
        ?>
        </div>
    </div>
</div>


    <div class="container pt-3">
        <div class="row p-2">
            <?php while(have_posts()) : the_post(); ?>
            <div class="col-sm-6 col-lg-4 py-2">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <p class="post-meta"><?php the_time( 'F jS, Y' ); ?></p>
                        <p class="card-text">
                            <?php echo get_the_excerpt() ?>
                            <a class="align-self-end btn btn-block btn-primary mt-3" style="margin-top: auto;" href="<?php the_permalink() ?>" role="button">Číst více</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
    </div>

<?php get_footer(); ?>

