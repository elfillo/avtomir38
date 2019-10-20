"use strict";
// стрелка вверх

var scrollElem = document.getElementById("upstairs");

$(document).ready(function(){   
    $(window).scroll(function () {
   
    
    if ($(this).scrollTop() > 0) {
        
        scrollElem.style.opacity = "1";
    } else {
        scrollElem.style.opacity = "0";
    }
  
 })
});

$('#upstairs').click(function(){
    $('html').animate({scrollTop:0},1500);
    $('body').animate({scrollTop:0},1500);
});

//mobile menu
var burgerTransform1 = document.querySelector('.burger_1');
var burgerTransform2 = document.querySelector('.burger_2');
var burgerTransform3 = document.querySelector('.burger_3');
var burgerClickOn = document.querySelector('.burger');
var mobiMenu = document.querySelector('#mobi_menu');
var menuClose = true;


burgerClickOn.addEventListener('click', function () {
            if (menuClose == true) {
                burgerTransform1.style.top = "50%";
                burgerTransform3.style.top = "50%";
                setTimeout(function () {
                    burgerTransform2.style.display = "none";
                    burgerTransform1.style.transform = "rotate(45deg)";
                    burgerTransform3.style.transform = "rotate(-45deg)";
                    burgerTransform1.style.backgroundColor  = "#e50900";
                    burgerTransform3.style.backgroundColor  = "#e50900";
                    mobiMenu.style.display = "block";
                    burgerClickOn.style.position = "fixed";
                }, 250);
                setTimeout(function () {
                    menuClose = false;
                }, 500);

            } else {
                burgerTransform1.style.transform = "rotate(0deg)";
                    burgerTransform3.style.transform = "rotate(0deg)";
                    burgerTransform2.style.display = "block";
                setTimeout(function () {
                burgerTransform1.style.top = "0%";
                burgerTransform3.style.top = "calc(100% - 2px)";
                burgerTransform1.style.backgroundColor  = "#e50900";
                burgerTransform3.style.backgroundColor  = "#e50900";
                burgerClickOn.style.position = "absolute";
                mobiMenu.style.display = "none";

                    
                }, 250);
                setTimeout(function () {
                    menuClose = true;
                }, 500);
            }
            });
//calc form
$(function(){
    var selectCar;
    var selectModel;
    var selectСountry;
    var selectCapacity;
    var sum = 0;
    var car = [
        'Alfa Romeo',
        'Audi',
        'BMW',
        'Cadillac',
        'Chery',
        'Chevrolet',
        'Citroen',
        'Deawoo',
        'Derways',
        'Fiat',
        'Ford',
        'Geely',
        'Creat Wall',
        'Honda',
        'Hyundai',
        'Infinity',
        'Jaguar',
        'Jeep',
        'Kia',
        'Land Rover',
        'Lexus',
        'Lifan',
        'Mazda',
        'Mercedes-Benz',
        'Mitsubishi',
        'Nissan',
        'Opel',
        'Peugeout',
        'Porshe',
        'Renault',
        'SAAB',
        'Skoda',
        'Ssang Yong',
        'Subaru',
        'Suzuki',
        'Toyota',
        'Volvo',
        'Volkswagen',
        'ВАЗ',
        'ГАЗ',
        'ГАЗель',
        'УАЗ'
    ];
    var country = [
        'Россия',
        'Корея',
        'Европа'
    ];
    var capacity =[
        '35-45',
        '45-65',
        '65-78',
        '78-90',
        '90-120',
        '120-145',
        '145-230'
    ];
    
    function insertCars(){
        var html = '';
        car.forEach(function(item){
            html += '<option data-car="'+item+'">' +item+ '</option>';
        });
        $('#car_model_select').append(html);
    };
    insertCars();

    $('#car_model_select').change(function(){
        var test = $('#car_model_select option:selected').text();
    });

    function insertCountry(){
        var html = '';
        country.forEach(function(item, i){
            html += '<option data-country="'+i+'">' +item+ '</option>';
        });
        $('#country_select').append(html);
    };
    insertCountry();

    $('#country_select').change(function(){
        var test = $('#country_select option:selected').text();
    });

    function insertCapacity(){
        var html = '';
        capacity.forEach(function(item){
            html += '<option data-сapacity="'+item.split('-')[0]+'">' +item+ '</option>';
        });
        $('#battery_capacity_select').append(html);
    };
    insertCapacity();

    $('#battery_capacity_select').change(function(){
        var test = $('#battery_capacity_select option:selected').text();
    });

    $('#car_model').change(function(){
        var test = $('#car_model').val();
    });

   $('.calc_rezult').click(function(){
   
    var car = $('#car_model_select option:selected').text();
    var model = $('#car_model').val();
    var capacity = $('#battery_capacity_select option:selected').text();
    var capacityData = $('#battery_capacity_select option:selected').data('сapacity');
    var country = $('#country_select option:selected').text();
    var countryData = $('#country_select option:selected').data('country');

    if (model == 0){
        console.log('error');
        $('.result_of_calc__interior').text('Введите модель автомобиля');
        $('.result_of_calc__interior').css({
            'color': 'red'
        });
    } else {

    //текст сообщения в зависимости от данных
    $('.result_of_calc__interior').text('Акукулятор для ' + car + ' модели ' + model + ' емкостью ' + capacity + ' производства ' + country + ' будет стоить ');
    $('.result_of_calc__interior').css({
        'color': '#fff'
    });
    var price = 0;
    //35-45
    if (capacityData == 35 && countryData == 0){
        price = 1500;
    } else if (capacityData == 35 && countryData == 1){
        price = 2000;
    } else if(capacityData == 35 && countryData == 2){
        price = 2000;
    }
    //45-65
    else if (capacityData == 45 && countryData == 0){
        price = 2000;
    } else if(capacityData == 45 && countryData == 1){
        price = 2500;
    }
    else if(capacityData == 45 && countryData == 2){
        price = 2500;
    }
    //65-78
    else if (capacityData == 65 && countryData == 0){
        price = 3000;
    } else if(capacityData == 65 && countryData == 1){
        price = 3000;
    }
    else if(capacityData == 65 && countryData == 2){
        price = 3000;
    }
    //78 - 90
    else if (capacityData == 78 && countryData == 0){
        price = 4000;
    } else if(capacityData == 78 && countryData == 1){
        price = 4500;
    }
    else if(capacityData == 78 && countryData == 2){
        price = 5000;
    }
    //90 - 120
    else if (capacityData == 90 && countryData == 0){
        price = 4500;
    } else if(capacityData == 90 && countryData == 1){
        price = 4500;
    }
    else if(capacityData == 90 && countryData == 2){
        price = 5000;
    }
    //120 - 145
    else if (capacityData == 120 && countryData == 0){
        price = 6000;
    } else if(capacityData == 120 && countryData == 1){
        price = 6000;
    }
    else if(capacityData == 120 && countryData == 2){
        price = 6000;
    }
    //145 - 230
    else if (capacityData == 145 && countryData == 0){
        price = 7500;
    } else if(capacityData == 145 && countryData == 1){
        price = 7500;
    }
    else if(capacityData == 145 && countryData == 2){
        price = 7500;
    }

    //изменяем сумму в зависимости от параметров
    $('.result_of_calc__price').html('от ' + '<span>' + price + '</span>' + ' руб.');

    } 
   });

});
//modal window
$('.swiper-slide-wr__button').click(function (){
    openModal();
});
function openModal(){
    $('.modal_window-wr').css({
        'display':'block'
    });
}

