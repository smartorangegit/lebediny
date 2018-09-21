<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ЖК Лебединий - Контакти | Ревуцького 40</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  </head>
  <body>

    <!-- <?php include 'includes/header.php'; ?> -->
    <main class="contacts">
      <div class="wrapper">
        <div class="section_name">Контакти</div>
        <div class="line_right"></div>
      <div class="contacts_info">
        <div class="section_name">
          <svg  class="round_svg" height="60" viewBox="0 0 100 100" width="60" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>
          <p class="regular">
            Завжди раді Вам в нашому відділі продажу за адресою:
          </p>
          <p class="demi">вул. Ревуцького, 40</p>
          <p class="regular">та за телефоном:</p>
          <p class="demi">+38 044 299 45 89</p>
        </div>

      </div>
      <div class="contacts_form">
        <div class="section_name">
          Або напішіть нам
        </div>
        <form class="main-form" action="#" method="post">
          <div class="form_inner flex">
            <svg  class="round_svg" height="130" viewBox="0 0 100 100" width="130" xmlns="http://www.w3.org/2000/svg"><ellipse cx="50" cy="50" fill="#fdf4b2" rx="50" ry="50" stroke-width=".3"/></svg>

            <div class="form_inputs">
              <div class="placeholder">І&prime;мя *</div>
              <input type="name" name="" value="">
              <div class="placeholder">Телефон *</div>
              <input type="tel" name="" value="">
              <div class="placeholder">E-mail *</div>
              <input type="email" name="" value="">
            </div>
            <div class="form_text">
              <div class="placeholder">Текст повідомлення</div>
              <textarea name="textarea" rows="8" cols="80"></textarea>
              <input type="submit" name="" value="Надіслати повідомлення">
            </div>
          </div>
          <p class="thin">Поля позначені зірочкою – обов’язкові для заповнення.</p>
        </form>
      </div>
    </div>

      <div class="map_wrapper">
        <div class="map-canvas"></div>
      </div>



    </main>
        <?php include 'includes/footer.php'; ?>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4&amp;language=uk&amp;ver=1.16"></script>
      <script type="text/javascript" src="/js/map.js"></script>

    </body>
    </html>
