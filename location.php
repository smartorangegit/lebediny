<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ЖК Лебединий - Вибір за параметрами | Ревуцького 40</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  </head>
  <body>

    <?php include 'includes/header.php'; ?>
    <section class="location">
      <div class="wrapper flex">
        <div class="loc_left flex">
          <!-- <div class="flex"> -->
            <div class="seven_item">
              <p class="thin"><span class="number heavy">1</span>хв</p>
              <p>до м. Осокорки</p>
            </div>
            <div class="seven_item">
              <p class="thin"><span class="number heavy">5</span>хв</p>
              <p>до найближчого супермаркету</p>
            </div>
            <div class="seven_item">
              <p class="thin"><span class="number heavy">5</span>хв</p>
              <p>до найближчої школи</p>
            </div>
            <div class="seven_item">
              <p class="thin"><span class="number heavy">20</span>хв</p>
              <p>на авто до вул.Хрещатик</p>
            </div>
          <!-- </div> -->

        </div>
        <div class="loc_right">
          <div class="section_name">
            Розташування
          </div>
          <div class="line_left"></div>
          <p class="bold">вул. Ревуцького, 40</p>
        </div>
      </div>


      <div id="map" class="map-canvas">

      </div>
      <div class="wrapper">
        <ul class="location-menu">
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="all"><a href="javascript:void(0)">Всі об'єкти</a></li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="schools"><a href="javascript:void(0)"><div class="l-i schools"></div>Школи</a></li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="gardens"><a href="javascript:void(0)"><div class="l-i gardens"></div>Дитячі садочки</a></li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="medicine"><a href="javascript:void(0)"><div class="l-i medicine"></div>Медицина</a></li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="sport"><a href="javascript:void(0)"><div class="l-i sport"></div>Спорт комплекси</a></li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="shop"><a href="javascript:void(0)"><div class="l-i shop"></div>Магазини і ТЦ</a></li>
        </ul>
      </div>
    </section>
    <div class="pin_school">

    </div>


      <?php include 'includes/footer.php'; ?>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4&amp;language=uk&amp;ver=1.16"></script>
      <script type="text/javascript" src="/js/map.js"></script>
      <script id="marker-content-template" type="text/x-handlebars-template">
           <div class="custom-img" style="background-image: url({{{bgImg}}})"></div>
           <section class="custom-content">
               <h1 class="custom-header">
                   {{title}}
                   <small>{{subtitle}}</small>
               </h1>
               <div class="custom-body">{{{body}}}</div>
           </section>
       </script>
    </body>
    </html>