$('.modal_window__close').click(function(){
    $('.modal_window-wr').css({
        'display':'none'
    });
});
//выделение активной ссылки главное меню
$(function () {
    $(".menu li a").each(function () {
        window.location.href == this.href && $(this).addClass("active")
    })
});
//выделение активной ссылки каталог
$(function () {
    $(".catalog__menu li a").each(function () {
        window.location.href == this.href && $(this).addClass("active")
    })
});
//открытие модального окна быстрого заказа
function openQuickModal(){
    $('.quic_modal-wr').css({
        'display':'block'
    });
};
$('#quick_btn').click(function(){
    openQuickModal();
});
$('.quic_modal__close').click(function(){
    $('.quic_modal-wr').css({
        'display':'none'
    });
}); 
//send mail
function postFunction(t) {
    var n = new Array("name", "phone");
    $(t).submit(function (o) {
        o.preventDefault();
        var e = 0;
        if (console.log("beforeForRich"), $(t).children().each(function () {
                for (var o = 0; o < n.length; o++) $(this).attr("name") == n[o] && ($(this).val() ? $(this).css("border-bottom", "1px solid #fff") : ($(this).css("border-bottom", "red 1px solid"), e = 1))
            }), 0 == e) return $.ajax({
            type: "POST",
            url: "/wp-content/themes/avtomir38/mail.php",
            data: $(this).serialize()
        }).done(function () {
            $(t + "__phone").val(""), $(t + "__name").val(""), console.log("spasibo"), $(".modalWindow__learn").css({
                opacity: "1",
                display: "block"
            }), 
            $("#thankForAplicationLearn").css({
                opacity: "1",
                display: "block",
                left: "50%",
                "margin-left": "-174px",
                top: "50%",
                "margin-top": "-125px"
            }) 
            // changeWindows(), defaultText()
        })
    })
}
postFunction(".form_call-back");
postFunction(".form_call-back__footer");



$('#quick_btn').click(function(){
    // setTimeout(function(){
        
    // }, 1000);
    let optionText = $('#text_from_mail').text();
        console.log(optionText);
    
});

//добавление данных с калькулятора в форму
// $('.calculator .calc_rezult').click(function(){
//     console.log('data test');
//     console.log(model);
// });
//кнопки активации формы
$('.wholesale_button').click(function(){
    openModal();
});

$('.cart').click(function(event){
    event.preventDefault();
    openModal();
});

$('.menu-item').click(function(){
    let subMenu = $(this).children('ul');
    subMenu.toggleClass('open_sub_menu');
});