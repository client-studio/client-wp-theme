<?php // get ACF modules using flexible content ?>
<?php if( have_rows('modules') ): while ( have_rows('modules') ) : the_row(); ?>

    <?php if( get_row_layout() == 'text' ): ?>
        <?php get_template_part( 'template-parts/module', 'text' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'blog' ): ?>
        <?php get_template_part( 'template-parts/module', 'blog' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'feature' ): ?>
        <?php get_template_part( 'template-parts/module', 'feature' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'form' ): ?>
        <?php get_template_part( 'template-parts/module', 'form' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'faq' ): ?>
        <?php get_template_part( 'template-parts/module', 'faq' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'cta' ): ?>
        <?php get_template_part( 'template-parts/module', 'cta' ); ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'space' ): ?>
        <?php get_template_part( 'template-parts/module', 'space' ); ?>
    <?php endif; ?>

<?php endwhile; endif; ?>
