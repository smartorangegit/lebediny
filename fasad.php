<?php
/*
Template Name: Фасад
*/
get_header();
wp_enqueue_style( 'main',  get_template_directory_uri() . "/assets/css/main.css?v=1");
wp_enqueue_style( 'floor-style',  get_template_directory_uri() . "/assets/css/floor-style.css");
wp_enqueue_style( 'plan-style', get_template_directory_uri() . '/assets/css/plan-style.css');
wp_enqueue_style( 'new-popups-file',  get_template_directory_uri() . "/assets/css/new-popups-file.css");



//wp_enqueue_script('vendor', get_template_directory_uri() . '/assets/js/vendor.js'); 
wp_enqueue_script('jquery_maphilight_min', get_template_directory_uri() . '/assets/js/jquery.maphilight.min.js');
wp_dequeue_script('popup');
wp_enqueue_script('fasad-popup', get_template_directory_uri() . '/assets/js/fasad-popup.js');

?>

<div id="preloader"></div>
<script>
    
                $('#preloader').css('background','#001010 url("/wp-content/themes/lebedyny/image/<?php if ( qtrans_getLanguage() == 'ru') { echo 'logo-1.png';} else {echo 'logo-1-ua.png';}?>") no-repeat center center');
</script>

<style>
    span{
        color: #25AEF3;
    }
    .ui-tooltip {
    background: #006241;
    color: white;
    border: 0!important;
    padding: 0;
    opacity: 1;
}
.ui-tooltip-content {
    position: relative;
    padding: 6px 10px;
    border:0;
}
.ui-tooltip-content::after {
    content: '';
    position: absolute;
    border-style: solid;
    display: block;
    width: 0;
    border:0;
}
        .ui-tooltip-content::after {
            border-color: transparent;
/*            border-width: 10px 10px 10px 0;*/
        }
    </style>

<?php  //$all_data = get_all_rooms_information();?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
  $(window).load(function() {
    setTimeout(function() {
      $('#preloader').fadeOut('slow', function() {});
    }, 400);

  });
});
</script>
<div id="new-popup-style" class="fasad-page">

<div class="container general-page-container">
	<div class="building-container">

<!--
    <a class="close-popup-floor plan-back" href="https://lebedyny.pingui.mobi/section-location"  style="display: none;">
        <?php //if ( qtrans_getLanguage() == 'ua' ) { ?> Повернутись назад<?php //} else { ?>        Вернуться назад      <?php //} ?></a>-->
        <?php $map_img_data =  wp_get_attachment_image_src(get_post_thumbnail_id (), 'full' ); ?>
		<img class='map' src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?getSetText('Дом ЖК Лебедидый', 'Будинок ЖК Лебединий')?>" data-width="<?php echo $map_img_data[1];?>" data-height="<?php echo $map_img_data[2];?>" usemap="#map" /> <!-- тут треба додати можливість змінювати картинку фасаду -->
		<map name="map" id="map">
            <?php
            $section_array = get_field('section_floor_array');
			$section_array2 = get_field('section_floor_array',905);
