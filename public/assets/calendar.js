$(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        editable:true,

        header:{
            left:'',
            center:'title',
            right:'prev,next'
        },
        events: 'http://localhost:8000/events',
        eventColor: 'yellow',
        dayClick: function(info){

           $('#eventForm').attr('action', $('#eventForm').attr('data-url'));
           $('#eventModal').modal('show');
        //   $('#formMethod').remove();

        },
        eventClick: function(info){
          $('#eventForm').attr('action', $('#eventForm').attr('data-url')+'/'+info.id);
          $('#eventModal').modal('show');
        //  $('#formMethod').remove();
        //  $('#eventForm').append('<input type="hidden" id="formMethod" name="_method" value="PUT" />')
           // alert('event click');
           // alert(info.id);
        }
  });
});
