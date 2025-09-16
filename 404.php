<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>page not found</h1>
                        <p>unfortunatly, the page you tried to reach does not exist on this site</p>
                    </header>

                    <div class="error">
                        <p>how about doing a research?</p>
                        <?php get_search_form();?>
                        <?php
                        the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title'=>'Latest Posts',
                                'number'=>3
                            )
                            );
                            ?>
                        
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>

<?php get_footer();?>

