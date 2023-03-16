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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptatum error delectus voluptatibus fuga tenetur aut possimus facere earum voluptas vel sit magnam esse aperiam laudantium temporibus quam sed quis.
                    Aliquid nam, in commodi sapiente fugit tenetur doloremque nemo nihil cumque recusandae mollitia ad asperiores perferendis! Error odit doloribus molestiae sint deserunt qui, nemo aspernatur blanditiis fugiat dicta sed porro.
                    Adipisci commodi ipsa ducimus architecto aut voluptatem omnis cumque perferendis sunt autem perspiciatis ipsum fuga molestiae dolorum consectetur reiciendis quia, necessitatibus facilis eaque dolores laudantium voluptas minus reprehenderit? Tempore, earum?
                    Deserunt, voluptatem! Culpa corporis laborum consequuntur dolorum tempore voluptatem, nam eius quas asperiores repellendus assumenda incidunt molestias similique cupiditate consequatur quisquam deleniti mollitia consectetur fuga soluta. Illo odio libero ad?
                    Possimus incidunt accusamus culpa maiores delectus. Atque velit id, eaque totam aperiam molestiae vitae perspiciatis reiciendis sed quaerat at magni a ullam reprehenderit doloremque illo debitis minus voluptates cum! Assumenda?</p>

                <footer class="page__footer">
                    <div class="page__lastupdated">Last updated on February 20, 2023</div>
                </footer>
            </article>

            <?php get_template_part('toc') ?>

        </div>
    </main>

    <?php get_footer(); ?>