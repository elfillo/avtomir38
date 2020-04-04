$(function() {
    var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
    $.when(mapScript)
        .done(function () {

            ymaps.ready(init)
            function init() {

                var newMarkerCollection = new ymaps.GeoObjectCollection();
                var markerCollectio = [];
                var center = [52.520706, 103.907554];

                var myMap = new ymaps.Map("map", {
                    center: center,
                    zoom: 10,
                    controls: []
                });

                myMap.behaviors.disable('scrollZoom');

                var placemark = setPlacemark([52.318344, 104.249782]);
                var placemark_2 = setPlacemark([52.265659, 104.210759]);
                var placemark_3 = setPlacemark([52.496259, 103.837749]);
                var placemark_4 = setPlacemark([52.292798, 104.311937]);
                var placemark_5 = setPlacemark([52.520706, 103.907554]);
                var placemark_6 = setPlacemark([52.325141, 104.240510]);
                var placemark_7 = setPlacemark([52.294362, 104.293564]);
                var placemark_8 = setPlacemark([52.560649, 103.892392]);
                var placemark_9 = setPlacemark([52.293155, 104.311547]);
                var placemark_10 = setPlacemark([52.293867, 104.310977]);
                var placemark_11 = setPlacemark([52.751857, 103.625683]);
                var placemark_12 = setPlacemark([52.743826, 103.637208]);

                markerCollectio.push(placemark);
                newMarkerCollection.add(placemark);

                markerCollectio.push(placemark_2);
                newMarkerCollection.add(placemark_2);

                markerCollectio.push(placemark_3);
                newMarkerCollection.add(placemark_3);

                markerCollectio.push(placemark_4);
                newMarkerCollection.add(placemark_4);

                markerCollectio.push(placemark_5);
                newMarkerCollection.add(placemark_5);

                markerCollectio.push(placemark_6);
                newMarkerCollection.add(placemark_6);

                markerCollectio.push(placemark_7);
                newMarkerCollection.add(placemark_7);

                markerCollectio.push(placemark_8);
                newMarkerCollection.add(placemark_8);

                markerCollectio.push(placemark_9);
                newMarkerCollection.add(placemark_9);

                markerCollectio.push(placemark_10);
                newMarkerCollection.add(placemark_10);

                markerCollectio.push(placemark_11);
                newMarkerCollection.add(placemark_11);

                markerCollectio.push(placemark_12);
                newMarkerCollection.add(placemark_12);

                myMap.geoObjects.add(newMarkerCollection);

                setMapCenter(myMap, newMarkerCollection)
            }

            function setPlacemark(coords) {
                var placemark = new ymaps.Placemark(coords, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/avtomir38/img/mark.png',
                    iconImageSize: [20, 20],
                });

                return placemark;
            }

            function setMapCenter(map, collection) {
                var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                    collection.getBounds(),
                    map.container.getSize(),
                    map.options.get('projection')
                );

                map.setCenter(centerAndZoom.center, 10);
            }
        })
});
