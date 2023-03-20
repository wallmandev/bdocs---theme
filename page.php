<?php get_header(); ?>


    <!-- Main -->
    <main class="doc-content">
        <div class="doc-content__inner">

            <?php get_sidebar(); ?>


            <?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
            <article class="page">
                <header class="page__header">
                    <?php get_template_part('breadcrumb') ?>

                    <h1><?php the_title(); ?></h1>
                </header>

                <!-- Page content -->

                <?php the_content(); ?>
                    
                    
                <footer class="page__footer">
                    <div class="page__lastupdated">Last updated on <?php echo get_post_modified_time( 'j F, Y' ); ?></div>
                    <?php get_template_part ('pagination') ?>
                </footer>
            </article>
                <?php endwhile; endif; ?>

            <?php get_template_part('toc') ?>

        </div>
    </main>

    <?php get_footer(); ?>