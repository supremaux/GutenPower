<?php get_header(); ?>

<main id="site-content">
    <header class="page-header">
        <?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');
        ?>
    </header>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                </header>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
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
