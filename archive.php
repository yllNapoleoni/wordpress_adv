<?php get_header();?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
                the_archive_title('<hi class="archive-title">','</h1>');

            ?>

            <?php the_archive_description('<div class="archive-description">','</div>');?>

            <div class="container">

            <div class="archive-items">
                <?php
                    if(have_posts());
                    while(have_posts()):the_post();
                    get_template_part('parts/content');
                ?>

                <div class="wpdevs-pagination">
                    <div class="pages new">
                        <?php previous_posts_link("<< Newer posts");?>

                    </div>
                    <div class="pages old">
                        <?php next_posts_link("Older posts>>");?>
                    </div>

                </div>
                <?php else:  ?>
                    <p>nothing yet to be displayed?</p>
                    <?php endif;?>

            </div>

                    <?php get_sidebar();?>

            </div>  

        </main>

    </div>

</div>
<?php get_footer();?>