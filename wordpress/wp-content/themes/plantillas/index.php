<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url'); ?>" />
</head>
<body>

        <?php while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

            <div class="entry">
                <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div><!-- end entry -->

            <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

        </div><!-- end post -->

        <?php endwhile; ?>
    
</body>
</html>