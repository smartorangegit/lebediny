<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package travelinn
 */

get_header();

if ($post->post_type=="news")
{
	$date=get_field('news-date');
}
else
{
	$date=get_field('special_offer_date');
}
//print_r($post);
$img=get_the_post_thumbnail_url( $post->ID);
$od = $post->ID;
?>

<main class="news-item">
    <div class="wrapper flex">
        <div class="news_body">
					<div class="news-item-img"  style="background-image: url(<?php if($img){ echo $img;}else{ the_field('news-archive-img'); } ?>);" >

					</div>
            <p class="news_date"><?php echo date('d.m.Y' , strtotime (get_field('news-date')))?></p>
            <div class="section_name bold">
                <?=$post->post_title;?>
            </div>
            <div class="line_right"></div>
            <div class="news_text">
                <?=$post->post_content;?>


            </div>


        </div>
        <div class="other_news_body isDesktop">
            <div class="news_title upper">Вам также может быть интересно</div>

            <div class="other_news_slider">
                <?php
                global $post;
                $args = array(
                    'numberposts' => 4,
                    'post_type' => 'news',
                );
                $myposts = get_posts( $args );


                foreach( $myposts as $post ){ setup_postdata($post);
                    if($od==$post->ID){

                    }else {
                        ?>
                        <div class="news_slider_item news_slider_item_1"
                             style="background: url('<?php the_field('news-archive-img') ?>');">
                            <figcaption>
                                <p><?php echo date('d.m.Y', strtotime(get_field('news-date'))) ?></p>
                                <p class="bold"><?php the_title(); ?></p>
                                <a href="<?php echo get_permalink(); ?>">Читати</a>
                            </figcaption>
                        </div>
                        <?
                    }
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
    <div class="wrapper all_news">
        <div class=" upper">Последние новости</div>
        <div class="news_block flex">
            <?php
            global $post;
            $args = array(
                'numberposts' => 4,
                'post_type' => 'news',
            );
            $myposts = get_posts( $args );


            foreach( $myposts as $post ){ setup_postdata($post);
            if($od==$post->ID) {}
            else{
                ?>
                <div class="news_slider_item news_slider_item_1"
                     style="background: url('<?php the_field('news-archive-img') ?>');">
                    <figcaption>
                        <p><?php echo date('d.m.Y', strtotime(get_field('news-date'))) ?></p>
                        <p class="bold"><?php the_title(); ?></p>
                        <a href="<?php echo get_permalink(); ?>">Читати</a>
                    </figcaption>
                </div>
                <?
                }
            }
            wp_reset_postdata();
            ?>
        </div>

        <form class="subscribe flex" id="mainSub"  method="post">
            <input type="email" name="email" value="" placeholder="Підписатися на новини і акції">
            <input type="submit" name="submit" value="Підписатися">
        </form>
    </div>
</main>
<?/*
    <div id="about" class="main-screen">
        <div class="container">
            <div class="wrapper-text">
                <h3><?php the_title();?></h3>
				      <h4 class="subtitle"><?php  echo date('d.m.Y' , strtotime ($date))?></h4>


                <div class="text">  <?php echo $post->post_content; ?></div></div>

		<a href="" class="circle call-back btn">
          	  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
       		</a>
        </div>
		 <div class="m-social-box">
             <a class="m-social" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>" style="background: #3b5998"><img src="<?php echo get_template_directory_uri();?>/image/fb.png" alt=""></a>
            </div>

        <?php
            //circle_function();
        ?>

    </div>

<div itemscope itemtype="http://schema.org/Periodical" style="overflow: hidden; height:0px;">
  <h1 itemprop="name"><?php echo get_the_title( $post ) ?></h1>
  <p><?echo get_the_date('d-m-Y');?></p>
</div>
	<style>
	.m-social-box {
		top: auto;
		left: 0;
	}


@media screen and (max-width: 480px){
	.m-social-box {
		top: 70px;
		left: 45%;
	}
}
	</style>
*/?>
<?php get_footer();?>
