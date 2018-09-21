<?/*
Template Name: Фiльтр
*/?>
<?php get_header(); ?>
<main class="filter">
    <div class="wrapper">
        <div class="section_name">
            Вибір квартири
        </div>
        <div class="line_right"></div>
    </div>

    <div class="wrapper filter_inner flex">
        <div class="filter_render">
            <!-- <div class="wrapper"> -->
            <img src="<?php echo get_template_directory_uri()?>/inc/img/plan-sekcii.jpg" alt="">
            <!-- </div> -->
        </div>

        <div class="range_box">
            <div class="section_name range_name">
                Підбір за параметрами
            </div>
            <div class="flex range_inner">
                <div class="range__item flex">
                    <div class="filter_name">Загальна площа, м.кв</div>
                    <div class="range_input">
                        <!-- <input type="text" id="square"  value="44"/> -->
                        <!-- <input type="hidden" class="range-init" id="squareRange" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/> -->
                        <input type="text" class="range-init" id="squareRange" value="37/97">
                    </div>
                </div>
                <div class="range__item flex">
                    <div class="filter_name">Поверх</div>
                    <div class="range_input">
                        <!-- <input type="text" id="rFloor"  value="2"/> -->
                        <!-- <input type="hidden" class="range-init" id="floorRange" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/> -->
                        <input type="text" class="range-init" id="floorRange" value="2/25">
                    </div>
                </div>
                <div class="range__item flex">
                    <div class="filter_name">Кількість кімнат</div>
                    <div class="range_input">
                        <!-- <input type="text" id="rKimnat"  value="52"/> -->
                        <!-- <input type="hidden" class="range-init" id="kimnatRange" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/> -->
                        <input type="text" class="range-init" id="kimnatRange" value="1/3">

                    </div>
                </div>
                <div class="range__item flex">
                    <div class="filter_name">Загальна вартість, грн</div>
                    <div class="range_input">
                        <!-- <input type="text" id="price"  value="200000"/> -->
                        <!-- <input type="hidden" class="range-init" id="priceRange" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/> -->
                        <input type="text" class="range-init" id="priceRange" value="770000/2000000">
                    </div>
                </div>

                <div class="button__box flex">
                    <!-- <span class="filter_rev isDesktop">За вашими параметрами знайдено <span class="number_flats">0</span> квартир</span> -->
                    <input class="button button_search_js" type="submit" value="Шукати" >
                    <a class="reset-button js-reset-filter-button" href="#" id="reset_button">Зкинути параметри</a>
                </div>
            </div>
        </div>
    </div>


    <div class="filter__info">
        <div class="wrapper flex">

            <div class="filter__info__quant">
                Знайдено квартир: <span id="count_flats"></span>
            </div>
            <ul class="filter_info__list">
                <li><a class="kim_link" href="#">1-кімнатні</a></li>
                <li><a class="kim_link" href="#">2-кімнатні</a></li>
                <li><a class="kim_link" href="#">3-кімнатні</a></li>
                <!-- <li><a class="kim_link" href="#">4-кімнатні</a></li> -->
            </ul>
        </div>
    </div>

    <div class="result_box">
        <table class="results">
            <thead>
            <tr>
                <th>Будинок</th>
                <th>Секція</th>
                <th>Поверх</th>
                <th>Кімнат</th>
                <th>Площа м<sup>2</sup></th>
                <th>Тип</th>
                <th>Вартість, грн</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $Read = new   Parcesql();

            $data=$Read->openflatsAll();


            foreach($data['post'] as $build_rooms) {

                echo '<tr class="rows_c" data-href="'.$build_rooms['post_id'].'" 	data-image="/wp-content/uploads/2017/dom'.$build_rooms['tag-lay_houses'].'/'.$build_rooms["lay_name_img"].'.png"
				data-bn="'.$build_rooms['tag-lay_houses'].'"
				data-type="'.$build_rooms['lay_area'].'"
				data-sn="'.$build_rooms["tag-lay_section"].'"
				data-floor="'.$build_rooms["floors"]['floor'].'"
				data-rooms="'.$build_rooms["lay_rooms"].'"
				data-square="'.number_format($build_rooms["lay_area"], 2, '.', '').'"
				data-price="'.round($build_rooms["floors"]['price']).'" >';

                ?>

                <td><?php  echo($build_rooms["tag-lay_houses"]);?>
                    <a class="maket"><img alt="<?getSetText('План квартиры ЖК Лебединый', 'План квартири ЖК Лебединий')?>"
                                          src="/wp-content/uploads/2017/<?='dom'.$build_rooms['tag-lay_houses'].'/'.$build_rooms["lay_name_img"]?>.png" ><span class="mask"></span>
                </td>

                <td><?php  echo ($build_rooms["tag-lay_section"]);?></td>
                <td><?php  echo($build_rooms["floors"]['floor']);?></td>
                <td><?php  echo($build_rooms["lay_rooms"]);?></td>
                <td><?php  echo($build_rooms["lay_area"]);?></td>
                <td><?php  echo($build_rooms["lay_finish"]);?></td>
                <td><?php  echo(number_format((int)$build_rooms["floors"]['price'], 0, ',', ' '));?></td>

                </tr>

                <?php
            }
            ?>
            <!-- <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="3" data-rooms="3" data-square="96.70" data-price="1598509">
                <td>2<a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span></a></td>
                <td>5</td>
                <td>3</td>
                <td>3</td>
                <td>96.70</td>
                <td>3-A</td>
                <td>1 598 509</td>
            </tr> -->

            </tbody>
        </table>
