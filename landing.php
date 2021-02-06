<?php
/**
* Template Name: Úvodní strana celého webu
* Description: Užití u statických stran
*/
?>
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

<div id="cards" class="bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card bg-main-blue text-white h-100">
                    <h5 class="card-header">Cloud Azure Infrastruktura</h5>
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
            <div class="col-sm-4 py-2">
                <div class="card bg-main-blue text-white h-100">
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
            <div class="col-sm-4 py-2">
                <div class="card bg-main-blue text-white h-100">
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
</div>


<div class="container pt-5 pb-5" id="main-text ">
    <?php while(have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; wp_reset_query();?>
    <div class="row">
        <div class="col-sm-8">
            <h1>O mně ::</h1>
            <p>Poskytuji profesionální služby v oblasti informačních systémů. Mým cílem je navrhnout a udržovat spolehlivou infrastrukturu informačních a komunikačních technologií, která pokrývá celou řadu požadavků stanovených IT strategií. Během své profesní kariéry jsem prošel pozicemi od zajištění uživatelské a technické podpory, správy serverových systémů až po řízení projektů nasazení informačních systémů do podnikové infrastruktury.</p>

            <p>V posledních 5 letech se zaměřuji na architekturu IT infrastruktury s ohledem na současné trendy Cloud computingu a zajištění kybernetické bezpečnosti.</p>

            <div class="mb-3">
            <span><a a class="btn btn-primary" href="https://www.linkedin.com/in/radekslachta/" role="button" target="_blank"><span data-feather="linkedin"></span></a></span>
            <span><a a class="btn btn-primary" href="https://twitter.com/radoss" role="button" target="_blank"> <span data-feather="twitter"></span></a></span>
            </div>
        </div>
        <div class="col-sm-4 text-center"><img class="rounded wp-image-27 size-full" src="<?php bloginfo('template_url'); ?>/images/me-1.jpg" alt="" width="287" height="314" /></div>
    </div>
</div>

<div class="bg-light">
    <div class="container pt-5 pb-5">
    <h1>Reference ::</h1>
        <div class="row">
                <div class="col-sm-4 py-2">
                    <div class="card text-white h-100 bg-main-blue" >
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Vladimír Gazdík</h5>
                                <h6>Business Development Manager ve společnosti Arrow ECS</h6>
                            </div>

                            <p class="card-text">Radek je odborník v oblasti Networking/servery/storage/virtualizace a zvláště má velmi dobrou zkušenost s produkty VEEAM. Uskutečnili jsme spolu několik obchodů. Velmi dobrá spolupráce. Velmi spolehlivý a pečlivý člověk. Díky Radku za spolupráci. Přeji Ti hodně osobních a profesních úspěchů!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 py-2">
                    <div class="card text-white bg-main-blue  h-100">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Mgr. Roman Krakovka</h5>
                                <h6>Advokát a insolvenční správce</h6>
                            </div>

                            <p class="card-text">Pana Šlachtu jsem požádal o kompletní zajištění spolehlivé a zabezpečené ICT infrastruktury včetně dodávky výpočetní techniky pro mou advokátní kancelář. Celá realizace probíhala podle sestaveného plánu a  všechny ICT služby byly spuštěny a otestovány v dostatečném předstihu. Spolupráci mohu vřele doporučit.</p>
                        </div>
                    </div>
                </div>
            <div class="col-sm-4 py-2">
                <div class="card text-white bg-main-blue  h-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Marie Baranová</h5>
                            <h6>Sales Manager ve společnosti Zebra s.r.o</h6>
                        </div>

                        <p class="card-text">S panem Šlachtou jsem vždy ráda spolupracovala. Za celou dobu naši cca 3-leté spolupráce si nepamatuji problém, který bychom společně elegantně nevyřešili. Aktivně se zajímal o nové trendy v IT a úspěšně absolvoval naše certifikační školení. Je to solidní a spolehlivý člověk.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 py-2">
                <div class="card text-white bg-main-blue  h-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Ivo Vávra</h5>
                            <h6>Senior Service Architect</h6>
                        </div>
                        <p class="card-text">Radek shew (in my eyes) excellent knowledge of powershell and pro-actively created the reporting script to support the end-customer’s need. I wish we would have more guys like him, not because of the powershell scripting but because of the willingness, proactivity and customer care.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card text-white bg-main-blue  h-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Gatis Grosmanis</h5>
                            <h6>Senior Project Manager</h6>
                        </div>
                        <p class="card-text">Thanks Radek for all your efforts to step in Transition project and change GPO, create Service accounts, fix permissions, change DNS records and so on, so on. I much appreciate your support and work attitude1 Thanks a lot!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <div class="card text-white h-100 bg-main-blue" >
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Zuzana Paloch</h5>
                            <h6>HR Specialist</h6>
                        </div>
                        <p class="card-text">Radek mne velmi mile překvapil nejen svými technickými znalostmi a zkušenostmi, ale také svou osobností. Velmi milý muž s realistickým pohledem na svět, příjemné a strukturované vystupování. Přesvědčil mne také o tom, že to co dělá, dělá s radostí a protože jej to baví.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-main-blue">
    <div class="container pt-5 pb-5">
        <h1 class="text-white">Poslední příspěvky z blogu ::</h1>
        <div class="row p-2">
            <?php
            $args = array( 'numberposts' => '5', 'tax_query' => array(
                array(
                    'taxonomy' => 'post_format',
                    'field'    => 'slug',
                    'terms'    => 'post-format-aside',
                    'operator' => 'NOT IN'
                ),
                array(
                    'taxonomy' => 'post_format',
                    'field'    => 'slug',
                    'terms'    => 'post-format-image',
                    'operator' => 'NOT IN'
                )
            ) );
            $recent_posts = wp_get_recent_posts( $args );

            //var_dump($recent_posts);

            foreach( $recent_posts as $recent ){
                printf('<div class="col-sm-6 col-lg-4 py-2">');
                    printf('<div class="card h-100 bg-light">');
                        printf('<div class="card-body d-flex flex-column">');
                            printf( '<h2 class="card-title "><a href="%1$s">%2$s</a></h2>',
                                esc_url( get_permalink( $recent['ID'] ) ),
                                apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                            );
                            $date =  new DateTime($recent['post_date_gmt']);
                            printf('<p class="post-meta"> <span data-feather="calendar" style="margin-top: -7px;"></span> %1$s </p>',
                                $date->format('d. m. Y')
                                        );
                                printf('<p class="card-text"> %1$s [...]</p>',
                                    strip_tags(substr($recent['post_content'],0,200))
                                );
                        printf('</div>');
                               printf('<div class="pl-3 pr-3 pb-3">');
                                    printf('<a class="align-self-end btn btn-block btn-primary text-white" href="%1$s" >Číst více</a>',
                                        esc_url( get_permalink( $recent['ID'] ))
                                   );
                                printf('</div>');
                    printf('</div>');
                printf('</div>');
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
    $( function() {
        $( "#landing-intro" ).hide();
        $( "#landing-intro" ).fadeIn(900);
        $( "#landing-header" ).hide();
        $( "#landing-header" ).fadeIn(600);
        $( "#cards" ).hide();
        $( "#cards" ).fadeIn(1200);
        $( "#main-text" ).hide();
        $( "#main-text" ).fadeIn(1600);
    } );

    $(function(){
        $( "#landing-intro" ).mouseout(function(){
            $("#card-info").css("opacity","0.8");
        });
    });
</script>