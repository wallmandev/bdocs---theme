<?php get_header(); ?>


    <!-- Main -->
    <main class="doc-content">
        <div class="doc-content__inner">

            <?php get_sidebar(); ?>


            <article class="page">
                <header class="page__header">
                    <?php get_template_part('breadcrumb') ?>

                    <h1>Documentation</h1>
                </header>

                <h2>Latest updates:</h2>
                <!-- Page content -->
                <?php if ( have_posts() ) : while ( have_posts()) : the_post();?>

                    <div class="post">
                        <span class="post__date"><?php the_time('j F, Y - H:i'); ?></span>
                        <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3></a>
                        <div class="post__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>

                <footer class="page__footer">
                    <div class="page__lastupdated">Last updated on February 20, 2023</div>
                </footer>
            </article>

            <?php //get_template_part('toc') ?>

        </div>
    </main>

    <?php get_footer(); ?>