function nights( nights ) { 
  $('.rooms_day').load('./bookings/rooms_day.html');
//  alert( $('.rooms_day').html);
}
//$(alert("hi"))
$(document).ready(function() { 
//  alert($('#nights_selected').length + ' elements!');
  $('#nights_selected').change(function() {
    nights($(this).val());
  });
  $("#arriving").datepicker();
});