//echo '<pre>'; print_r($section_array2); echo '</pre>';
             if(is_array($section_array)) {

              foreach ($section_array as $item) {
                  $str4 = file_get_contents(get_template_directory_uri().'/json/rooms_count_by_section_and_floor_'.get_field('house_number').'_'.get_field('section_number').'_'.$item['floor'].'.json');
        $rooms_data = json_decode($str4, true);

//                  $rooms_data = get_rooms_count_by_section_and_floor(get_field('house_number'), get_field('section_number'), $item['floor']);
               ?>

            <area data-popup="genplan-section-<?php echo($item['floor']); ?>"
			      data-maphilight='{"stroke": false, "fillColor" : "25AEF3", "fillOpacity": 0.7}'
			      section_id=""
			      alt=""
			      title="<?php if ( qtrans_getLanguage() == 'ru') { echo 'Этаж';} else {echo 'Поверх';}?> <?php echo $item['floor'];?>" shape="poly"
				  data-floor="<?php echo $item['floor'];?>"
                  data-free-1="<?php echo $rooms_data['free_1'];?>"
                  data-all-1="<?php echo $rooms_data['all_1'];?>"
                  data-free-2="<?php echo $rooms_data['free_2'];?>"
                  data-all-2="<?php echo $rooms_data['all_2'];?>"
                  data-free-3="<?php echo $rooms_data['free_3'];?>"
                  data-all-3="<?php echo $rooms_data['all_3'];?>"
                  data-section = "<?php echo get_field('section_number');?>"
                  data-building = "<?php echo get_field('house_number');?>"
                  data-url = "<?php echo $item['floor_url'];?>"
                  href="javascript:void(0)"
			      coords="<?php echo($item['coordinate']); ?>"/>
             <?php
              }
			  
                }
				
				if(is_array($section_array2)) {

              foreach ($section_array2 as $item) {
                  $str4 = file_get_contents(get_template_directory_uri().'/json/rooms_count_by_section_and_floor_'.get_field('house_number').'_'.get_field('section_number').'_'.$item['floor'].'.json');
        $rooms_data = json_decode($str4, true);

//                  $rooms_data = get_rooms_count_by_section_and_floor(get_field('house_number'), get_field('section_number'), $item['floor']);
               ?>

            <area data-popup="genplan-section-<?php echo($item['floor']); ?>"
			      data-maphilight='{"stroke": false, "fillColor" : "25AEF3", "fillOpacity": 0.7}'
			      section_id=""
			      alt=""
			      title="<?php if ( qtrans_getLanguage() == 'ru') { echo 'Этаж';} else {echo 'Поверх';}?> <?php echo $item['floor'];?>" shape="poly"
				  data-floor="<?php echo $item['floor'];?>"
                  data-free-1="<?php echo $rooms_data['free_1'];?>"
                  data-all-1="<?php echo $rooms_data['all_1'];?>"
                  data-free-2="<?php echo $rooms_data['free_2'];?>"
                  data-all-2="<?php echo $rooms_data['all_2'];?>"
                  data-free-3="<?php echo $rooms_data['free_3'];?>"
                  data-all-3="<?php echo $rooms_data['all_3'];?>"
                  data-section = "<?php echo get_field('section_number');?>"
                  data-building = "<?php echo get_field('house_number');?>"
                  data-url = "<?php echo $item['floor_url'];?>"
                  href="javascript:void(0)"
			      coords="<?php echo($item['coordinate']); ?>"/>
             <?php
              }
			  
                }
				?>

				
				</map>



	</div>
    
    <?php 
     $str5 = file_get_contents(get_template_directory_uri().'/json/rooms_count_by_section_and_floor_'.get_field('house_number').'_'.get_field('section_number').'_2.json');
        $rooms_data_first = json_decode($str5, true);
//    $rooms_data_first = get_rooms_count_by_section_and_floor(get_field('house_number'), get_field('section_number'), 2);
    ?>
    <div class="general-left main" id="general-left-floor">
			<div class="general-left-header">
				<span class="big">2</span>
				<h3><?php if ( qtrans_getLanguage() == 'ru') { echo 'Этаж';} else {echo 'Поверх';}?></h3>
				<p><?php if ( qtrans_getLanguage() == 'ru') { echo 'Дом №1';} else {echo 'Будинок №1';}?></p>
			</div>			
			<div class="general-left-floor-info">
				<p class="info-txt"><?php if ( qtrans_getLanguage() == 'ru') { echo 'Нажмите на этаж, чтобы посмотреть планирование и параметры';} else {echo 'Натисніть на поверх, щоб подивитися планування і параметри';}?></p>
				<hr>

				<p class="table-title"><?php if ( qtrans_getLanguage() == 'ru') { echo 'Кол-во квартир:<span>в общем</span><span>/свободные</span>';} else {echo 'Кі-сть квартир: <span> всього</span> <span> / вільні </span>';}?></p>
				<table>
					<tbody>
						<tr style="display:block">
							<td><img src="<?php echo get_template_directory_uri().'/image/';?>one-room.png" alt=""><?php if ( qtrans_getLanguage() == 'ru') { echo '1-Комнатная:';} else {echo '1-Кімнатна:';}?></td><td id="all_rooms_1"><?php echo $rooms_data_first['all_1'];?></td><td id="free_rooms_1"><?php echo $rooms_data_first['free_1'];?></td>
						</tr>
						<tr  style="display:block">
							<td><img src="<?php echo get_template_directory_uri().'/image/';?>two-room.png" alt=""><?php if ( qtrans_getLanguage() == 'ru') { echo '2-Комнатная:';} else {echo '2-Кімнатна:';}?></td><td id="all_rooms_2"><?php echo $rooms_data_first['all_2'];?></td><td id="free_rooms_2"><?php echo $rooms_data_first['free_2'];?></td>
						</tr>
						<tr  style="display:block">
							<td><img src="<?php echo get_template_directory_uri().'/image/';?>three-room.png" alt=""><?php if ( qtrans_getLanguage() == 'ru') { echo '3-Комнатная:';} else {echo '3-Кімнатна:';}?></td><td id="all_rooms_3"><?php echo $rooms_data_first['all_3'];?></td><td id="free_rooms_3"><?php echo $rooms_data_first['free_3'];?></td>
						</tr>
					</tbody>
				</table>
		  </div>
		</div>
    
