//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").
        addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});



//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
//Hide success message in account page
window.onload = function() {
  document.getElementById('successMsg').style.display = 'none';
};
function showSuccessMsg(){
    document.getElementById('successMsg').style.display = 'block';
    setTimeout(hideSuccessMsg, 3000);
}
function hideSuccessMsg(){
    document.getElementById('successMsg').style.display = 'none';
}
//hide event details
window.onload = function() {
  document.getElementById('eventDet').style.display = 'none';
  document.getElementById('eventDet1').style.display = 'none';
  document.getElementById('eventDet2').style.display = 'none';
  document.getElementById('evWrap').style.display = 'none';
  document.getElementById('eventDetMain').style.display = 'none';
   document.getElementById('map').style.display = 'none';
    document.getElementById('method').style.display = 'none';
    document.getElementById('route').style.display = 'none';
};
function showEventMsg(){
    document.getElementById('eventDet').style.display = 'block';
    document.getElementById('eventDet1').style.display = 'block';
    document.getElementById('eventDet2').style.display = 'block';
    document.getElementById('eventDetMain').style.display = 'block';
    
    document.getElementById('map').style.display = 'block';
    
    document.getElementById('method').style.display = 'block';
    
    document.getElementById('route').style.display = 'block';
}
function hideEventMsg(){
    document.getElementById('eventDet').style.display = 'none';
    document.getElementById('eventDet1').style.display = 'none';
    document.getElementById('eventDet2').style.display = 'none';
    document.getElementById('evWrap').style.display = 'none';
    document.getElementById('eventDetMain').style.display = 'none';
    document.getElementById('testing1').style.display = 'none';
    document.getElementById('map').style.display = 'none';
    document.getElementById('method').style.display = 'none';
    document.getElementById('route').style.display = 'none';
}

//the function to hide the div
function hideDiv(){

    if ($(window).width() < 1024) {

             document.getElementById("eventDet1").style.display = "none";
             document.getElementById("eventDet2").style.display = "none";

    }
    else{
         document.getElementById("eventDet1").style.display = "block";
         document.getElementById("eventDet2").style.display = "block";
    }

}
//
/*
$('.thumbnail').on('click', function () {
    $('#testing1').text("new dialog title");
});
$('.thumbnail').on('click', function () {
    $('#eventDetMain').text($(this).text());

});*/
$('.thumbnail').on('click', function () {
    $("#eventDetMain").empty();
    
$(this).clone().appendTo( "#eventDetMain" );
});
function changeImage(a) {
        document.getElementById("evImg").src=a;
    }
//password validate
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#password2").val();

    if (password != "" && confirmPassword != "" && password == confirmPassword){
        $("#divPasswordsMatch").html("<h6 class='smallSp'>Passwords match</h6>");
        $('#password2').html('matching').css('background-color', 'rgba(67, 236, 118, 0.6)');
}
        
    else if(confirmPassword == ""){
        $('#password2').html('matching').css({'background-color': 'transparent'});
        $("#divPasswordsMatch").html("");
    }
    else{
        $("#divPasswordsMatch").html("<h6 class='smallSp'>Passwords do not match</h6>");
        $('#password2').html('matching').css({'background-color': 'rgba(233, 32, 56, 0.6)'});
    }
    
}
//enable buttons
(function() {
    $('.theForm > input').keyup(function() {

        var empty = false;
        $('.theForm > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#register').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#register').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });
})

$(document).ready(function () {
   $("#password, #password2").keyup(checkPasswordMatch);
});
//Form validation
function validateForm() {
    var a = document.forms["theForm"]["fname"].value;
    var b = document.forms["theForm"]["lname"].value;
    var c = document.forms["theForm"]["username"].value;
    var d = document.forms["theForm"]["email"].value;
    var e = document.forms["theForm"]["dob"].value;
    var f = document.forms["theForm"]["gender"].value;
    if (a == null || a == "") {
        alert("First name must be filled out");
        return false;
    }
    if (b == null || b == "") {
        alert("Last name must be filled out");
        return false;
    }
    if (c == null || c == "") {
        alert("Username name must be filled out");
        return false;
    }
    if (d == null || d == "") {
        alert("Email name must be filled out");
        return false;
    }
    if (e == null || e == "") {
        alert("DOB name must be filled out");
        return false;
    }
    if (f == null || f == "") {
        alert("Gender name must be filled out");
        return false;
    }
}
$(document).ready( function() {
  var form = $('.theForm');
  var formMessages = $('#successMsg');
// Set up an event listener for the contact form.
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData,
    dataType: "json",
    success: function(formData) {
    if(formData.status == 'success'){
        showSuccessMsg(); 
    }else if(formData.status == 'error'){
        alert("Error on query!");
    }
}
})})
});

$(document).ready( function() {
  var form = $('#theForm');
  var formMessages = $('#successMsg');
// Set up an event listener for the contact form.
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData,
    success: function(formData) {
        $("#formError").html(formData);
    }
})})
});

