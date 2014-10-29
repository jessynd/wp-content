<?php
/**
 * Template Name: Form
 *
 * This is the template that displays all pages by default.
 *
 * @package Starter_Theme
 */

acf_form_head(); ?>
<?php get_header(); ?>

    <section id="primary">

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
            
            <div class="entry-content">
                <?php the_content(); ?>

            <?php acf_form(array(
                    'post_id'       => 'new_post',
                    'new_post'      => array(
                    'post_type'     => 'event',
                    'post_status'   => 'publish'
                    ),
                        'submit_value'      => 'Create a new event'
                    )); ?>

            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>

            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->


        <?php endwhile; // end of the loop. ?>

    </section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>