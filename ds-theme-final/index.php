
    <!--Hero-->

    <?php get_header();?>
    <div id="content" class="site-content">
        <div id="primary" class="cotent-area">
            <main id="main" class="site-main">
                <section class="hero">
                    Hero
                </section>
                <section class="services">
                    Services
                </section>
                <section class="home-block">
                    <div class="container">
                        <div class="blog-items">
                            <?php 
                            if(have_posts()):
                                while(have_posts()):?>
                                <article>
                                <h2><?php the_title():?></h2>
                                <div class="meta-info">
                                    <p>Posted in <?echo get_the_date();?>by<?the_author_posts_link();?></p>
                                    <p>Categories<?php the_category();?></p>
                                    <p>Tgas:</p>
                                </div>
                                <?php the_content()?>
                                </article>
                                <?php
                                endwhile;
                            else ?>
                            <p>Nothing to be displayed</p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar();?>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <!---->
    <?php get_footer();?>