<!--
    <div class="general-right" id="general-right-floor" style="z-index:100; left:0px; top:400px;">
		<div class="general-right-top">
			<h2 class="general-right-title"><span class="big">1</span> <?php //if ( qtrans_getLanguage() == 'ru') { echo 'Этаж';} else {echo 'Поверх';}?></h2>
		</div>
		<div class="general-right-floor-info">
			<table>
				<tr class="green">
					<td><?php //if ( qtrans_getLanguage() == 'ru') { echo 'Количество квартир:';} else {echo 'Кількість квартир:';}?></td><td id="all_rooms">8</td>
				</tr>
				<tr class="green">
					<td ><?php //if ( qtrans_getLanguage() == 'ru') { echo 'Свободных квартир:';} else {echo 'Вільних квартир:';}?></td><td id="free_rooms">8</td>
				</tr>
			</table>
            </div>

	</div>
-->

	<script>
        $(document).ready(function(){
            $('.map').maphilight();
        });
        
        $('.building-container #map area').hover(
                    function(){
                        
                        floor = $(this).attr('data-floor');
//                        section = $(this).attr('data-section');
                        building = $(this).attr('data-building');
                        all = $(this).attr('data-all');
                        free = $(this).attr('data-free');
                        all_1 = $(this).attr('data-all-1');
                        free_1 = $(this).attr('data-free-1');
                        all_2 = $(this).attr('data-all-2');
                        free_2 = $(this).attr('data-free-2');
                        all_3 = $(this).attr('data-all-3');
                        free_3 = $(this).attr('data-free-3');
                            
                        $('.general-left-header .big').html(floor);
                        var st = '<?php if ( qtrans_getLanguage() == 'ru') { echo 'Дом №';} else {echo 'Будинок №';}?>'+building;
                        $('.general-left-header p').html(st);
                        $('#all_rooms_1').html(all_1);
                        $('#free_rooms_1').html(free_1);
                        $('#all_rooms_2').html(all_2);
                        $('#free_rooms_2').html(free_2);
                        $('#all_rooms_3').html(all_3);
                        $('#free_rooms_3').html(free_3);
                        
                        if(floor ==1){
                            var head = "<?php if ( qtrans_getLanguage() == 'ru') { echo 'Кол-во коммерческих помещений:<span>в общем</span><span>/свободные</span>';} else {echo 'Кі-сть комерційних приміщень: <span> всього</span> <span> / вільні </span>';}?>";
                            $('.general-left-floor-info .table-title').html(head);
                            
                            $('.general-left-floor-info tbody tr:first-child td:first-child').html("<img src='<?php echo get_template_directory_uri().'/image/';?>one-room.png' alt=''><?php if ( qtrans_getLanguage() == 'ru') { echo 'Помещение:';} else {echo 'Приміщення:';}?>");
                            $('#all_rooms_1').html(all);
                            $('#free_rooms_1').html(free);
                            
                            $('.general-left-floor-info tbody tr').css('display', 'none');
                             $('.general-left-floor-info tbody tr:first-child').css('display', 'block');
                            
                        }
                        else{
                            var head = "<?php if ( qtrans_getLanguage() == 'ru') { echo 'Кол-во квартир:<span>в общем</span><span>/свободные</span>';} else {echo 'Кі-сть квартир: <span> всього</span> <span> / вільні </span>';}?>";
                            $('.general-left-floor-info .table-title').html(head);
                            $('.general-left-floor-info tbody tr:first-child td:first-child').html("<img src='<?php echo get_template_directory_uri().'/image/';?>one-room.png' alt=''><?php if ( qtrans_getLanguage() == 'ru') { echo '1-Комнатная:';} else {echo '1-Кімнатна:';}?>");
                            $('.general-left-floor-info tbody tr').css('display', 'block');
                        }
                    });
	</script>
    
    <script>

        header_height = $('header').height() + $('nav .sub-menu').height();
        footer_height = $('footer').height();
        active_zone = $( window ).height() - header_height - footer_height;
        img_height = Number($('img.map').attr('data-height'));
        img_height_modify = img_height/ 625;
        zoom = active_zone / img_height;
        zoom = zoom * img_height_modify;
        top_padding = header_height / zoom;
        var zh = ($( window ).height()-50-80)/624 + 0.25;
        var zw = ($( window ).width())/1150;
        if(zh>zw){var z = zh;}else{var z = zw;}

