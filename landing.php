<?php
/**
* Template Name: Úvodní strana celého webu
* Description: Užití u statických stran
*/
?>
<?php get_header(); ?>

<div id="landing-intro" class="mb-3">
    <div class="container" id="intro-text">
        <div class="d-flex justify-content-between">
            <div id ="card-info" class="p-2 mt-2 mb-3" >
                <div class="" id="landing-header">
                    <h1 class="animated bounce infinite">Solution Engineer</h1>
                </div>
                <div class="" id="landing-text">
                    <p>Poskytuji služby v oblasti podnikových informačních systémů. Mým cílem je navrhnout a udržovat spolehlivou infrastrukturu informačních a komunikačních technologií, která pokrývá celou řadu požadavků stanovených IT strategií.</p>
                    <div>
                        <button type="button" class="btn btn-success btn-lg mt-3">Nabízené služby</button>
                    </div>
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

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card bg-light mb-3">
                <h5 class="card-header">Cloud Infastruktura</h5>
                <div class="card-body">
                    <p class="card-text">
                    <li>Správa zdrojů cloudové infrastruktury</li>
                    <li>Automatizace úloh správy</li>
                    <li>Monitoring a alerting</li>
                    <li>Zálohování zdrojů</li>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card bg-light mb-3">
                <h5 class="card-header">ICT On-Prem infrastruktura</h5>
                <div class="card-body">
                    <p class="card-text">
                        <li>Správa zdrojů infrastruktury </li>
                        <li>Správa serverů Windows, Linux</li>
                        <li>Správa služeb infrastruktury</li>
                        <li>Analýza slabých míst a řešení problémů</li>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card bg-light mb-3">
                <h5 class="card-header">Office 365</h5>
                <div class="card-body">
                    <p class="card-text">
                    <li>Konzultace plánů Office 365</li>
                    <li>Nasazení do vašeho prostředí</li>
                    <li>Migrace On-Premis do Office 365</li>
                    <li>Správa Office 365</li>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <?php while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; wp_reset_query();?>
</div>

<?php get_footer(); ?>


<script>
    $( function() {
        $( "#landing-intro" ).hide();
        $( "#landing-intro" ).fadeIn(900);
        $( "#landing-header" ).hide();
        $( "#landing-header" ).fadeIn(600);
        $( "#landing-text" ).hide();
        $( "#landing-text" ).fadeIn(1000);
    } );

    $(function(){
        $( "#card-info" ).mouseover(function(){
            $("#card-info").css("opacity","1");
        });
        $( "#landing-intro" ).mouseout(function(){
            $("#card-info").css("opacity","0.8");
        });

    });

</script>