<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ЖК Лебединий - Розташування | Ревуцького 40</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  </head>
  <body>

    <?php include 'includes/header.php'; ?>
    <main class="location">
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
      <div class="map_removeitem flex">

      <div class="map_wrapper wrapper">
        <div id="map" class="map-canvas"></div>
        <div class="wrapper isDesktop">
          <div class="map_box_top">
            Вдале поєднання природи з чудово розвиненою інфраструктурою
          </div>
          <div class="map_box_bottom section_name">Інфраструктура</div>
        </div>
      </div>


      <div class="wrapper">
        <div class="section_name isMobile">Інфраструктура</div>
        <div class="line_right isMobile"></div>
        <ul class="location-menu flex">
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="all">
            <span class="bold">Всі об'єкти</span>
          </li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="schools">
            <svg enable-background="new 0 0 288.147 288.147" height="50" viewBox="0 0 288.147 288.147" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m142.45 174.613c-4.645 0-11.495-.514-17.779-2.926l-50.271-19.366h-24.626v30.162c0 9.274 6.9 19.802 15.405 23.499l60.872 26.496c8.505 3.691 22.312 3.707 30.826.036l61.536-26.574c8.508-3.671 15.41-14.183 15.41-23.457v-30.162h-27.175l-44.547 18.78c-5.359 2.264-12.345 3.512-19.651 3.512z"/><path d="m6.475 112.944 121.222 46.709c8.661 3.329 22.603 3.112 31.152-.492l115.768-48.801v71.999l-7.151 23.866h20.682l-7.399-24.114v-74.661h-.208c4.997-3.449 3.832-7.747-3.567-10.393l-117.778-41.911c-8.74-3.117-22.859-2.985-31.545.277l-121.122 45.567c-8.686 3.268-8.707 8.622-.054 11.954z"/></svg>
            <span>Школи</span>
          </li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="gardens">
            <svg enable-background="new 0 0 517.167 517.167" height="50" viewBox="0 0 517.167 517.167" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m458.803 297.04c0-33.995-27.56-61.563-61.563-61.563-13.856 0-26.603 4.638-36.892 12.364-7.517-7.487-15.922-14.038-24.939-19.728 20.436-20.11 33.134-48.061 33.134-78.996 0-10.29-1.511-20.206-4.131-29.663 28.458-4.781 50.155-29.462 50.155-59.278 0-33.229-26.938-60.176-60.177-60.176-28.075 0-51.59 19.25-58.235 45.25-12.001-4.447-24.93-7-38.479-7-12.804 0-25.054 2.286-36.491 6.273-6.895-25.627-30.237-44.523-58.045-44.523-33.229 0-60.177 26.938-60.177 60.177 0 29.089 20.636 53.349 48.071 58.953-2.678 9.553-4.217 19.574-4.217 29.978 0 31.403 13.11 59.699 34.1 79.866-8.578 5.556-16.582 11.905-23.763 19.106-10.347-7.88-23.218-12.613-37.227-12.613-33.995 0-61.563 27.56-61.563 61.563 0 32.532 25.255 59.105 57.222 61.344.382 6.406 1.071 12.737 2.276 18.896-28.573 20.588-32.751 65.226-8.979 100.932 24.231 36.396 68.257 49.658 98.331 29.635 7.334-4.887 13.139-11.322 17.404-18.752 10.997 2.696 22.424 4.283 34.253 4.283 11.886 0 23.361-1.597 34.405-4.322 4.274 7.449 10.079 13.895 17.433 18.791 30.074 20.023 74.101 6.761 98.331-29.635 23.82-35.772 19.584-80.525-9.132-101.056 1.186-6.13 1.874-12.422 2.257-18.801 31.699-2.525 56.638-28.984 56.638-61.305zm-190.657 117.935-1.444-.229c-58.675-24.098-81.291-81.473-55.453-105.57 25.848-24.098 55.462 5.192 55.462 5.192h.211s29.605-29.29 55.453-5.192c25.838 24.096 4.457 81.701-54.229 105.799z"/></svg>
            <span>Дитячі садочки</span>
          </li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="medicine">
            <svg enable-background="new 0 0 228.081 228.081" viewBox="0 0 228.081 228.081" height="50" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m220.581 71.027h-63.527v-63.526c0-4.142-3.358-7.5-7.5-7.5h-71.028c-4.142 0-7.5 3.358-7.5 7.5v63.526h-63.526c-4.142 0-7.5 3.358-7.5 7.5v71.032c0 4.142 3.358 7.5 7.5 7.5h63.526v63.521c0 4.142 3.358 7.5 7.5 7.5h71.027c4.142 0 7.5-3.358 7.5-7.5v-63.521h63.527c4.142 0 7.5-3.358 7.5-7.5v-71.032c.001-4.142-3.357-7.5-7.499-7.5zm-7.5 71.032h-63.527c-4.142 0-7.5 3.358-7.5 7.5v63.521h-56.028v-63.521c0-4.142-3.358-7.5-7.5-7.5h-63.526v-56.032h63.526c4.142 0 7.5-3.358 7.5-7.5v-63.526h56.027v63.526c0 4.142 3.358 7.5 7.5 7.5h63.527v56.032z"/></svg>
            <span>Медицина</span>
          </li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="sport">
            <svg enable-background="new 0 0 500.043 500.043" height="50" viewBox="0 0 500.043 500.043" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m491.445 206.857c-4.752 0-8.605 4.857-8.605 10.834v64.672c0 5.977 3.854 10.824 8.615 10.824 4.752 0 8.588-4.848 8.588-10.824 0-16.562 0-48.081 0-64.682 0-5.967-3.846-10.824-8.598-10.824z"/><path d="m8.616 206.857c-4.752 0-8.616 4.857-8.616 10.834 0 16.601 0 48.071.01 64.653 0 5.977 3.854 10.824 8.606 10.844 4.753 0 8.597-4.848 8.597-10.824 0-16.572 0-48.081.01-64.682-.001-5.968-3.854-10.825-8.607-10.825z"/><path d="m114.568 108.812c-15.854 0-28.716 14.544-28.716 32.474 0 54.354.01 163.137.02 217.471 0 17.93 12.842 32.473 28.697 32.473s28.716-14.553 28.716-32.473c0-21.316 0-51.045 0-82.545h208.874v82.555c0 17.92 12.861 32.463 28.717 32.463 15.854 0 28.697-14.553 28.697-32.473 0-54.354 0-163.137 0-217.471 0-17.939-12.844-32.474-28.697-32.474-15.855 0-28.717 14.525-28.717 32.474v82.543c-44.178 0-192.321 0-208.874 0 0-31.508 0-61.229 0-82.553 0-17.938-12.852-32.464-28.717-32.464z"/><path d="m447.602 152.188c-.938 0-1.865 0-2.811 0-11.945 0-21.641 9.668-21.641 21.63v152.406c0 11.953 9.695 21.65 21.648 21.65h2.812c11.953 0 21.648-9.668 21.648-21.631 0-37.637 0-114.759-.008-152.407.01-11.961-9.695-21.648-21.648-21.648z"/><path d="m52.116 152.188c-.937 0-1.884 0-2.821 0-11.953 0-21.64 9.668-21.64 21.63v152.406c0 11.963 9.687 21.65 21.64 21.65h2.811c11.953 0 21.64-9.668 21.64-21.631 0-37.637 0-114.759 0-152.407.01-11.961-9.677-21.648-21.63-21.648z"/></svg>
            <span>Спорт комплекси</span>
          </li>
          <li onclick="filterMarkers($(this).attr('data-category'))" data-category="shop">
            <svg enable-background="new 0 0 446.843 446.843" height="50" viewBox="0 0 446.843 446.843" width="50" xmlns="http://www.w3.org/2000/svg"><path d="m444.09 93.103c-2.698-3.699-7.006-5.888-11.584-5.888h-322.586c-.625 0-1.249.038-1.85.119l-13.276-38.27c-1.376-3.958-4.406-7.113-8.3-8.646l-66.908-26.284c-7.374-2.887-15.695.735-18.591 8.1-2.891 7.369.73 15.695 8.1 18.591l60.768 23.872 74.381 214.399c-3.283 1.144-6.065 3.663-7.332 7.187l-21.506 59.739c-1.318 3.663-.775 7.733 1.468 10.916 2.24 3.183 5.883 5.078 9.773 5.078h11.044c-6.844 7.616-11.044 17.646-11.044 28.675 0 23.718 19.298 43.012 43.012 43.012s43.012-19.294 43.012-43.012c0-11.029-4.2-21.059-11.044-28.675h93.776c-6.847 7.616-11.048 17.646-11.048 28.675 0 23.718 19.294 43.012 43.013 43.012 23.718 0 43.012-19.294 43.012-43.012 0-11.029-4.2-21.059-11.043-28.675h13.433c6.599 0 11.947-5.349 11.947-11.948s-5.349-11.947-11.947-11.947h-229.123l13.319-36.996c1.72.724 3.578 1.152 5.523 1.152h210.278c6.234 0 11.751-4.027 13.65-9.959l59.739-186.387c1.401-4.364.632-9.129-2.066-12.828zm-274.431 316.704c-10.543 0-19.116-8.573-19.116-19.116s8.573-19.117 19.116-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116zm157.708 0c-10.543 0-19.117-8.573-19.117-19.116s8.574-19.117 19.117-19.117c10.542 0 19.116 8.574 19.116 19.117s-8.574 19.116-19.116 19.116zm75.153-261.658h-73.161v-32.259h83.499zm-21.067 65.712h-52.094v-37.038h63.967zm-146.882 0v-37.038h66.113v37.038zm66.113 28.677v31.064h-66.113v-31.064zm-161.569-65.715h66.784v37.038h-53.933zm95.456-28.674v-32.259h66.113v32.259zm-28.673-32.259v32.259h-76.734l-11.191-32.259zm-43.982 126.648h43.982v31.064h-33.206zm167.443 31.065v-31.064h42.909l-9.955 31.064z"/></svg>
          <span>Магазини і ТЦ</span>
        </li>
        </ul>
      </div>
    </div>
    </main>
        <?php include 'includes/footer.php'; ?>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4&amp;language=uk&amp;ver=1.16"></script>
      <script type="text/javascript" src="/js/map.js"></script>
      <!-- <script id="marker-content-template" type="text/x-handlebars-template">
           <div class="custom-img" style="background-image: url({{{bgImg}}})"></div>
           <section class="custom-content">
               <h1 class="custom-header">
                   {{title}}
                   <small>{{subtitle}}</small>
               </h1>
               <div class="custom-body">{{{body}}}</div>
           </section>
       </script> -->
    </body>
    </html>
