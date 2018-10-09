<?/*
Template Name: Строительство
*/?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(1551));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);

?>
<?php get_header(); ?>
<main class="building">
    <div class="wrapper">
        <div class="section_name">
            WEB-камера
        </div>
        <div class="line_right"></div>
        <div class="webcam_box">
            <iframe class="iv-i" src="https://open.ivideon.com/embed/v2/?server=100-HQrunT5KaVo0qMcpKTK3h2&amp;camera=196608&amp;width=&amp;height=&amp;lang=ru" width="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>

    <div class="wrapper building_block">
        <div class="section_name">
            <?php _e('construction progress','smart_lebedyny'); ?>
        </div>
        <div class="line_left"></div>
    </div>

    <div class="wrapper building_descr_wrapper">
      <div class="section_name">Будинок 1 </div>
      <div class="building_info_slider">
        <div class="build_slider_item">
          <p class="bold">9 августа 2018 </p>
            <p>В процессе штукатурка МОП на уровне 25-го этажа, заливается стяжка пола на 25-м этаже.</p>
            <p>Выполнена установка дверей, продолжается монтаж лифтового оборудования (готово около 70% работ).</p>
            <p>Фасадные работы по утеплению дома выполнены на 70%.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">20 июля 2018</p>
          <p>Происходит штукатурка МОП на уровне 24-го этажа, установка дверей на 17-м этаже, заливают стяжку пола на 24-м этаже.</p>
          <p>Продолжается монтаж лифтового оборудования. Фасадные работы по утеплению дома выполнены на 45%, кровельные работы на 90% готовы.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">9 августа 2018 </p>
          <p>В процессе штукатурка МОП на уровне 25-го этажа, заливается стяжка пола на 25-м этаже.</p>
          <p>Выполнена установка дверей, продолжается монтаж лифтового оборудования (готово около 70% работ).</p>
          <p>Фасадные работы по утеплению дома выполнены на 70%.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">20 июля 2018</p>
          <p>Происходит штукатурка МОП на уровне 24-го этажа, установка дверей на 17-м этаже, заливают стяжку пола на 24-м этаже.</p>
          <p>Продолжается монтаж лифтового оборудования. Фасадные работы по утеплению дома выполнены на 45%, кровельные работы на 90% готовы.</p>
        </div>
      </div>

      <div class="section_name">Будинок 2 </div>
      <div class="building_info_slider">
        <div class="build_slider_item">
          <p class="bold">9 августа 2018 </p>
          <p><span class="bold">1 секция </span>- идет заливка вертикальных элементов 19-го этажа.</p>
          <p><span class="bold">2 секция </span>- заливают вертикали 18-го этажа, происходит кирпичная кладка на уровне 10-го этажа.</p>
          <p><span class="bold">3 секция </span>- построено 10 этажей, выполняется перекрытие с 11-м этажом.</p>
          <p><span class="bold">4 секция </span>- готово 13 этажей, происходит заливка вертикальных элементов 14-го этажа, кирпичная кладка на 4-м этаже.</p>
          <p><span class="bold">  5 секция</span> - готово 12 этажей, заливают перекрытие с 13-м этажом, идет кладка кирпича на уровне 4-го этажа.</p>
          <p>Продолжаются работы по строительству внешних инженерных сетей жилого комплекса. Работы по благоустройству набережной на этапе завершения.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">20 июля 2018</p>
          <p><span class="bold"> 1 секция </span>- идет заливка вертикальных элементов 17-го этажа, кладка кирпича на уровне 9-го этажа.</p>
          <p><span class="bold"> 2 секция </span>– заливаются вертикальные элементы 16-го этажа, происходят кладочные работы на 9-м этаже.</p>
          <p><span class="bold"> 3 секция </span>- построено 8 этажей.</p>
          <p><span class="bold"> 4 секция </span>- готово 11 этажей, заливаются вертикальные элементы 12-го этажа.</p>
          <p><span class="bold"> 5 секция </span>- построено 10 этажей, заливаются вертикальные элементы 11-го этажа. В процессе работы по строительству внешних инженерных сетей.</p>
          <p>Продолжаются работы по благоустройству набережной.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">9 августа 2018 </p>
          <p><span class="bold">1 секция </span>- идет заливка вертикальных элементов 19-го этажа.</p>
          <p><span class="bold">2 секция </span>- заливают вертикали 18-го этажа, происходит кирпичная кладка на уровне 10-го этажа.</p>
          <p><span class="bold">3 секция </span>- построено 10 этажей, выполняется перекрытие с 11-м этажом.</p>
          <p><span class="bold">4 секция </span>- готово 13 этажей, происходит заливка вертикальных элементов 14-го этажа, кирпичная кладка на 4-м этаже.</p>
          <p><span class="bold">  5 секция</span> - готово 12 этажей, заливают перекрытие с 13-м этажом, идет кладка кирпича на уровне 4-го этажа.</p>
          <p>Продолжаются работы по строительству внешних инженерных сетей жилого комплекса. Работы по благоустройству набережной на этапе завершения.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">20 июля 2018</p>
          <p><span class="bold"> 1 секция </span>- идет заливка вертикальных элементов 17-го этажа, кладка кирпича на уровне 9-го этажа.</p>
          <p><span class="bold"> 2 секция </span>– заливаются вертикальные элементы 16-го этажа, происходят кладочные работы на 9-м этаже.</p>
          <p><span class="bold"> 3 секция </span>- построено 8 этажей.</p>
          <p><span class="bold"> 4 секция </span>- готово 11 этажей, заливаются вертикальные элементы 12-го этажа.</p>
          <p><span class="bold"> 5 секция </span>- построено 10 этажей, заливаются вертикальные элементы 11-го этажа. В процессе работы по строительству внешних инженерных сетей.</p>
          <p>Продолжаются работы по благоустройству набережной.</p>
        </div>
      </div>

      <div class="section_name">Будинок 1 </div>

      <div class="progress_box">
        <div class="progress__item">
          <p>строительство</p>
          <svg class="progress_status" id="progress1" data-p="<?=$links[0]?>"></svg>
        </div>
        <div class="progress__item">
          <p>фасад</p>
          <svg class="progress_status" id="progress2" data-p="<?=$links[1]?>"></svg>
        </div>
        <div class="progress__item">
          <p>благоустройство</p>
          <svg class="progress_status" id="progress3" data-p="<?=$links[2]?>"></svg>
        </div>
        <div class="progress__item">
          <p>сети</p>
          <svg class="progress_status" id="progress4" data-p="<?=$links[3]?>"></svg>
        </div>

      </div>

      <div class="section_name">Будинок 2 </div>
      <div class="progress_box">
        <div class="progress__item">
          <p>строительство</p>
          <svg class="progress_status" id="progress5" data-p="<?=$links[4]?>"></svg>
        </div>
        <div class="progress__item">
          <p>фасад</p>
          <svg class="progress_status" id="progress6" data-p="<?=$links[5]?>"></svg>
        </div>
        <div class="progress__item">
          <p>благоустройство</p>
          <svg class="progress_status" id="progress7" data-p="<?=$links[6]?>"></svg>
        </div>
        <div class="progress__item">
          <p>сети</p>
          <svg class="progress_status" id="progress8" data-p="<?=$links[7]?>"></svg>
        </div>
      </div>

      <!-- <div class="section_name">Будинок 3 </div>
      <div class="building_info_slider">
        <div class="build_slider_item">
          <p class="bold">дата </p>
          <p> </p>
          </div>
        <div class="build_slider_item">
          <p class="bold">дата</p>
          <p>Продолжаются работы по благоустройству набережной.</p>
        </div>
        <div class="build_slider_item">
          <p class="bold">дата </p>
        </div>
        <div class="build_slider_item">
          <p class="bold">дата</p>
        </div>
      </div>
      <div class="progress_box">
        <div class="progress__item">
          <p>строительство</p>
          <svg class="progress_status" id="progress9" data-p="0"></svg>
        </div>
        <div class="progress__item">
          <p>фасад</p>
          <svg class="progress_status" id="progress10" data-p="0"></svg>
        </div>
        <div class="progress__item">
          <p>благоустройство</p>
          <svg class="progress_status" id="progress11" data-p="0"></svg>
        </div>
        <div class="progress__item">
          <p>сети</p>
          <svg class="progress_status" id="progress12" data-p="0"></svg>
        </div>
      </div> -->

    </div>


    <div class="building_slider">
        <?php
        $gallery_1 = get_field('gallery-3-loop', 145);

        if (is_array ($gallery_1)){
            $fro = 1;
            foreach ($gallery_1 as $item) {
//               print_r($item);
                $img_min_first =  wp_get_attachment_image_src( $item['img-array'][0]['img'] , 'gallery-img' );
//                print_r($img_min_first);
                $title = $item['loop-title'];
                $img_array = $item['img-array'];
                ?>
          <div class="building_item building_item__<?=$fro;?>" style="background-image: url('<?=$img_min_first[0]?>')">
                        <?php

                        if (is_array($img_array)) {
                            $dfb = 0;
                            foreach ($img_array as $img) {
//print_r($img_full);
                                $img_full = wp_get_attachment_image_src( $img['img'] , 'full' );
                                $img_min =  wp_get_attachment_image_src( $img['img'] , 'gallery-img' );
                                ?>
          <a class="fancybox"  data-fancybox="<?=$fro;?>" data-caption="<?php echo $title; ?>" href="<?php echo $img_full[0];?>"></a>
                                <?php
                                $dfb++;
                            }

                        }
                        ?>
                        <figcaption><?php echo $title; ?></figcaption>
                    </div>
                <?php
                $fro++;
            };
        };
        ?>

    </div>
    </section>
    <style media="screen">
    .bx-wrapper{padding-bottom: 40px;}
    .bx-wrapper .bx-controls-direction a {
    top: 0;  margin-top: 0;
    height: calc(100% - 40px); background: rgba(0,0,0,.55);
  }
  .bx-wrapper .bx-controls-direction a svg{cursor: pointer;}
    .bx-wrapper .bx-next {right: 0;}
    .bx-wrapper .bx-prev {left: 0;}
    .building_inner{
      align-items: flex-start;
      -webkit-align-items: flex-start;
      flex-wrap: wrap;
      -webkit-flex-wrap: wrap;
    }
    .building_descr{
      width: 50%;
      padding: 30px;
      line-height: 1.4;
    }
    .building_descr p{
      margin: 6px 0;
    }
    .build_slider_item {
      line-height: 1.5;

    }
    .building_descr_wrapper{
      max-width: 960px;
      margin-bottom: 60px;
    }
    .building_descr_wrapper .section_name{
      margin: 20px 0px 10px;
    }
    .building_descr_wrapper .bx-wrapper{
      padding: 20px 60px;
    }
    .building_descr_wrapper .bx-wrapper .bx-controls-direction a{
      background: none;
      height: 100%;
    }
    .progress_status{
      border: 1px solid;
    }
    .progress_box{
      display: flex;
      justify-content: space-between;
      display: -webkit-flex;
      -webkit-justify-content: space-between;
      text-align: center;
      line-height: 2;
    }
    .progress_box p{
      font-weight: bold;
    }
    @media only screen and (max-width: 768px) {
      .building_descr{
        width: 100%;
        padding: 12px;
      }
    }

    </style>

</main>
<?php get_footer();?>
