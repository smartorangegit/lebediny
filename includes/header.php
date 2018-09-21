<?
$locale = get_locale();
if($locale=='uk'|| $locale=='ua'){
    $requestU = $_SERVER['REQUEST_URI'];
    $locale = 'ua';
    $requestU = str_replace('/ua','',$_SERVER['REQUEST_URI']);
}
if($locale=='ru_RU'){
    $requestU = $_SERVER['REQUEST_URI'];
    $locale = 'ru';
    $requestU = str_replace('/ru','',$_SERVER['REQUEST_URI']);
}


$uaUri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/'.'ua'.$requestU;
$ruUri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/'.'ru'.$requestU;
?>
<div class="nav">
  <div class="wrapper flex">
    <div class="left_nav flex">
      <div id="menu" class="nav_item flex nav_menu cd-nav-trigger">
        <span style="margin-bottom:-1px;">Меню</span>
        <span class="menu_line menu_line_1"></span>
        <span class="menu_line menu_line_2"></span>
        <span class="menu_line menu_line_3"></span>
      </div>
      <div class="nav_item">
        <a href="/building/" class="webkam_item">
          <svg enable-background="new 0 0 370 370" viewBox="0 0 370 370" xmlns="http://www.w3.org/2000/svg" width="12" height="15" fill="#fdf4b2">
              <path d="m274.221 284.781c40.578-28.245 67.146-75.225 67.146-128.415 0-86.358-70.009-156.366-156.367-156.366-86.357 0-156.367 70.008-156.367 156.365 0 53.19 26.568 100.17 67.146 128.415l-37.202 38.376c-2.58 3.626-3.972 7.965-3.972 12.416v13.031c0 11.817 9.58 21.396 21.396 21.396h217.998c11.815 0 21.395-9.579 21.395-21.396v-13.031c0-4.451-1.392-8.79-3.972-12.416zm-89.221-201.398c40.309 0 72.983 32.676 72.983 72.982 0 40.307-32.674 72.983-72.983 72.983s-72.982-32.676-72.982-72.983c0-40.306 32.673-72.982 72.982-72.982zm-83.048 249.033 28.549-29.454c16.969 6.314 35.328 9.769 54.499 9.769s37.53-3.455 54.499-9.769l28.549 29.454z"/><path d="m185 201.689c25.033 0 45.322-20.291 45.322-45.324 0-16.152-8.456-30.32-21.177-38.349-.274 7.068-10.968 12.752-24.145 12.752-13.176 0-23.871-5.684-24.145-12.752-12.721 8.028-21.177 22.197-21.177 38.349 0 25.033 20.289 45.324 45.322 45.324z"/></svg>
          <span>WEB Camera</span>
        </a>
      </div>
      <a href="/special_offer/" class="nav_item border_link sim-button button13">
        <span>Последние акции</span>
      </a>
    </div>

    <div class="right_nav flex">
      <a id="callback" href="#" class="nav_item border_link button13">
        Обратный звонок
      </a>
      <div class="nav_item">
        <span class="number_tel">+38 044 299 44 22</span>
      </div>
      <div class="nav_item lang_select">
        <a <?if($locale=='ua'){echo 'class="active"';}?> href="<?=$uaUri?>">UA</a> |
        <a <?if($locale=='ru'){echo 'class="active"';}?> href="<?=$ruUri?>">RU</a>
      </div>
    </div>
    <a class="nav_logo" href="/">
      <img src="<?php echo get_template_directory_uri()?>/inc/img/letter_logo.svg" alt="ЖК Лебединий">
    </a>
  </div>
</div>

<!-- end header -->
<div id="cd-nav" class="cd-nav">
  <svg class="close_nav cd-nav-trigger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ffffff"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ffffff"></path></svg>

  <div class="menu__logo" style="pointer-events: none;">
    <img src="<?php echo get_template_directory_uri()?>/inc/img/letter_logo.svg" alt="ЖК Лебединый">
  </div>
  <div class="cd-navigation-wrapper">
    <div class="cd-half-block">
      <div class="half_block_one">
        <div class="section_name"> меню </div>
        <div class="line_right"> </div>
        <ul class="cd-primary-nav">
