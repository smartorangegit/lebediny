<div class="footer">
  <div class="wrapper flex footer_inner_menu">
    <div class="footer_menu flex isDesktop">
      <div class="footer_menu_item">
        <p class="menu_subname"><?php _e('about project','smart_lebedyny'); ?></p>
          <!-- <ul class="menu_links">
            <li><a href="/developer/">Про забудовника </a></li>
            <li><a href="#">Веб-камера</a></li>
            <li><a href="/news/">Новини та акції</a></li>
            <li><a href="/building/">Хід будівництва</a></li>
            <li><a href="/contacts/">Контакти</a></li>
          </ul> -->
          <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-left',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => 'menu_links',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
      </div>
      <div class="footer_menu_item ">
        <p class="menu_subname"><?php _e('footer appartments','smart_lebedyny'); ?></p>
        <ul class="menu_links">
          <li><a href="/filter/"><?php _e('footer all appartments','smart_lebedyny'); ?></a></li>
<!--          <li><a href="/filter/">1---><?php //_e('rooms numbers','smart_lebedyny'); ?><!--</a></li>-->
<!--          <li><a href="/filter/">2---><?php //_e('rooms numbers','smart_lebedyny'); ?><!--</a></li>-->
<!--          <li><a href="/filter/">3---><?php //_e('rooms numbers','smart_lebedyny'); ?><!--</a></li>-->
          <li><a href="/special_offer/"><?php _e('terms of purchase','smart_lebedyny'); ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer_menu_item">
      <p class="menu_subname" style="color:#ffffff;"><?php _e('sales department','smart_lebedyny'); ?></p>
      <p class="footer_tel">+38 044 299 51 73</p>
      <a id="callback2" href="#" class="border_link button13"><?php _e('get a callback','smart_lebedyny'); ?></a>
    </div>
  </div>
  <div class="wrapper copyright flex">
    <div class="">
      © 2018 ЖК Лебединий<br class="isMobile"> +38(044) 299 51 73 <br class="isMobile"> <?php _e('revuckogo','smart_lebedyny'); ?>
    </div>
    <div class="social_links">
      <a href="https://www.facebook.com/lebediniy/">
        <svg enable-background="new 0 0 49.652 49.652" height="51.2" viewBox="0 0 49.652 49.652" width="51.2" xmlns="http://www.w3.org/2000/svg"><path d="m24.826 0c-13.689 0-24.826 11.137-24.826 24.826 0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826 0-13.689-11.136-24.826-24.826-24.826zm6.174 25.7h-4.039v14.396h-5.985s0-7.866 0-14.396h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939s-2.695 0-3.219 0-1.269.262-1.269 1.386v2.99h4.56z" fill="#ffffff"/></svg>
      </a>
      <a href="https://www.youtube.com/channel/UCi33ZMXHbwJl-V3gavVRQRg">
        <svg enable-background="new 0 0 97.75 97.75" height="51.2" viewBox="0 0 97.75 97.75" width="51.2" xmlns="http://www.w3.org/2000/svg"><g fill="#ffffff"><path d="m25.676 52.482h3.875v20.973h3.666v-20.973h3.947v-3.435h-11.488z"/><path d="m56.674 55.046c-1.212 0-2.343.662-3.406 1.972v-7.972h-3.295v24.409h3.295v-1.762c1.103 1.361 2.233 2.013 3.406 2.013 1.311 0 2.193-.69 2.633-2.044.221-.771.334-1.982.334-3.665v-7.242c0-1.722-.113-2.924-.334-3.655-.439-1.364-1.323-2.054-2.633-2.054zm-.33 13.209c0 1.644-.482 2.454-1.434 2.454-.541 0-1.092-.259-1.643-.811v-11.084c.551-.545 1.102-.803 1.643-.803.951 0 1.434.842 1.434 2.482z"/><path d="m43.824 69.167c-.731 1.033-1.422 1.542-2.084 1.542-.44 0-.691-.259-.771-.771-.03-.106-.03-.508-.03-1.28v-13.39h-3.296v14.379c0 1.285.111 2.153.291 2.705.331.922 1.063 1.354 2.123 1.354 1.213 0 2.457-.732 3.767-2.234v1.984h3.298v-18.188h-3.298z"/><path d="m46.653 38.466c1.073 0 1.588-.851 1.588-2.551v-7.731c0-1.701-.515-2.548-1.588-2.548-1.074 0-1.59.848-1.59 2.548v7.731c0 1.701.516 2.551 1.59 2.551z"/><path d="m48.875 0c-26.993 0-48.875 21.882-48.875 48.875s21.882 48.875 48.875 48.875 48.875-21.882 48.875-48.875-21.882-48.875-48.875-48.875zm5.436 22.86h3.321v13.532c0 .781 0 1.186.04 1.295.073.516.335.78.781.78.666 0 1.365-.516 2.104-1.559v-14.048h3.33v18.379h-3.33v-2.004c-1.326 1.52-2.59 2.257-3.805 2.257-1.072 0-1.812-.435-2.146-1.365-.184-.557-.295-1.436-.295-2.733zm-12.578 5.993c0-1.965.334-3.401 1.042-4.33.921-1.257 2.218-1.885 3.878-1.885 1.668 0 2.964.628 3.885 1.885.698.928 1.032 2.365 1.032 4.33v6.436c0 1.954-.334 3.403-1.032 4.322-.921 1.254-2.217 1.881-3.885 1.881-1.66 0-2.957-.627-3.878-1.881-.708-.919-1.042-2.369-1.042-4.322zm-8.906-12.277 2.622 9.685 2.519-9.685h3.735l-4.443 14.675v9.989h-3.692v-9.989c-.335-1.77-1.074-4.363-2.259-7.803-.778-2.289-1.589-4.585-2.367-6.872zm42.359 58.485c-.668 2.899-3.039 5.039-5.894 5.358-6.763.755-13.604.759-20.42.755-6.813.004-13.658 0-20.419-.755-2.855-.319-5.227-2.458-5.893-5.358-.951-4.129-.951-8.638-.951-12.89s.012-8.76.962-12.89c.667-2.9 3.037-5.04 5.892-5.358 6.762-.755 13.606-.759 20.421-.755 6.813-.004 13.657 0 20.419.755 2.855.319 5.227 2.458 5.896 5.358.948 4.13.942 8.638.942 12.89s-.004 8.761-.955 12.89z"/><path d="m67.17 55.046c-1.686 0-2.995.619-3.947 1.864-.699.92-1.018 2.342-1.018 4.285v6.371c0 1.933.357 3.365 1.059 4.276.951 1.242 2.264 1.863 3.988 1.863 1.721 0 3.072-.651 3.984-1.972.4-.584.66-1.245.77-1.975.031-.33.07-1.061.07-2.124v-.479h-3.361c0 1.32-.043 2.053-.072 2.232-.188.881-.662 1.321-1.473 1.321-1.132 0-1.686-.84-1.686-2.522v-3.226h6.592v-3.767c0-1.943-.329-3.365-1.02-4.285-.921-1.242-2.232-1.862-3.886-1.862zm1.612 7.172h-3.296v-1.683c0-1.682.553-2.523 1.654-2.523 1.09 0 1.642.842 1.642 2.523z"/></g></svg>
      </a>
      <a href="http://smartorange.com.ua/" class="studio_link">
        <span><?php _e('developed by','smart_lebedyny'); ?></span>
        <img src="<?php echo get_template_directory_uri()?>/inc//img/smart-orange.svg" alt="Smart Orange">
      </a>
    </div>
  </div>
</div>
<script src="<?php echo get_template_directory_uri()?>/inc/js/script.js"></script>
    <?if($post->ID==1547){?>
<script src="<?php echo get_template_directory_uri()?>/inc/js/ion.rangeSlider.js"></script>
<script src="<?php echo get_template_directory_uri()?>/inc/js/range.js"></script>
    <?}?>
    <?if($post->ID==136 || $post->ID==209 ){?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4&amp;language=uk&amp;ver=1.16"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/inc/js/map.js?ver=1.2"></script>
    <?}?>
    <?if($post->ID==1551){?>
<script src="<?php echo get_template_directory_uri()?>/inc/js/jquery.fancybox.js"></script>
    <?}?>


<!-- </body>
</html> -->
