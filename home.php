<?php
/*
Template Name: Masonry
Description: Template which shows your post in a masonry grid
*/
global $jbst_layout;
$jbst_layout = 'full-width';
get_header();
do_action( 'jbst_before_content_page' );
?>

<div class="container-fluid" id="contentholder" style="padding:0;">
<div class="row" style="margin:0;">
<?php $i=0;  while ( have_posts() ) : the_post(); ?>
<div class="<?php echo ($i===0)?'stamp col-lg-6 ':'col-lg-3 '?> col-md-4 col-sm-6 col-xs-12">
<article id="post-<?php the_ID(); ?>">
<?php the_post_thumbnail(); ?>
<div class="header"><h1><?php 
the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
?></h1></div><div class="content">
<?php the_excerpt();?></div>
</article>
</div>
<?php $i++; endwhile; ?>
</div>
</div>
<!-- http://www.codeproject.com/Articles/541717/wordpress-numbered-page-navigation-without-any-plu
 Paging Start -->
<div class="container">  
<div class="row"> 
<div class="col-xs-12 paging">
    <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        $args = array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'total' => $wp_query->max_num_pages,
            'current' => max( 1, get_query_var( 'paged') ),
            'show_all' => false,
            'end_size' => 3,
            'mid_size' => 2,
            'prev_next' => True,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
            'type' => 'list',
            );
        echo paginate_links($args);
    ?>
</div>
</div>
</div>
<!-- // Paging End -->
<?php
do_action( 'jbst_after_content_page' );
get_footer();
