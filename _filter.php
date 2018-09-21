<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ЖК Лебединий - Вибір за параметрами | Ревуцького 40</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
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
            <img src="/img/plan-sekcii.jpg" alt="">
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
                <input type="text" class="range-init square-slider"  value="37/100" />
              </div>
            </div>
            <div class="range__item flex">
              <div class="filter_name">Поверх</div>
              <div class="range_input">
                <input type="text" class="range-init floor-slider"   value="2/25"/>
              </div>
            </div>
            <div class="range__item flex">
              <div class="filter_name">Кількість кімнат</div>
              <div class="range_input">
                <input type="text" class="range-init rooms-slider"  value="1/3"/>
              </div>
            </div>
            <div class="range__item flex">
              <div class="filter_name">Загальна вартість, грн</div>
              <div class="range_input">
                <input type="text" class="range-init price-slider"  value="770000/2000000"/>
              </div>
            </div>

            <div class="button__box flex">
              <!-- <span class="filter_rev isDesktop">За вашими параметрами знайдено <span class="number_flats">0</span> квартир</span> -->
              <input class="button" type="submit" value="Шукати">
              <a class="reset-button js-reset-filter-button" href="#" id="reset_button">Зкинути параметри</a>
            </div>
          </div>
        </div>
      </div>


          <div class="filter__info">
            <div class="wrapper flex">

            <div class="filter__info__quant">
              Знайдено квартир: <span id='count_flats'>123</span>
            </div>
            <ul class="filter_info__list">
              <li><a class="kim_link" href="#">1-кімнатні</a></li>
              <li><a class="kim_link" href="#">2-кімнатні</a></li>
              <li><a class="kim_link" href="#">3-кімнатні</a></li>
              <li><a class="kim_link" href="#">4-кімнатні</a></li>
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
                <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="3" data-rooms="3" data-square="96.70" data-price="1598509">
                  <td>2<a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>3</td>
                  <td>3</td>
                  <td>96.70</td>
                  <td>3-A</td>
                  <td>1 598 509</td>
               </tr>
               <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="4" data-rooms="2" data-square="96.70" data-price="1648989">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>5</td>
                        <td>4</td>
                        <td>3</td>
                        <td>96.70</td>
                        <td>3-A</td>
                      <td>1 648 989</td>

                 </tr>
                 <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="5" data-rooms="1" data-square="96.70" data-price="1648989">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>5</td>
                        <td>5</td>
                        <td>3</td>
                        <td>96.70</td>
                        <td>3-A</td>
                      <td>1 648 989</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="9" data-rooms="3" data-square="96.70" data-price="1817253">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>5</td>
                        <td>9</td>
                        <td>3</td>
                        <td>96.70</td>
                        <td>3-A</td>
                      <td>1 817 253</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="10" data-rooms="2" data-square="96.70" data-price="1817253">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>5</td>
                        <td>10</td>
                        <td>3</td>
                        <td>96.70</td>
                        <td>3-A</td>
                      <td>1 817 253</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png" data-bn="2" data-sn="5" data-floor="11" data-rooms="1" data-square="96.70" data-price="1817253">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec5_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>5</td>
                        <td>11</td>
                        <td>3</td>
                        <td>96.70</td>
                        <td>3-A</td>
                      <td>1 817 253</td>

                 </tr>

			<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="4" data-rooms="3" data-square="96.70" data-price="1648988">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>4</td>
                        <td>4</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 648 988</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="5" data-rooms="3" data-square="96.70" data-price="1648988">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>4</td>
                        <td>5</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 648 988</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="6" data-rooms="3" data-square="96.70" data-price="1648988">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>4</td>
                        <td>6</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 648 988</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="9" data-rooms="3" data-square="96.70" data-price="1817252">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>4</td>
                        <td>9</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 817 252</td>

                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="11" data-rooms="3" data-square="96.70" data-price="1817252">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>

                        <td>4</td>
                        <td>11</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 817 252</td>
                 </tr>

		<tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="12" data-rooms="3" data-square="96.70" data-price="1817252">
				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                </a></td>
                        <td>4</td>
                        <td>12</td>
                        <td>3</td>
                        <td>96.7</td>
                        <td>3-A</td>
                      <td>1 817 252</td>
                 </tr>
                 <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="12" data-rooms="2" data-square="96.70" data-price="1817252">
             				<td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                             </a></td>
                                     <td>4</td>
                                     <td>12</td>
                                     <td>3</td>
                                     <td>96.7</td>
                                     <td>3-A</td>
                                   <td>1 817 252</td>
                              </tr>
                              <tr data-href="" data-image="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png" data-bn="2" data-sn="4" data-floor="12" data-rooms="1" data-square="96.70" data-price="1817252">
                                  <td>2                <a class="maket"><img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png"><span class="mask"></span>
                                          </a></td>
                                                  <td>4</td>
                                                  <td>12</td>
                                                  <td>3</td>
                                                  <td>96.7</td>
                                                  <td>3-A</td>
                                                <td>1 817 252</td>
                                           </tr>
			</tbody>
		</table>

<div id="modal_flat" class="modal_flat">
  <div class="section_name">3 кімнати , тип 3А</div>
  <div class="modal_flat_inner flex">

  <svg class="modal_flat_close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="60" height="60"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#344162"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#344162"></path></svg>
  <div class="modal_flat_info">
    <table class="modal_table">
      <tr><td>Житлова площа:</td><td>55,62 м.кв</td></tr>
      <tr><td>Загальна площа:</td><td>75,3 м.кв</td></tr>
      <tr><td>Ціна за м2:</td><td>18632 грн</td></tr>
      <tr><td>Спальня:</td><td>18,3 м.кв</td></tr>
      <tr><td>Вітальня:</td><td>16,5 м.кв</td></tr>
      <tr><td>Кухня:</td><td>9,86 м.кв</td></tr>
      <tr><td>Санвузол:</td><td>3,89 м.кв</td></tr>
      <tr><td>Балкон:</td><td>1,95 м.кв</td></tr>
      <tr><td>Балкон:</td><td>2,20 м.кв</td></tr>
      <tr><td>Коридор:</td><td> 4,3 м.кв</td></tr>
      <tr><td>Комора:</td><td>1,1 м.кв</td></tr>
    </table>

  </div>
  <div class="modal_flat_img">
    <img alt="План квартири ЖК Лебединий" src="https://lebedinyiy.com.ua/wp-content/uploads/2017/dom2/sec4_floor2-21_flat3-A.png">
  </div>
  <div class="modal_flat_form">
    <a class="modal_link" href="#">Показати генплан</a>
    <a class="modal_link" href="#">Розрахувати вартість</a>
    <a class="modal_link" href="#">Завантажити PDF</a>
    <form class="modal_form" action="" method="post">
      <input type="text" name="" value="" placeholder="Ім&prime;я">
      <input type="tel" name="" value-"" placeholder="+380(__)___ __ __)">
      <input type="email" name="" value="" placeholder="E-mail">
      <input type="submit" name="" value="Залишити заявку">
    </form>
  </div>
</div>
</div>

  </div>
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




    <?php include 'includes/footer.php'; ?>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="js/range1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      $(".kim_link").click(function(e){
        e.preventDefault();
        var selectSize = parseInt($(this).html());
        filter(selectSize);
        var countFil = $('.filtered').length;
        $('#count_flats').html(countFil);
      });
      function filter(e) {
        var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
        $('.results tbody tr').hide()
        // .removeClass('filtered')
        .filter(function () {

          return regex.test($(this).data('rooms'));

        }).show()
        // .addClass('filtered')
        ;


      }
    });




    </script>

  </body>
  </html>