<?//print_r($data);?>
        <?
        $id2 =  $_POST['url'];
        $Read2 = new   Parcesql();
        $data2 = $Read2->openflats(array('ID_floor'=>$id2, 'Additional_options'=>true));
        //print_r($data2);
        ?>
        <div id="target-room"></div>

        <div class="wrapper">
            <p class="filter_label">
                *Ціна та наявність може змінюватися. Актуальну інформацію про ціну та наявність квартир уточнюйте у відділі продажу
            </p>
            <p class="filter_label">
                *Ціни вказані за умови 100% оплати
            </p>
            <div class="section_name" style="padding-top: 36px;">
                Умови купівлі
            </div>
            <div class="line_right"></div>
            <ul class="umovi_info">
                <li>Розстрочка з першим внеском від 20% і терміном до 24 місяців</li>
                <li>Кредит від 5,9% річних. <a href="#" class="bold">Ознайомитися з інформацією про кредитування</a></li>
            </ul>
        </div>


</main>


<?php get_footer();?>
    <script>
        var r = $('.rows_c').length;
        //$('#count_flats').html(r);
        console.log(r);
        $('tr[data-href]').on('click', function(){
            url =  $(this).attr('data-href');
            data = "action=room_st_popup&url=" + url+"&floor="+$(this).attr('data-floor');

            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: data,
                success: function(response){

                    response = response.substring(0, response.length - 1);
//                    $('.pop-info-box').css('display', 'block');
//                    alert( $('.pop-info-box').length);


                    $('.pop-info-box').css('display','block');
                    $('.pop-info-box').html(response).fadeIn();


                    $('#target-room').html(response).fadeIn();
                    $('.modal_flat').fadeIn();

                    $('.close-popup.room_st_popup').on('click',function(){
                        $('.pop-info-box').fadeOut();
                    });
                    $('.close-popup.little').fadeIn();
                    console.log(response);


                }
            });
        });

        $(".kim_link").click(function(e){
          e.preventDefault();


            var selectSize = parseInt($(this).html());
            filter(selectSize);

            // var countFlats = $('.results tr').length;
            // console.log(countFlats);
            // $('#count_flats').html( countFlats );

          });
          function filter(e) {
              var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
                  $('.results tbody tr').hide().filter(function () {
                  return regex.test($(this).data('rooms'))
              }).show();

          }
    </script>
<style>
/* rows_c */
    #target-room{
        width: 100%;
        max-width: 1180px;
        padding: 20px;
        background-color: #fff;
        position: absolute;
        z-index: 2;
        top: 36%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
    }
    .onRanger .rows_c:not(.filtered){
      display: none!important;
    }
    .onRanger .rows_c.filtered{
      display: table-row;
      color: #666;
    }
    .onRanger table.results .filtered:nth-child(even){
      background: #ebebeb!important;
      color: #666;
    }
    .onRanger table.results .filtered:nth-child(odd){
      background: white!important;
    }
</style>
