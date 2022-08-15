<?php
$sql        = "SELECT *FROM appointment WHERE Type ='1'";
$result     = $db_tm->sql_query($sql);
$rows       = $db_tm->sql_fetchrow($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/stylenews.css" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Prompt', sans-serif;

    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <section class="content-header">


    <!-- <div class="container-fluid">
        
      </div> -->

    <div id="external-events">
    </div>

    <br><br><br><br> <br>
    </div>
    <div class="card card-primary">

      <div class="card-body p-0">

        <div id="calendar"></div>
      </div>
  </section>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- fullCalendar 2.2.5 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/fullcalendar/main.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- Page specific script -->
  <script>
    $(function() {

      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function() {

          // create an Event Object (https://fullcalendar.io/docs/event-object)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0 //  original position after the drag
          })

        })
      }

      ini_events($('#external-events div.external-event'))

      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendar.Draggable;

      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');

      // initialize the external events
      // -----------------------------------------------------------------

      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
          };
        }
      });

      var calendar = new Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        //Random default events
        events: [{
            title: "ประชุมครั้งที่ 1",
            start: new Date(y - 1, m + 3, 19),
            allDay: true,
            backgroundColor: '#FCEE9E', //yellow
            borderColor: '#FCEE9E' //yellow
          },

          {
            title: "ประชุมครั้งที่ 2",
            start: new Date(y - 1, m + 4, 9),
            allDay: true,
            backgroundColor: '#E0C7EE', //Blue
            borderColor: '#E0C7EE' //Blue
          },

          {
            title: "ประชุมครั้ง ที่ 3",
            start: new Date(y, m - 5, 8),
            allDay: true,
            backgroundColor: '#80B7A2', //Primary (light-blue)
            borderColor: '#80B7A2' //Primary (light-blue)
          },

          {
            title: "ประชุมครั้ง ที่ 4",
            start: new Date(y, m - 4, 15),
            allDay: true,
            backgroundColor: '#7F867B', //Primary (light-blue)
            borderColor: '#7F867B' //Primary (light-blue)
          },
          {
            title: "ประชุมครั้ง ที่ 5",
            start: new Date(y, m - 3, 19),
            allDay: true,
            backgroundColor: '#B5B1C8', //Primary (light-blue)
            borderColor: '#B5B1C8' //Primary (light-blue)
          },

          {
            title: "ประชุมครั้งที่ 6",
            start: new Date(y, m - 2, 17),
            allDay: true,
            backgroundColor: '#E6C2BF', //Success (green)
            borderColor: '#E6C2BF' //Success (green)
          },

          {
            title: "ประชุมครั้งที่ 7",
            start: new Date(y, m - 1, 14),
            allDay: true,
            backgroundColor: '#B5B1C8', //Info (aqua)
            borderColor: '#B5B1C8' //Info (aqua)
          },

          {
            title: "ประชุมครั้งที่ 8",
            start: new Date(y, m, 12),
            backgroundColor: "#293242", //red
            borderColor: "#293242", //red
            allDay: true,
          },

          {
            title: "ประชุมครั้งที่ 9",
            start: new Date(y, m + 1, 16),
            allDay: true,
            backgroundColor: '#75464A', //yellow
            borderColor: '#75464A' //yellow
          },

          {
            title: "ประชุมครั้งที่ 10",
            start: new Date(y, m + 2, 13),
            allDay: true,
            backgroundColor: '#E8ABB5', //Blue
            borderColor: '#E8ABB5' //Blue
          },

        ],
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(info) {
          // is the "remove after drop" checkbox checked?
          if (checkbox.checked) {
            // if so, remove the element from the "Draggable Events" list
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        }
      });

      calendar.render();
      // $('#calendar').fullCalendar()

      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      // Color chooser button
      $('#color-chooser > li > a').click(function(e) {
        e.preventDefault()
        // Save color
        currColor = $(this).css('color')
        // Add color effect to button
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color': currColor
        })
      })
      $('#add-new-event').click(function(e) {
        e.preventDefault()
        // Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        // Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color': currColor,
          'color': '#fff'
        }).addClass('external-event')
        event.text(val)
        $('#external-events').prepend(event)

        // Add draggable funtionality
        ini_events(event)

        // Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
</body>
<footer>หมายเหตุ : แผนการประชุมคณะกรรมการกิจการสัมพันธ์ ประจำปีงบประมาณ 2565 อาจมีการเปลี่ยนแปลงตามมติที่ประชุม</footer>

</html>