<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>ЖК Лебединий - Контакти | Ревуцького 40</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">
    <link rel="stylesheet" href="css/style_old.css">
  </head>
  <body>

<main class="gallery_page">

  <div class="wrapper">
    <div class="section_name">
      Галерея
    </div>
    <div class="line_right"></div>

  </div>

  <div class="tabs">
    <!-- <div class="wrapper"> -->

     <ul class="tabs__name flex">
       <li class="bold"><span class="isDesktop">Дивитись</span> види з вікон</li>
       <li class="bold">Дивитись</span> візуалізації</li>
     </ul>
   <!-- </div> -->
       <div class="tabs__content">

         <div class="tabs__inner">

           <div class="section_gallery1">
             <div class="section_gallery_item section_gallery_item__1"></div>
             <div class="section_gallery_item section_gallery_item__2"></div>
             <div class="section_gallery_item section_gallery_item__3"></div>
             <div class="section_gallery_item section_gallery_item__4"></div>
             <div class="section_gallery_item section_gallery_item__5"></div>
             <div class="section_gallery_item section_gallery_item__6"></div>
             <div class="section_gallery_item section_gallery_item__7"></div>
             <div class="section_gallery_item section_gallery_item__8"></div>
             <div class="section_gallery_item section_gallery_item__9"></div>
           </div>
           <div class="wrapper wrapper_pager">
             <div class="gallery_pager1">
               <a data-slide-index="0" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-1.jpg" /></a>
               <a data-slide-index="1" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-2.jpg" /></a>
               <a data-slide-index="2" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-3.jpg" /></a>
               <a data-slide-index="3" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-4.jpg" /></a>
               <a data-slide-index="4" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-5.jpg" /></a>
               <a data-slide-index="5" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-6.jpg" /></a>
               <a data-slide-index="6" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-7.jpg" /></a>
               <a data-slide-index="7" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-8.jpg" /></a>
               <a data-slide-index="8" href="" class="gal_min_item"><img src="/img/views/view-1.jpg" /></a>

             </div>
           </div>

         </div>
         <div class="tabs__inner">
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
               <a data-slide-index="0" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-1.jpg" /></a>
               <a data-slide-index="1" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-2.jpg" /></a>
               <a data-slide-index="2" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-3.jpg" /></a>
               <a data-slide-index="3" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-4.jpg" /></a>
               <a data-slide-index="4" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-5.jpg" /></a>
               <a data-slide-index="5" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-6.jpg" /></a>
               <a data-slide-index="6" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-7.jpg" /></a>
               <a data-slide-index="7" href="" class="gal_min_item"><img src="/img/gallery/min/gallery-8.jpg" /></a>
             </div>
           </div>
         </div>

      </div>
    </div>
    <style media="screen">

      .gal_min_item{
        width: 120px;
        height: 80px;
      }
      .tabs__name{
        max-width: 1200px;
        width: 100%;
        padding: 0 10px;
        margin: 0 auto;
      }
      .tabs__inner{
        background: #fff;
      }
      .section_gallery_item{
        background-color: #fff;
      }
    </style>



</main>
<script src="js/script.js"></script>

<script type="text/javascript">
(function($){
  jQuery.fn.lightTabs = function(options){
    var createTabs = function(){
      tabs = this;
      i = 0;
      showPage = function(i){
        $(tabs).children("div").children("div").hide();
        $(tabs).children("div").children("div").eq(i).show();
        // $(tabs).children("ul").children("li").removeClass("active");
        // $(tabs).children("ul").children("li").eq(i).addClass("active");
      }
      showPage(0);

      $(tabs).children("ul").children("li").each(function(index, element){
        $(element).attr("data-page", i);
        i++;
      });

      $(tabs).children("ul").children("li").click(function(){
        showPage(parseInt($(this).attr("data-page")));
      });
    };
    return this.each(createTabs);
  };
})(jQuery);

$(document).ready(function(){
  $(".tabs").lightTabs();
});
</script>


</body>
</html>