<!--          <li><a href="/">Главная</a></li>-->
<!--          <li><a href="/filter/">Выбор квартиры</a></li>-->
<!--          <li><a href="/location.php">Инфраструктура</a></li>-->
<!--          <li><a href="/news.php">Новости</a></li>-->
<!--          <li><a href="/building/">Ход строительства</a></li>-->
<!--          <li><a href="/developer/">Девелопер</a></li>-->
<!--          <li><a href="/akcii.php">Акции</a></li>-->
<!--          <li><a href="/contacts/">Контакты</a></li>-->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-left',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
        </ul>
      </div>
      <div class="menu__info">
        <div class="section_name"> контакти </div>
        <ul class="cd-primary-nav">
          <li class="bold">вул. Ревуцького, 40</li>
          <li class="bold">+38 044 299 45 89</li>
        </ul>
        <div class="social_links">
          <a href="https://www.facebook.com/lebediniy/">
            <svg enable-background="new 0 0 49.652 49.652" height="51.2" viewBox="0 0 49.652 49.652" width="51.2" xmlns="http://www.w3.org/2000/svg"><path d="m24.826 0c-13.689 0-24.826 11.137-24.826 24.826 0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826 0-13.689-11.136-24.826-24.826-24.826zm6.174 25.7h-4.039v14.396h-5.985s0-7.866 0-14.396h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939s-2.695 0-3.219 0-1.269.262-1.269 1.386v2.99h4.56z" fill="#ffffff"/></svg>
          </a>
          <a href="https://www.youtube.com/channel/UCi33ZMXHbwJl-V3gavVRQRg">
            <svg enable-background="new 0 0 97.75 97.75" height="51.2" viewBox="0 0 97.75 97.75" width="51.2" xmlns="http://www.w3.org/2000/svg"><g fill="#ffffff"><path d="m25.676 52.482h3.875v20.973h3.666v-20.973h3.947v-3.435h-11.488z"/><path d="m56.674 55.046c-1.212 0-2.343.662-3.406 1.972v-7.972h-3.295v24.409h3.295v-1.762c1.103 1.361 2.233 2.013 3.406 2.013 1.311 0 2.193-.69 2.633-2.044.221-.771.334-1.982.334-3.665v-7.242c0-1.722-.113-2.924-.334-3.655-.439-1.364-1.323-2.054-2.633-2.054zm-.33 13.209c0 1.644-.482 2.454-1.434 2.454-.541 0-1.092-.259-1.643-.811v-11.084c.551-.545 1.102-.803 1.643-.803.951 0 1.434.842 1.434 2.482z"/><path d="m43.824 69.167c-.731 1.033-1.422 1.542-2.084 1.542-.44 0-.691-.259-.771-.771-.03-.106-.03-.508-.03-1.28v-13.39h-3.296v14.379c0 1.285.111 2.153.291 2.705.331.922 1.063 1.354 2.123 1.354 1.213 0 2.457-.732 3.767-2.234v1.984h3.298v-18.188h-3.298z"/><path d="m46.653 38.466c1.073 0 1.588-.851 1.588-2.551v-7.731c0-1.701-.515-2.548-1.588-2.548-1.074 0-1.59.848-1.59 2.548v7.731c0 1.701.516 2.551 1.59 2.551z"/><path d="m48.875 0c-26.993 0-48.875 21.882-48.875 48.875s21.882 48.875 48.875 48.875 48.875-21.882 48.875-48.875-21.882-48.875-48.875-48.875zm5.436 22.86h3.321v13.532c0 .781 0 1.186.04 1.295.073.516.335.78.781.78.666 0 1.365-.516 2.104-1.559v-14.048h3.33v18.379h-3.33v-2.004c-1.326 1.52-2.59 2.257-3.805 2.257-1.072 0-1.812-.435-2.146-1.365-.184-.557-.295-1.436-.295-2.733zm-12.578 5.993c0-1.965.334-3.401 1.042-4.33.921-1.257 2.218-1.885 3.878-1.885 1.668 0 2.964.628 3.885 1.885.698.928 1.032 2.365 1.032 4.33v6.436c0 1.954-.334 3.403-1.032 4.322-.921 1.254-2.217 1.881-3.885 1.881-1.66 0-2.957-.627-3.878-1.881-.708-.919-1.042-2.369-1.042-4.322zm-8.906-12.277 2.622 9.685 2.519-9.685h3.735l-4.443 14.675v9.989h-3.692v-9.989c-.335-1.77-1.074-4.363-2.259-7.803-.778-2.289-1.589-4.585-2.367-6.872zm42.359 58.485c-.668 2.899-3.039 5.039-5.894 5.358-6.763.755-13.604.759-20.42.755-6.813.004-13.658 0-20.419-.755-2.855-.319-5.227-2.458-5.893-5.358-.951-4.129-.951-8.638-.951-12.89s.012-8.76.962-12.89c.667-2.9 3.037-5.04 5.892-5.358 6.762-.755 13.606-.759 20.421-.755 6.813-.004 13.657 0 20.419.755 2.855.319 5.227 2.458 5.896 5.358.948 4.13.942 8.638.942 12.89s-.004 8.761-.955 12.89z"/><path d="m67.17 55.046c-1.686 0-2.995.619-3.947 1.864-.699.92-1.018 2.342-1.018 4.285v6.371c0 1.933.357 3.365 1.059 4.276.951 1.242 2.264 1.863 3.988 1.863 1.721 0 3.072-.651 3.984-1.972.4-.584.66-1.245.77-1.975.031-.33.07-1.061.07-2.124v-.479h-3.361c0 1.32-.043 2.053-.072 2.232-.188.881-.662 1.321-1.473 1.321-1.132 0-1.686-.84-1.686-2.522v-3.226h6.592v-3.767c0-1.943-.329-3.365-1.02-4.285-.921-1.242-2.232-1.862-3.886-1.862zm1.612 7.172h-3.296v-1.683c0-1.682.553-2.523 1.654-2.523 1.09 0 1.642.842 1.642 2.523z"/></g></svg>
          </a>

        </div>

      </div>
    </div><!-- .cd-half-block -->
  </div> <!-- .cd-navigation-wrapper -->
</div> <!-- .cd-nav -->
<div class="overlay">
  <div class="modal_window">
    <svg class="close_modal_window" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#344162"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#344162"></path></svg>
    <p class="section_name">Обратный звонок</p>
    <form class="main-form" action="#" method="post">
      <input type="text" name="name" value="" placeholder="Ваше имя *">
      <input type="tel" name="tel" value="" placeholder="Телефон *">
      <input type="submit" name="" value="Перезвоните мне">

    </form>
  </div>
</div>
