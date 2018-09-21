<?php
/*
Template Name: Головна
*/
get_header();
?>

    <main>
        <div class="header">
            <ul class="header_gallery isDesktop">

                <li class="gallery__item gitem__2" data-minute="5" data-title="<?php _e('minutes to subway','smart_lebedyny'); ?>" data-metro="<?php _e('charkivska','smart_lebedyny'); ?>"></li>
                <li class="gallery__item gitem__3" data-minute="20" data-title="<?php _e('minutes by car','smart_lebedyny'); ?>" data-metro="<?php _e('Chrechatik','smart_lebedyny'); ?>"></li>
                <li class="gallery__item gitem__1" data-minute="5" data-title="<?php _e('minutes till','smart_lebedyny'); ?>" data-metro="<?php _e('closest school','smart_lebedyny'); ?>"></li>

            </ul>
            <div class="header_box flex">
                <div class="header_box__left">
                    <div class="header_minutes isDesktop">
                        <div class="number heavy from_minute">5</div>
                        <div class="header_minutes_info">
                            <p class="from_title">хвилин до метро</p>
                            <p class="yellow from_metro">Харківська</p>
                        </div>
                    </div>
                    <div class="line_left isDesktop"></div>
                    <div class="box_controls isDesktop">
            <span class="slider_prev">
              <svg height="15.5" viewBox="0 0 63.585762 19.414" width="50.8" xmlns="http://www.w3.org/2000/svg"><path d="m64 31h-60.586l7.293-7.293-1.561-1.414-9.146 9v1.414l9.146 9 1.488-1.414-7.22-7.293h60.586z" fill="#fff" transform="matrix(.99352751 0 0 1 0 -22.293)"/></svg>
            </span>
                        <span class="slider_next">
              <svg height="15.5" viewBox="0 0 63.585762 19.414" width="50.8" xmlns="http://www.w3.org/2000/svg"><path d="m9.146 22.293-9.146 9v1.414l9.146 9 1.488-1.414-7.22-7.293h60.586v-2h-60.586l7.293-7.293z" fill="#fff" transform="matrix(-.99352751 0 0 1 63.585761 -22.293)"/></svg>
            </span>
                    </div>
                    <a href="/filter/" class="button animate_btn">
                        <span> <?php _e('choose appartment','smart_lebedyny'); ?> </span>
                        <svg height="10" viewBox="0 0 16 16" width="10" xmlns="http://www.w3.org/2000/svg"><path d="m2 1v14l12-7z" fill="#fdf4b2"/></svg>
                    </a>
                </div>
                <div class="header_box__right">
                    <div class="content_name">
                        <p class="p_animate" style="transition-delay:.0s;"><?php _e('when','smart_lebedyny'); ?></p>
                        <p class="p_animate" style="transition-delay:.2s;"><?php _e('everything','smart_lebedyny'); ?></p>
                        <p class="p_animate" style="transition-delay:.5s;"><?php _e('close','smart_lebedyny'); ?></p>
                    </div>
                </div>
            </div>
            <a href="/developer/" class="header_dev">
                <img src="<?php echo get_template_directory_uri()?>/inc/img/icons/perfect-w.svg" alt="Perfect Group">
                <span class="yellow"><?php _e('about developer','smart_lebedyny'); ?></span>
            </a>
        </div>

        <section class="one">
            <div class="wrapper clearfix">
                <div class="section_name">
                    <?php _e('why lebed','smart_lebedyny'); ?>
                </div>
                <div class="line_right"></div>

                <div class="one_inner flex">

                    <div class="one_item">
                        <div class="description">
                            <div class="img_name wow fadeInUp"><?php _e('window view','smart_lebedyny'); ?></div>
                            <div class="abstract"><?php _e('no trafic','smart_lebedyny'); ?></div>
                        </div>
                        <div class="one_img_box one_img_box__1"></div>
                    </div>

                    <div class="one_item">
                        <div class="description">
                            <div class="img_name wow fadeInUp"><?php _e('subway entrance','smart_lebedyny'); ?></div>
                            <div class="abstract"><?php _e('no trafic','smart_lebedyny'); ?></div>
                        </div>
                        <div class="one_img_box one_img_box__2"></div>
                    </div>

                    <div class="one_item">
                        <div class="description">
                            <div class="img_name wow fadeInUp"><?php _e('spaceious appartments','smart_lebedyny'); ?></div>
                            <div class="abstract"><?php _e('no trafic','smart_lebedyny'); ?></div>
                        </div>
                        <div class="one_img_box one_img_box__3"></div>
                    </div>

                </div>

                <a href="/filter/" class="button_arrow isDesktop">
                    <?php _e('details','smart_lebedyny'); ?>
                    <svg height="12" viewBox="0 0 63.585762 19.414" width="44" xmlns="http://www.w3.org/2000/svg" fill="#344162"><path d="m9.146 22.293-9.146 9v1.414l9.146 9 1.488-1.414-7.22-7.293h60.586v-2h-60.586l7.293-7.293z"  transform="matrix(-.99352751 0 0 1 63.585761 -22.293)"/></svg>
                </a>
            </div>
        </section>

        <section class="two">
            <div class="wrapper">
                <div class="section_name">
                    <?php _e('additional advantages','smart_lebedyny'); ?>
                </div>
                <div class="line_right"></div>
                <div class="two_inner flex">
                    <div class="two_item_1 wow fadeIn">
                        <svg class="round_svg" height="140" viewBox="0 0 100 100" width="140" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
                        <div class="round_text">
                            <?php _e('clear lake','smart_lebedyny'); ?>
                        </div>
                    </div>
                    <div class="two_item_2 wow fadeIn">
                        <div class="img_name wow fadeInUp" >
                            Природа
                        </div>
                        <figcaption class="fig_anime">
                            <p><?php _e('harmony','smart_lebedyny'); ?></p>
                            <p class="bold">
                                <?php _e('nature comfort','smart_lebedyny'); ?>
                            </p>
                        </figcaption>
                    </div>
                </div>
                <div class="two_inner flex">
                    <div class="two_item_3 ">
                        <div class="two_item_3__1 wow fadeIn">
                            <div class="two_img_box">
                                <div class="img_name wow fadeInUp">
                                    спорт
                                </div>
                                <figcaption class="fig_anime">
                                    <p><?php _e('health','smart_lebedyny'); ?></p>
                                    <p class="bold"><?php _e('train obstacles','smart_lebedyny'); ?></p>
                                </figcaption>
                            </div>
                            <div class="round_text">
                                <?php _e('sport running','smart_lebedyny'); ?>
                                <svg  class="round_svg wow fadeIn" height="50" viewBox="0 0 100 100" width="50" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
                            </div>
                        </div>
                        <div class="two_item_3__2 wow fadeIn">
                            <div class="round_text">
                                <svg  class="round_svg wow fadeIn" height="50" viewBox="0 0 100 100" width="50" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
                                <?php _e('pedestriants boulevard','smart_lebedyny'); ?>
                            </div>
                            <div class="two_img_box">
                                <div class="img_name wow fadeInUp">
                                    Бульвар
                                </div>
                                <figcaption class="fig_anime">
                                    <p><?php _e('calm','smart_lebedyny'); ?></p>
                                    <p class="bold"><p><?php _e('walks','smart_lebedyny'); ?></p></p>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                    <div class="two_item_4 wow fadeIn">
                        <div class="round_text">
                            <?php _e('personal pier','smart_lebedyny'); ?>
                            <svg  class="round_svg wow fadeIn" height="40" viewBox="0 0 100 100" width="40" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
                        </div>
                        <div class="two_img_box">
                            <div class="img_name wow fadeInUp">
                                <?php _e('pier','smart_lebedyny'); ?>
                            </div>
                            <figcaption class="fig_anime">
                                <p><?php _e('rest','smart_lebedyny'); ?></p>
                                <p class="bold"><?php _e('rest place','smart_lebedyny'); ?></p>
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="three flex">
            <div class="three_item__1">
                <div class="name_box">
                    <div class="section_name">
                        <?php _e('appartments','smart_lebedyny'); ?>
                    </div>
                    <div class="line_right"></div>
                </div>
            </div>
            <div class="three_item__2"></div>
            <figcaption class="fig_anime">
                <p>
                    <?php _e('optimal appartments','smart_lebedyny'); ?>
                </p>
                <a class="three_btn" href="/filter/">
                    <span><?php _e('choose appartment','smart_lebedyny'); ?></span>
                    <svg height="10" viewBox="0 0 16 16" width="10" xmlns="http://www.w3.org/2000/svg"><path d="m2 1v14l12-7z" fill="#344162"/></svg>
                </a>
            </figcaption>
        </section>
        <section class="four wow fadeIn">
            <div class="wrapper">
                <div class="four_info">
                    <svg  class="round_svg" height="130" viewBox="0 0 100 100" width="130" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>

                    <?php _e('about complex','smart_lebedyny'); ?>

                    <?php $section_array = get_field('char-info-box-arr', 314);
                        foreach ($section_array as $item): ?>

                            <p><span class="bold"><?php echo $item['title']; ?></span> <?php echo $item['text']; ?></p>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <section class="five wow fadeIn">
            <div class="wrapper">
                <div class="section_name">
                    <?php _e('news','smart_lebedyny'); ?>
                </div>
                <div class="line_left"></div>
                <div class="news_slider">
                    <?php
                    global $post;




                    $args = array(
                        'numberposts' => 4,
                        'post_type' => 'news',
                    );
                    $myposts = get_posts( $args );


                    foreach( $myposts as $post ){ setup_postdata($post);
                        ?>
                        <div class="news_slider_item news_slider_item_1" style="background: url(<?php the_field('news-archive-img') ?>);">
                            <figcaption>
                                <p><?php echo date('d.m.Y' , strtotime (get_field('news-date')))?></p>
                                <p class="bold"><?php the_title();?></p>
                                <a href="<?php echo get_permalink(); ?>"><?php _e('read','smart_lebedyny'); ?></a>
                            </figcaption>
                        </div>
                        <?
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <form class="subscribe flex" id="mainSub"  onsubmit="ajax_form(this)" >
                    <input type="email" name="email" value="" placeholder="<?php _e('subscribe news','smart_lebedyny'); ?>">
                    <input type="submit" name="submit" value="<?php _e('subscribe','smart_lebedyny'); ?>">
                </form>
            </div>
        </section>
        <section class="six">
            <div class="wrapper">
                <div class="section_name">
                    Галерея
                </div>
                <div class="flex">
                    <div class="line_right"></div>
                    <div class="six_link">
                        <a href="/building/#windowview" class="bold" id="callGallery"> <?php _e('view from window','smart_lebedyny'); ?> </a>
                        <span> | </span>
                        <a href="/building/" class="bold"><?php _e('view construction','smart_lebedyny'); ?> </a>
                    </div>
                </div>
            </div>
            <div class="six_wrapper" id="ajaxGallery">
                <div class="section_gallery">
                    <div class="section_gallery_item section_gallery_item__1"></div>
                    <div class="section_gallery_item section_gallery_item__2"></div>
                    <div class="section_gallery_item section_gallery_item__3"></div>
                    <div class="section_gallery_item section_gallery_item__4"></div>
                    <div class="section_gallery_item section_gallery_item__5"></div>
                    <div class="section_gallery_item section_gallery_item__6"></div>
                    <div class="section_gallery_item section_gallery_item__7"></div>
                    <div class="section_gallery_item section_gallery_item__8"></div>
                </div>
                <div class="wrapper wrapper_pager">
                    <div class="section_gallery_pager">
                        <a data-slide-index="0" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-1.jpg" /></a>
                        <a data-slide-index="1" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-2.jpg" /></a>
                        <a data-slide-index="2" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-3.jpg" /></a>
                        <a data-slide-index="3" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-4.jpg" /></a>
                        <a data-slide-index="4" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-5.jpg" /></a>
                        <a data-slide-index="5" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-6.jpg" /></a>
                        <a data-slide-index="6" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-7.jpg" /></a>
                        <a data-slide-index="7" href="" class="gal_min_item"><img src="<?php echo get_template_directory_uri()?>/inc/img/gallery/min/gallery-8.jpg" /></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="seven wow fadeIn">
            <div class="wrapper">
                <div class="section_name">
                    <?php _e('location','smart_lebedyny'); ?>
                </div>
                <div class="line_left"></div>
                <div class="seven_inner flex">
                    <div class="seven_info isDesktop">
                        <svg  class="round_svg" height="130" viewBox="0 0 100 100" width="130" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
                        <div class="round_text"><?php _e('good location','smart_lebedyny'); ?></div>
                        <p class="seven_text">
                            <?php _e('nature infrastructure','smart_lebedyny'); ?>
                        </p>
                        <a href="/infrastructure/" class="button_arrow">
                            <?php _e('details','smart_lebedyny'); ?>
                            <svg height="12" viewBox="0 0 63.585762 19.414" width="44" xmlns="http://www.w3.org/2000/svg" fill="#344162"><path d="m9.146 22.293-9.146 9v1.414l9.146 9 1.488-1.414-7.22-7.293h60.586v-2h-60.586l7.293-7.293z" transform="matrix(-.99352751 0 0 1 63.585761 -22.293)"></path></svg>
                        </a>
                    </div>
                    <div class="seven_img">
                        <div class="seven_box wow fadeInUp">
                            <?php _e('location time','smart_lebedyny'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();?>
