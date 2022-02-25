<?php get_header();  ?>
<body>
<main>
    <div class="main-split">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
//                'date_query' => array(
//                        array(
//                            'column' => 'post_date',
//                            'after' => 'today',
//                            'inclusive' => true
//                        )
//                )
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();

            ?>
        <h1>MAAF , PROGRAMMER NYA MASIH BINGUNG</h1>
<!--            <div class="card">-->
<!--                <div class="card-body text-center">-->
<!--                    --><?php //the_post_thumbnail('small_thumbnail'); ?>
<!--                    <div class="card-title">-->
<!--                        <h3><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--                    </div>-->
<!--                    <p class="card-text">--><?php //echo wp_trim_words( get_the_content(), 30, ' ...' ); ?><!--</p>-->
<!--                    <a href="--><?php //the_permalink(); ?><!--" class="btn btn-primary">Read More</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <br>-->
        <?php endwhile; ?>
<!--    </div>-->
<!--    <div class="text-center">-->
<!--        --><?php //fauzan_pagination(); ?>
<!--    </div>-->
<!--    <br>-->
</main>

<!--Memanggil Widget-->
<aside>
    <?php dynamic_sidebar('sidebar1') ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>
</body>