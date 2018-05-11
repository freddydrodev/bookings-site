<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font/flaticon.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/pretty-checkbox.min.css">
  <link rel="stylesheet" href="css/fullcalendar.min.css" />
  <!-- <link rel="stylesheet" href="css/fullcalendar.print.css" /> -->
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <?php include './template/header.php' ?>

  <?php include './template/navbar.php' ?>

  <!-- start content container  -->
  <div class="tab-content p-3" id="myTabContent">

    <?php include './template/overview.php' ?>

    <?php include './template/calendar.php' ?>

    <?php include './template/bookings.php' ?>

    <?php include './template/guests.php' ?>

    <?php include './template/prices.php' ?>

    <?php include './template/template.php' ?>

    <?php include './template/guests-booking.php' ?>
    
    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">8</div>
  </div>
  <!-- end content container  -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/list.min.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>
  <!-- <script src="main.js"></script> -->
  <script>
    jQuery(document).ready(function () {
      $(".date-picker").datepicker({
        numberOfMonths: 3,
        minDate: -20,
        maxDate: "+1M +10D"
      });

      // page is now ready, initialize the calendar...

      $('#full-calendar').fullCalendar({
        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-03-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-03-01',
        },
        {
          title: 'Long Event',
          start: '2018-03-07',
          end: '2018-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-03-11',
          end: '2018-03-13'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T10:30:00',
          end: '2018-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-03-28'
        }
      ]
      })

    });
  </script>
</body>

</html>