$(document).ready( function() {
  var form = $('#theForm2');
// Set up an event listener for the contact form.
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    var formData = $(form).serialize();
    $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData,
    dataType: "html"
}
)})});

// $(document).ready( function() {
//   var form = $('#theForm2');
// // Set up an event listener for the contact form.
// $(form).submit(function(event) {
//     // Stop the browser from submitting the form.
//     event.preventDefault();
//     var formData = $(form).serialize();
//     $.ajax({
//     type: 'POST',
//     url: $(form).attr('action'),
//     data: formData,
//     success: function(formData) {
//         $("#checkInHere").html(formData);
//     }
// })})
// });
var interval = 1000;  // 1000 = 1 second, 3000 = 3 seconds
function checkIn() {
    $.ajax({
            type: 'GET',
            url: 'php/checkIn.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                    $("#checkInHere").html(data);// first set the value     
            },
            complete: function (data) {
                    // Schedule the next
                    setInterval(checkIn, interval);
            }
    });
}
setInterval(checkIn, interval);

// function checkIn(){
//                 var req = new XMLHttpRequest();
//                 req.onreadystatechange = function(e){
//                     if(req.readyState == 4 && req.status == 200){
//                         document.getElementById('checkInHere').innerHTML = req.responseText;
//                     }
//                 }
//                 req.open('GET', 'php/checkIn.php', true);
//                 req.send();
//             }setInterval(function(){checkIn();},1000);
            
// function addCheckIn(){
//                 var req = new XMLHttpRequest();
//                 req.onreadystatechange = function(e){
//                     if(req.readyState == 4 && req.status == 200){
//                         document.getElementById('checkInHere').innerHTML = req.responseText;
//                     }
//                 }
//                 req.open('POST', 'php/addCheckIn.php', true);
//                 req.send();
//             }
          
//           function checkUserIdExists(){
//     return $.ajax({
//         type: "GET",
//         url: "php/checkIn.php",             
//         dataType: "html",   //expect html to be returned                
//         success : function (result) {
//           console.log(result['people']) 
//           $("#checkInHere").append(result['people'])// The value of your php $row['adverts'] will be displayed
//         }
//     });
// };
/*
           ($(document).ready(function please() {
          

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "php/checkIn.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#checkInHere").append(response)
            //alert(response);
        }

    });
});setInterval(function(){please();},100);
          
          */
//code for trending event
          
          (function trending(){
var $wrapper = $('.thumbnail');

$wrapper.find('#checkInHere').sort(function (a, b) {
    return +a.getElementById('checkInHere') - +b.getAttribute('checkInHere');
})
.appendTo( $wrapper );
          })
          


//raduis
var marker = new google.maps.Marker({
  map: map,
  position: new google.maps.LatLng(53.3534, -6.21832031),
  title: 'dublin '
});

// Add circle overlay and bind to marker
var circle = new google.maps.Circle({
  map: map,
  radius: 96.56,    // 10 miles in metres
  fillColor: '#AA000'
});
circle.bindTo('center', marker, 'position');




//map resize

function map2(){
    google.maps.event.trigger(map, 'resize');
}setInterval(function(){map2();},1000);

//Google Map Skin - Get more at http://snazzymaps.com/

//var myOptions = {
  //  zoom: 15,
    //center: new google.maps.LatLng(53.3534, -6.21832031),
    //mapTypeId: google.maps.MapTypeId.ROADMAP,
    //disableDefaultUI: true,
//     styles: [{
//         "featureType": "water",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 17
//         }]
//     }, {
//         "featureType": "landscape",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 20
//         }]
//     }, {
//         "featureType": "road.highway",
//         "elementType": "geometry.fill",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 17
//         }]
//     }, {
//         "featureType": "road.highway",
//         "elementType": "geometry.stroke",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 29
//         }, {
//             "weight": 0.2
//         }]
//     }, {
//         "featureType": "road.arterial",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 18
//         }]
//     }, {
//         "featureType": "road.local",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 16
//         }]
//     }, {
//         "featureType": "poi",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 21
//         }]
//     }, {
//         "elementType": "labels.text.stroke",
//         "stylers": [{
//             "visibility": "on"
//         }, {
//             "color": "#000000"
//         }, {
//             "lightness": 16
//         }]
//     }, {
//         "elementType": "labels.text.fill",
//         "stylers": [{
//             "saturation": 36
//         }, {
//             "color": "#000000"
//         }, {
//             "lightness": 40
//         }]
//     }, {
//         "elementType": "labels.icon",
//         "stylers": [{
//             "visibility": "off"
//         }]
//     }, {
//         "featureType": "transit",
//         "elementType": "geometry",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 19
//         }]
//     }, {
//         "featureType": "administrative",
//         "elementType": "geometry.fill",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 20
//         }]
//     }, {
//         "featureType": "administrative",
//         "elementType": "geometry.stroke",
//         "stylers": [{
//             "color": "#000000"
//         }, {
//             "lightness": 17
//         }, {
//             "weight": 1.2
//         }]
//     }]
// };


//var map = new google.maps.Map(document.getElementById('map'), myOptions);

