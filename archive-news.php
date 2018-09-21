<?php
/*
Template Name: Новини
*/
?>

<?php

get_header();
wp_enqueue_style( 'news', get_template_directory_uri() . '/assets/css/news-style.css');
wp_enqueue_script( 'news', get_template_directory_uri() . '/assets/js/news-scripts.js', array(), false, true);

?>

    <main class="news">
        <div class="wrapper">
            <div class="section_name">
                Новини
            </div>
            <div class="line_right"></div>
            <div class="news_prew isDesktop">
                <div class="news_box clearfix">
                    <p>24 березня 2018 року</p>
                    <p class="news_name">Установлены перекрытия цокольного этажа</p>
                    <p>Перший будинок:<br>
                        Побудовано 26 поверхів, ведуться роботи на даху, скління на рівні 20-го поверху і кладка цегли на 25-26 поверхах. Також штукатурять МЗК і відбуваються фасадні роботи з утеплення будинку.
                    </p>
                    <a class="news_link" href="/news/">Читати</a>
                </div>
            </div>
            <div class="news_block flex">
                <?php
                global $post;




                $args = array(
                    'numberposts' => -1,
                    'post_type' => 'news',
                );
                $myposts = get_posts( $args );


                foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                <div class="news_slider_item news_slider_item_1" style="background: url('<?php the_field('news-archive-img') ?>');">
                    <figcaption>
                        <p><?php echo date('d.m.Y' , strtotime (get_field('news-date')))?></p>
                        <p class="bold"><?php the_title();?></p>
                        <a href="<?php echo get_permalink(); ?>">Читати</a>
                    </figcaption>
                </div>
<?
                }
                wp_reset_postdata();
                ?>

            </div>
            <form class="subscribe flex" id="mainSub"  onsubmit="ajax_form(this)" >
                <input type="email" name="email" value="" placeholder="Підписатися на новини і акції">
                <input type="submit" name="submit" value="Підписатися">
            </form>
<!--            <div class="pagination">-->
<!--                <ul class="pad__center">-->
<!--                    <li><a href="#" class="heavy">1</a></li>-->
<!--                    <li><a href="#" class="heavy">2</a></li>-->
<!--                    <li><a href="#" class="heavy">3</a></li>-->
<!--                    <li><a href="#" class="heavy">4</a></li>-->
<!--                    <li><a href="#" class="heavy">5</a></li>-->
<!--                </ul>-->
<!--            </div>-->

        </div>
    </main>

              <?php/*
                global $post;




                $args = array(
					'numberposts' => -1,
                    'post_type' => 'news',
                );
                $myposts = get_posts( $args );


                foreach( $myposts as $post ){ setup_postdata($post);


				?>
                     <a class="simple-ajax-popup" href="<?php echo get_permalink(); ?>">   <div class="previwe-box  modal-origin swiper-slide " data-post-id="<?php the_ID();?>" data-action="news_item">
                            <div class="previwe-img" style="background: url(<?php the_field('news-archive-img') ?>);"></div>
                            <a  class="description"><?php the_title();?></a>
                            <label class="date"><?php echo date('d.m.Y' , strtotime (get_field('news-date')))?></label>
                        </div><!-- swiper-slide -->
						</a>
                    <?php

                }
                wp_reset_postdata();
                */?>

<?php
 get_footer();?>
<script>
    function ajax_form(e) {
        event.preventDefault();
        var str = $("#"+e.id).serialize();
        var news_alert = "Вашу пошту додано ";

            console.log(e.id);
            $.ajax({
                method: "POST",
                url: "/wp-content/themes/smart_lebedyny/post.php",
                data: str
            })
                .done(function (msg) {
                    console.log(msg);
                    var allInputs = document.querySelectorAll('[type="email"]');
                    allInputs.forEach(function (input) {
                        input.value = '';
                    });
                    alert(msg);

                });
        }
</script>
