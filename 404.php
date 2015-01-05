<?php get_header(); ?>
<div id="container" class="plumbingPages">
 
    <div id="content" class="catSection">

 
<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php /* an h2 title */ ?>
                    <h1 class="entry-title">404 NOT FOUND</h1>
 
<img src="http://2012.danieljmckeown.com/library/images/BelleDJMCLOUD2012byDanielJMcKeown.jpg" width="555" alt="NOT FOUND GREEN BLUE BIRD DRAGON" /> 

<?php /* Close up the post div and then end the loop with endwhile */ ?>      
 



    </div><!-- #content -->

<br />
<div id="navlinks" class="navlb">
<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
</div>
 
</div><!-- #container -->
 
<div id="primary" class="widget-area">
</div><!-- #primary .widget-area -->
 
<div id="secondary" class="widget-area">
</div><!-- #secondary -->
<?php get_footer(); ?>
