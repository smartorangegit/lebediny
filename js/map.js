$(function() {
    filterMarkers = function (category) {
        for (i = 0; i < markers1.length; i++) {
            marker = gmarkers1[i];
            // If is same category or category not picked
            if (marker.category == category || category == 'all') {
                marker.setMap(map);
                // marker.setAnimation(google.maps.Animation.DROP);
            }
            // Categories don't match
            else {
                marker.setMap(null)
            }
        }
    }
    var gmarkers1 = [];
    var markers1 = [];
    var infowindow = new google.maps.InfoWindow({
        content: ''
    });
    markers1 = [
                ['0', '', 50.408739, 30.651671, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа №266<br />560 метрів'],
                ['1', '', 50.406571, 30.644995, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа № 295<br />550 метрів'],
                // ['2', '', 50.406077, 30.633775, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа №309<br />1,3 кілометра'],
                ['3', '', 50.406170, 30.652516, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа №302 з поглибленим<br />вивченням художньо-<br />естетичного циклу <br />300 метрів'],
                ['4', '', 50.407371, 30.642309, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа № 296 <br />Спеціалізована школа з поглибленим<br />вивченням іноземних мов <br />770 метрів'],
                ['5', '', 50.406208, 30.658773, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Спеціалізована школа &quot;Тріумф&quot; з<br />поглибленим вивченням іноземних<br />мов з 1-го класу і при ній дитячий<br />садок<br />760 метрів'],
                ['6', '', 50.405970, 30.660598, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Спеціалізована школа №255<br />800 метрів'],
                ['7', '', 50.397314, 30.648333, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа-гімназія №316 з поглибленим<br />вивченням української мови <br />850 метрів'],
                ['8', '', 50.406066, 30.662696, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Школа № 237 <br />900 метрів'],
                ['9', '', 50.402208, 30.638385, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Гімназія № 315<br />1 кілометр'],
                ['10', '', 50.406593, 30.669364, 'schools', '/wp-content/themes/smart_lebedyny/inc/img/pin/school.png', 'Ліцей НТУУ &quot;КПІ&quot; &quot;Інтелект&quot; <br />1 кілометр'],
                // ['11', '', 50.396104, 30.645994, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №149<br />1,2 кілометра'],
                ['12', '', 50.404176, 30.658137, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №59<br />500 метрів'],
                // ['13', '', 50.405622, 30.666020, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №696<br />1,3 кілометра'],
                ['14', '', 50.406597, 30.653844, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №250<br />500 метрів'],
                ['15', '', 50.411092, 30.649696, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №719<br />900 метрів'],
                // ['16', '', 50.410766, 30.641793, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №809<br />1,2 кілометра'],
                ['17', '', 50.426560, 30.652496, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №147<br />850 метрів'],
                ['18', '', 50.407456, 30.646271, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №704<br />560 метрів'],
                ['19', '', 50.404630, 30.642324, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок &quot;Вирлиця&quot;<br />450 метрів'],
                ['20', '', 50.403924, 30.638750, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №314<br />700 метрів'],
                // ['21', '', 50.409139, 30.636324, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №160<br />1,3 кілометра'],
                ['22', '', 50.404173, 30.658128, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №59<br />500 метрів'],
                // ['23', '', 50.406838, 30.632351, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №7<br />1,4 кілометра'],
                ['24', '', 50.397619, 30.645444, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Дитячий садок №126<br />700 метрів'],
                // ['25', '', 50.413297, 30.649017, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Центр ранього розвитку дітей<br />1,2 кілометра'],
                ['26', '', 50.404394, 30.634555, 'gardens', '/wp-content/themes/smart_lebedyny/inc/img/pin/garden.png', 'Школа-садок &quot;Всесвіт&quot; №31<br />1 кілометр'],
                ['27', '', 50.411327, 30.655832, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Центральна районна поліклініка Дарницького району<br />1 кілометр'],
                ['28', '', 50.414942, 30.661990, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Дитяча поліклініка №2<br />2,5 кілометр'],
                // ['29', '', 50.429891, 30.539261, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Пологовий будинок №1<br />2,5 кілометри'],
                ['30', '', 50.414285, 30.666203, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Міська клінічна лікарня №1<br />2 кілометри'],
                ['31', '', 50.396115, 30.636345, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Приватна дитяча клініка <br />&quot;Добробут&quot;<br />1 кілометр'],
                ['32', '', 50.407631, 30.647782, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Клініка відновлення зору <br />&quot;Візіум&quot;<br />500 метрів'],
                // ['33', '', 50.395642, 30.622411, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Медичний центр <br />&quot;Борис&quot;<br />2,1 кілометри'],
                ['34', '', 50.429771, 30.644842, 'medicine', '/wp-content/themes/smart_lebedyny/inc/img/pin/medicine.png', 'Центр первинної <br />медико-санітарної <br />допомоги Дарницького <br />району м.Києва<br />2,4 кілометра'],
                ['35', '', 50.405499, 30.637764, 'sport', '/wp-content/themes/smart_lebedyny/inc/img/pin/sport.png', 'Палац спорту Спорт лайф <br />1,1 кілометра'],
                ['36', '', 50.402175, 30.638395, 'sport', '/wp-content/themes/smart_lebedyny/inc/img/pin/sport.png', 'Планета спорту<br />850 метрів'],
                ['37', '', 50.406737, 30.628574, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'Магазин &quot;Велика Кишеня&quot; <br />700 метрів'],
                ['38', '', 50.405730, 30.638237, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'Магазин &quot;Билла&quot;<br />1,1 кілометра'],
                ['39', '', 50.405292, 30.631586, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'Магазин &quot;Сільпо&quot;<br />1 кілометр'],
                ['40', '', 50.400915, 30.631586, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'Магазин &quot;Сільпо&quot;<br />800 метрів'],
                ['41', '', 50.390560, 30.641062, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТЦ &quot;Метро&quot;<br />2,2 кілометри'],
                ['42', '', 50.390003, 30.635228, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТЦ &quot;Епіцентр К&quot;<br />2,2 кілометри'],
                // ['43', '', 50.406380, 30.656154, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'Магазин &quot;Novus&quot;<br />3 кілометри'],
                ['44', '', 50.395876, 30.632398, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТРЦ &quot;Аладін&quot;<br />1,3 кілометри'],
                ['45', '', 50.414563, 30.651098, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТЦ &quot;Нью Вей&quot;'],
                ['46', '', 50.406631, 30.630370, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТЦ &quot;Піраміда&quot;<br />1 кілометр'],
                // ['47', '', 50.399301, 30.616015, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТК &quot;Аркадія&quot;<br />2,5 кілометра'],
                // ['48', '', 50.396333, 30.614967, 'shop', '/wp-content/themes/smart_lebedyny/inc/img/pin/shop.png', 'ТЦ &quot;Appetite&quot;<br />2,5 кілометра'],
                ['49', '', 50.401867, 30.649769, 'main', '/wp-content/themes/smart_lebedyny/inc/img/pin/map-marker.png', 'ЖК &quot;Лебединий&quot; <br> вул. Ревуцького, 40'],
                                ];
    function addMarker(marker) {
        var category = marker[4];
        var title = marker[1];
        var pos = new google.maps.LatLng(marker[2], marker[3]);
        var content = marker[6];
        var markerIcon = {
            url : marker[5]
        };
        marker1 = new google.maps.Marker({
            title: title,
            position: pos,
            category: category,
            map: map,
            icon: markerIcon,
            // animation: google.maps.Animation.DROP,
        });

        gmarkers1.push(marker1);

        // Marker click listener
        google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
            return function () {
                // console.log('Gmarker 1 gets pushed');
                infowindow.setContent(content);
                infowindow.open(map, marker1);
                map.panTo(this.getPosition());
            }
        })(marker1, content));
    }
    // Snazzy Map Style - https://snazzymaps.com/style/8097/wy
    var mapStyle = [
{ "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444" }]},
{"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]},
{"featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }]},
{"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100 },{"lightness": 45 }]},
{"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified" }]},
{"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }]},
{ "featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]},
{ "featureType": "water", "elementType": "all", "stylers": [ {"color": "#46bcec"}, {"visibility": "on"}]}];

    // Create the map
    var map = new google.maps.Map($('.map-canvas')[0], {
        zoom: 14,
        styles: mapStyle,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        // rotateControl: boolean,
        scrollwheel: true,
        fullscreenControl: false,
        center: new google.maps.LatLng(50.401867, 30.649769)
    });

    for (i = 0; i < markers1.length; i++) {
        addMarker(markers1[i]);
    }



});
