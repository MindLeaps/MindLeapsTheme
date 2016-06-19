<?php
/*
 * Template Name: Home Misty Copeland Old
 */

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">

<?php if ( ! $is_page_builder_used ) : ?>

	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">

<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( ! $is_page_builder_used ) : ?>

					<h1 class="main_title"><?php the_title(); ?></h1>
				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_featured_image';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
					$thumb = $thumbnail["thumb"];

					if ( 'on' === et_get_option( 'divi_page_thumbnails', 'false' ) && '' !== $thumb )
						print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height );
				?>

				<?php endif; ?>

					<div class="entry-content">

<style>
    .misty .et_pb_slider{background: #717171;}
    .misty .left-side{ width: 58%; display: inline-block; position: absolute; /*top: -6px;*/ background: url('http://mindleaps.org/wp-content/uploads/2015/10/mistycopeland_november12to19.png') no-repeat; background-size: contain; height:100%; }
    .misty .left-side img{ display: none; }
    .misty .right-side{ width: 40%; display: inline-block; vertical-align: top; float: right; }
    .misty .et_pb_social_media_follow li a.icon::before{ color: #717171; }
    .misty .et_pb_social_media_follow li a.icon:hover::before{ color: #999999; }
    .misty .et_pb_slide_description{ text-align: center; padding: 60px; font-family: Helvetica, Arial, sans-serif; text-shadow: none; }
    .misty h2{ font-weight: 500; }
    .misty .et_pb_social_media_follow{ width: 80px; margin: 10px auto; }
    
    @media screen and (max-width: 1400px) and (min-width: 1000px) {
        .misty .left-side{ background: none; min-height:600px; }
        .misty .left-side img{ display: block; height: 100%; }
    }
    
    @media screen and (max-width: 1000px) {
        .misty .left-side{ position: relative; background: none; }
        .misty .left-side img{ display: block; height: 100%; }
        .misty .right-side{ clear: both; }
        .misty .left-side, .misty .right-side{ width: 100%; }
    }
    
</style>
<div class="et_pb_section et_pb_fullwidth_section et_section_regular misty">
    <div class="et_pb_slider et_pb_slider_no_arrows et_pb_bg_layout_dark">
        <div class="et_pb_slides" style="position: relative;">
            <div class="left-side" style="">
                <img src="http://mindleaps.org/wp-content/uploads/2015/10/mistycopeland_november12to19.png" width="100%" />
            </div>
            <div class="right-side" style="">
                <div class="et_pb_slide_description" style="">
					<div class="et_pb_slide_content">
                        <img src="http://mindleaps.org/wp-content/uploads/2015/10/mistycopeland_mindleapslogo.png" />
                        <h2>MISTY COPELAND</h2>
                        <h3>Launches Girls Program in Africa</h3>
                        <h4>November 12 - 19, 2015</h4>
                    </div>
                    <p>Help up Educate Girls in Africa<br />
                        <a href="http://igg.me/at/mindleaps" class="et_pb_more_button">Donate to Kids</a>
                    </p>
                    <div style="margin-top: 30px;">
                        Follow Misty's Trip<br />
                        <ul class="et_pb_social_media_follow et_pb_module et_pb_bg_layout_light clearfix" style="">
                            <li class="et_pb_social_icon et_pb_social_network_link et-social-facebook">
				                <a href="https://www.facebook.com/mindleaps" target="_blank" class="icon circle" title="facebook" style="background-color: #FFFFFF;color:#717171"><span>facebook</span></a>
                            </li>
                            <li class="et_pb_social_icon et_pb_social_network_link et-social-instagram">
				                <a href="https://instagram.com/mindleaps/" target="_blank" class="icon circle" title="Instagram" style="background-color: #FFFFFF;color: #717171;"><span>Instagram</span></a>
                            </li>
                        </ul>
                    </div>
				</div>
            </div>
        </div>
    </div>
</div>              
                        
					<?php
						the_content();

						if ( ! $is_page_builder_used )
							wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

				<?php
					if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );
				?>

				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>

<?php if ( ! $is_page_builder_used ) : ?>

			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->

<?php endif; ?>

</div> <!-- #main-content -->

<?php get_footer(); ?>