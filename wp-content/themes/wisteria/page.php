<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wisteria
 */

get_header(); ?>

<?php
    $cat_name='';
    $url = $_SERVER["REQUEST_URI"];
    //echo $url.' <br> ';
    //echo sizeof($_SERVER["REQUEST_URI"]);
    for($i=15;$i<40;$i++){
       if($url[$i]!='/'){
            $cat_name.=$url[$i];
       }
       if($url[$i]=='/'){
        break;
       }

    }
   // $url = basename($url);
  //  echo  $cat_name;
?>

    <div class="container">
        <div class="row">

            <section id="primary" class="content-area <?php wisteria_layout_class( 'content' ); ?>">
                <main id="main" class="site-main" role="main">

                <?php 

            

                 ?>

                 <?php 
                               $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $the_query = new WP_Query(array(
                                    'posts_per_page' => 5,
                                    'category_name' => $cat_name, // this is the category SLUG
                                    'paged' => $paged,
                                ));

                            
                                if( $the_query->have_posts() ){
                                    $content = get_the_content();
                                    $x=0;
                                    while( $the_query->have_posts() ){
                                    $x++;
                                    $the_query->the_post();
                                    
                                 
                                    ?>
                                    
                                   <div class="cs_article">
                                    <div class="left">
                                   
                                    
                                    <?php
                            /* Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );
                        ?>
                                    
                                </div>
                               
                                                                
                            </div><!-- End cs_article -->
                                           
                                    
                            <?php } ?>


                            <div class="pagination">
                                <?php 
                                    echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $the_query->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => sprintf( '<i></i> %1$s', __( '', 'text-domain' ) ),
                                        'next_text'    => sprintf( '%1$s <i></i>', __( '', 'text-domain' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );
                                ?>
                            </div>
                            <?php wp_reset_postdata(); ?>

                         <?php   }else{
                                echo 'No post';
                            }
                                wp_reset_postdata();
                        ?>

                </main><!-- #main -->
            </section><!-- #primary -->

            <?php get_sidebar(); ?>

        </div><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>