//        alert(z);
        if ($(window).width() > 1024) {
            $('.building-container').css('zoom',z);
        }


//        $('.building-container').css('margin-top','12px');
//         $('body').css('background-image','url("https://lebedyny.pingui.mobi/wp-content/uploads/2017/06/select-blur.jpg")');
//          $('body').css('background-size','contain');


        /*  $('#map area').tooltip({
                track: true,
                position: { my: "left+30", at: "left" }
            });
          $(document).ready(function(){

          });*/

    </script>
    
    <script>
        var floor = 2;
     if($( window ).width() < 1025){

         $('.building-container').css('display','none');
         $('.general-page-container .general-left').css('display','none');
         $('.close-popup-floor .little-floor').css('display','none!important');

         var map = $( '#map area[data-floor='+floor+']' );
          url = map.attr('data-url');
          current_building = map.attr('data-building');
         current_section = map.attr('data-section');
        current_floor = map.attr('data-floor');
//         console.log(url+' '+current_section+' '+current_floor);
//         $( '#map area[data-floor='+floor+']' ).click();
         data = "action=floor_popup&url=" + url +"&current_building="+ current_building + "&current_section="+ current_section + "&current_floor=" + current_floor;
//        data = "action=floor_popup&url=" + url;
            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: data,
                success: function(response){
                    response = response.substring(0, response.length - 1);
                    $('.pop-info-box-floor').html(response).fadeIn();
//                    $('#map-floor').maphilight();
//                    popup_items_center_floor ();
//                    $('.map-floor').maphilight();
//                    $('.close-popup-floor.little-floor').fadeIn();
                    $('.close-popup-floor').on('click',function(){
                        $('.pop-info-box-floor').fadeOut();
                        $('.close-popup-floor.little-floor').fadeOut();
                    });
                }
            });
             
        
//         if ( $( '#map area[data-floor='+floor+']' ).length ) {
//         alert('11111');
//         }
//         var map = $('#map area[data-floor='+floor+']');
//         var url = map[1].attt('data-url');
//         alert('#map area[data-floor='+floor+']');
//         map[0].click();
//         if($('#map area[data-floor='+floor+']')){alert('find');}
     }
    </script>

<script>



    function func() {
      $('.building-container div:first-child').css('width','1150px');
        $('.building-container div:first-child').css('height','625px');
        $('.building-container div:first-child').attr('height','625px');
//        alert($('.building-container').length);
//
//        $('.building-container div canvas:first-child').css('width','1150px');
//        $('.building-container div canvas:first-child').css('height','625px');
//        $('.building-container div canvas:first-child').attr('width','1150px');
//        $('.building-container div canvas:first-child').attr('height','625px');
//
//        $('.building-container div img:first-child').css('width','1150px');
//        $('.building-container div img:first-child').css('height','625px');
//    alert(document.getElementsByClassNames("building-container").firstChild.innerHTML);
}

setTimeout(func, 1500);


    </script>

	</div>


<div class="pop-info-box-floor" style="display: none;"></div>

<div class="pop-info-box" style="display: none;"></div>
</div>
 



<?php
get_footer();?>