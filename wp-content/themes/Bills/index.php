<?php get_header() ?>
<!-- Main -->
<div class="wrapper terms-con-wrap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-9 col-xl-9">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <!-- Content -->
                            <article class="box post">
                                <a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('single-post') ?>
                                </a>
                                <header>
                                    <h2><?php the_title() ?></h2>
                                </header>

                                <?php the_content() ?>

                            </article>
                    <?php }
                    }
                ?>
                

            </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>