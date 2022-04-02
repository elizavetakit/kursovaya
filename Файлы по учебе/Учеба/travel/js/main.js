
var swiper = new Swiper('.swiper-header', {
    speed: 1000,
    slidesPerView: 1,
    autoplay: {
        delay: 2000,
      },
});


$ ('#btnClick').on('click', function() {
    if($('.input-application').val() == ''){
        $('#error-application').show(function(){
            setTimeout(function(){
              $('#error-application').hide(200);
            }, 2000);
        });
    }
})

$ ('#submit_button').on('click', function() {
    if($('#FIO').val() == ''){
        $('#reviews_error').show(function(){
            setTimeout(function(){
              $('#reviews_error').hide(200);
            }, 2000);
          });
    }
    else if($('#E-mail').val() == ''){
        $('#reviews_error').show(function(){
            setTimeout(function(){
              $('#reviews_error').hide(200);
            }, 2000);
          });
    }
    else if($('#number-input').val() == ''){
        $('#reviews_error').show(function(){
            setTimeout(function(){
              $('#reviews_error').hide(200);
            }, 2000);
          });
    }
    else if($('#textarea_reviews').val() == ''){
        $('#reviews_error').show(function(){
            setTimeout(function(){
              $('#reviews_error').hide(200);
            }, 2000);
          });
    }
    else if (!checkbox.checked) {
        $('#reviews_error').show(function(){
            setTimeout(function(){
              $('#reviews_error').hide(200);
            }, 2000);
          });
    }
});

function check() {
    var submit = document.getElementsByName('.button_application')[0];
    if (document.getElementById('.radio_reviews').checked) submit.disabled = '';
    else submit.disabled = 'disabled';
}

// reviews

var show = function(state) {
    document.getElementById('modalForm').style.display = state;
    document.getElementById('filter').style.display = state;
}

// list tour
var swiper = new Swiper
('.swiper', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow',
        prevEl: '.back',
    },
});

var swiper = new Swiper
('.swiper1', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow1',
        prevEl: '.back1',
    },
});

var swiper = new Swiper
('.swiper2', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow2',
        prevEl: '.back2',
    },
});

var swiper = new Swiper
('.swiper3', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow3',
        prevEl: '.back3',
    },
});

var swiper = new Swiper
('.swiper4', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow4',
        prevEl: '.back4',
    },
});

var swiper = new Swiper
('.swiper5', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow5',
        prevEl: '.back5',
    },
});

var swiper = new Swiper
('.swiper6', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow6',
        prevEl: '.back6',
    },
});

var swiper = new Swiper
('.swiper7', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow7',
        prevEl: '.back7',
    },
});

var swiper = new Swiper
('.swiper8', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow8',
        prevEl: '.back8',
    },
});

var swiper = new Swiper
('.swiper9', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow9',
        prevEl: '.back9',
    },
});

var swiper = new Swiper
('.swiper10', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow10',
        prevEl: '.back10',
    },
});

var swiper = new Swiper
('.swiper11', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow11',
        prevEl: '.back11',
    },
});

var swiper = new Swiper
('.swiper12', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow12',
        prevEl: '.back12',
    },
});

var swiper = new Swiper
('.swiper13', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow13',
        prevEl: '.back13',
    },
});

var swiper = new Swiper
('.swiper14', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow14',
        prevEl: '.back14',
    },
});

var swiper = new Swiper
('.swiper15', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow15',
        prevEl: '.back15',
    },
});

var swiper = new Swiper
('.swiper16', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow16',
        prevEl: '.back16',
    },
});

var swiper = new Swiper
('.swiper17', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow17',
        prevEl: '.back17',
    },
});

var swiper = new Swiper
('.swiper18', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow18',
        prevEl: '.back18',
    },
});

var swiper = new Swiper
('.swiper19', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow19',
        prevEl: '.back19',
    },
});

var swiper = new Swiper
('.swiper20', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow20',
        prevEl: '.back20',
    },
});

var swiper = new Swiper
('.swiper21', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow21',
        prevEl: '.back21',
    },
});

var swiper = new Swiper
('.swiper22', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow22',
        prevEl: '.back22',
    },
});

var swiper = new Swiper
('.swiper23', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow23',
        prevEl: '.back23',
    },
});

var swiper = new Swiper
('.swiper24', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.arrow24',
        prevEl: '.back24',
    },
});

// country

var swiper = new Swiper('.swiper-inner ', {
    speed: 1000,
    slidesPerView: 2.4,
    autoplay: {
        delay: 2000,
      },
});

//Booking
function calc() {
    var policy = document.getElementById('policy');
    var transfer = document.getElementById('transfer');
    var Number_room = document.getElementById('Number_room');
    let day_1 = new Date(document.getElementById('Data').value),
    day_2 = new Date(document.getElementById('Data2').value);
    var inp1 = document.getElementById('count11');
    var rase = document.getElementById('Air');
    var a = +inp1.value;
    var b = +parseInt(policy.options[policy.selectedIndex].value);
    var c = +parseInt(transfer.options[transfer.selectedIndex].value);
    var d = +parseInt(Number_room.options[Number_room.selectedIndex].value);
    var e = +(day_2 - day_1) / (1000 * 60 * 60 * 24);
    var f = +parseInt(rase.options[rase.selectedIndex].value);
    var rezultat = a * b + c + (d * e) + (f * 2 * a);
    document.getElementById('price_booking').innerHTML = 'Цена: ' + rezultat + '₽';
}

//Form
$('#add').on('click', function() {
    var $form = $('#booking_form_info').eq(0);
    $form.clone().insertAfter($form);
});

$ ('#submit').on('click', function() {
    if($('#email').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if($('#phone').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if($('#first_name').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if($('#last_name').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if($('#patronymic').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if($('#dr').val() == ''){
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else if (!checkbox.checked) {
        $('#error').show(function(){
            setTimeout(function(){
              $('#error').hide(200);
            }, 2000);
          });
    }
    else {
        $('#booking-finish').show(function(){
            setTimeout(function(){
              $('#booking-finish').hide(200);
            }, 2000);
          });
    }
});
