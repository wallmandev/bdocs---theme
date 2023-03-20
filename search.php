<?php get_header(); ?>


    <!-- Main -->
    <main class="doc-content">
        <div class="doc-content__inner">

            <?php get_sidebar(); ?>


            <article class="page">
                <header class="page__header">
                    <?php get_template_part('breadcrumb') ?>

                    <h1>Search results for: <em><?php the_search_query() ?></em></h1>
                </header>

                <!-- Page content -->
                <?php if ( have_posts() ) : while ( have_posts()) : the_post();?>

                    <div class="post">
                        <header class="post__header">
                            <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3></a>
                            <span class="post__type"><?php echo get_post_type() ?></span>
                        </header>
                        <div class="post__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php 
                endwhile; 

                else :

                    echo 'No results found...';
            
                endif; ?>

                <footer class="page__footer">
                    <!-- <div class="page__lastupdated">Last updated on February 20, 2023</div> -->
                </footer>
            </article>

            <?php //get_template_part('toc') ?>

        </div>
    </main>

    <?php get_footer(); ?>