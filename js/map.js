function initMap() {
    var adress1 = {
        lat: 52.318344,
        lng: 104.249782
        /*Трактовая, 18/36а*/
    };
    var contentString1 = '<a target="_blank" href="https://is.gd/Ej5sgs">' + 'ул. Трактовая, 18/36а <br> Главный офис' + '</a>';
    var adress2 = {
        lat: 52.265659,
        lng: 104.210759
        /*Сергеева, 2а*/
    };
    var contentString2 = '<a target="_blank" href="https://is.gd/0gEU7M">' + 'ул. Сергеева, 2а' + '</a>';
    var adress3 = {
        lat: 52.496259,
        lng: 103.837749
        /*17а микрорайон, 21/1в*/
    };
    var contentString3 = '<a target="_blank" href="https://is.gd/tDcOSa">' + 'г. Ангарск <br> 17а микрорайон, 21/1в' + '</a>';
    var adress4 = {
        lat: 52.292798,
        lng: 104.311937
        /*Баррикад, 26/7*/ 
    };
    var contentString4 = '<a target="_blank" href="https://is.gd/JX6FDt">' + 'ул. Баррикад, 26/7' + '</a>';
    var adress5 = {
        lat: 52.520706,
        lng: 103.907554
        /*Ангарск, Карла Маркса, 87/2*/ 
    };
    var contentString5 = '<a target="_blank" href="https://is.gd/GKBgiV">' + 'г. Ангарск <br> ул. Карла Маркса, 87/2' + '</a>';
    var adress6 = {
        lat: 52.325141,
        lng: 104.240510 
        /*Трактовая, 9/6*/ 
    };
    var contentString6 = '<a target="_blank" href="https://is.gd/h1dfPY">' + 'ул. Трактовая, 9/6' + '</a>';
    var adress7 = {
        lat: 52.294362,
        lng: 104.293564
        /*ТЦ Автоград,
        Октябрьской Революции, 1 к2*/ 
    };
    var contentString7 = '<a target="_blank" href="https://is.gd/ypiG6M">' + 'ТЦ Автоград, <br> Октябрьской Революции, 1 к2' + '</a>';
    var adress8 = {
        lat: 52.560649,
        lng: 103.892392
        /*Ангарк, 120-й промквартал, 54Б*/ 
    };
    var contentString8 = '<a target="_blank" href="https://is.gd/Vk0oIf">' + 'г. Ангарск, <br> 120-й промквартал, 54Б' + '</a>';
    var adress9 = {
        lat: 52.293155,
        lng: 104.311547
        /*Баррикад, 26/4*/ 
    };
    var contentString9 = '<a target="_blank" href="https://is.gd/oYEaND">' + 'ул. Баррикад, 26/4' + '</a>';
    var adress10 = {
        lat: 52.293867,
        lng: 104.310977
        /*Баррикад, 26/2*/ 
    };
    var contentString10 = '<a target="_blank" href="https://is.gd/Yh1nBw">' + 'ул. Баррикад, 26/2' + '</a>';
    var adress11 = {
        lat: 52.751857,
        lng: 103.625683 
        /*Стопани.20 Усолье*/ 
    };
    var contentString11 = '<a target="_blank" href="https://is.gd/OYeoSp">' + 'г. Усолье-Сибирское <br> ул. Стопани, 20' + '</a>';
    var adress12 = {
        lat: 52.743826,
        lng: 103.637208  
        /*Желябова, 49 Усолье*/ 
    };
    var contentString12 = '<a target="_blank" href="https://is.gd/5AUY8n">' + 'г. Усолье-Сибирское <br> ул. Желябова, 49' + '</a>';
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: adress5,
        styles: [{
            "featureType": "all",
            "elementType": "all",
            "stylers": [{
                "saturation": -100
            }, {
                "gamma": 0.5
            }]
        }]
    });
    var marker1 = new google.maps.Marker({
        position: adress1,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker2 = new google.maps.Marker({
        position: adress2,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker3 = new google.maps.Marker({
        position: adress3,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker4 = new google.maps.Marker({
        position: adress4,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker5 = new google.maps.Marker({
        position: adress5,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker6 = new google.maps.Marker({
        position: adress6,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker7 = new google.maps.Marker({
        position: adress7,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker8 = new google.maps.Marker({
        position: adress8,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker9 = new google.maps.Marker({
        position: adress9,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker10 = new google.maps.Marker({
        position: adress10,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker11 = new google.maps.Marker({
        position: adress11,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });

    var marker12 = new google.maps.Marker({
        position: adress12,
        map: map,
        icon: '/wp-content/themes/avtomir38/img/mark.png'
    });


    //1
    var infowindow1 = new google.maps.InfoWindow({
        content: contentString1
    });

    marker1.addListener('click', function() {
        infowindow1.open(map, marker1);
    });
    //2
    var infowindow2 = new google.maps.InfoWindow({
        content: contentString2
    });
    marker2.addListener('click', function() {
        infowindow2.open(map, marker2);
    });
    //3
    var infowindow3 = new google.maps.InfoWindow({
        content: contentString3
    });
    marker3.addListener('click', function() {
        infowindow3.open(map, marker3);
    });
    //4
    var infowindow4 = new google.maps.InfoWindow({
        content: contentString4
    });
    marker4.addListener('click', function() {
        infowindow4.open(map, marker4);
    });
    //5
    var infowindow5 = new google.maps.InfoWindow({
        content: contentString5
    });
    marker5.addListener('click', function() {
        infowindow5.open(map, marker5);
    });
    //6
    var infowindow6 = new google.maps.InfoWindow({
        content: contentString6
    });
    marker6.addListener('click', function() {
        infowindow6.open(map, marker6);
    });
    //7
    var infowindow7 = new google.maps.InfoWindow({
        content: contentString7
    });
    marker7.addListener('click', function() {
        infowindow7.open(map, marker7);
    });
    //8
    var infowindow8 = new google.maps.InfoWindow({
        content: contentString8
    });
    marker8.addListener('click', function() {
        infowindow8.open(map, marker8);
    });
    //9
    var infowindow9 = new google.maps.InfoWindow({
        content: contentString9
    });
    marker9.addListener('click', function() {
        infowindow9.open(map, marker9);
    });
    //10
    var infowindow10 = new google.maps.InfoWindow({
        content: contentString10
    });
    marker10.addListener('click', function() {
        infowindow10.open(map, marker10);
    });
    //11
    var infowindow11 = new google.maps.InfoWindow({
        content: contentString11
    });
    marker11.addListener('click', function() {
        infowindow11.open(map, marker11);
    });
    //12
    var infowindow12 = new google.maps.InfoWindow({
        content: contentString12
    });
    marker12.addListener('click', function() {
        infowindow12.open(map, marker12);
    });
}