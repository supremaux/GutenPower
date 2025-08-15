<?php get_header(); ?>

<main id="site-content" class="site-content text-3xl font-bold">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        }
    } else {
        echo '<p>' . esc_html__('Nenhum conteúdo encontrado', 'gutenpower') . '</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
