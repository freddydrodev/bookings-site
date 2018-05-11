<!-- strat guest booking content -->
    
  <div class="tab-pane fade active show" id="guestbook" role="tabpanel" aria-labelledby="guestbook-tab">
    <h5 class="alert alert-info text-center" role="alert">For information and help on your booking website,
        <a href="#"> please click here</a>
      </h5>
      <div class="row mt-4">
        <div class="col-3">
          <div class="box">
            <ul class="nav nav-tabs flex-column border-0">
              <li class="nav-item">
                <a class="nav-link active" id="guests-booking-text-tab" data-toggle="tab" href="#guests-booking-text" role="tab" aria-controls="guests-booking-text"
                  aria-selected="false">Set texts and contents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="guests-booking-lake-tab" data-toggle="tab" href="#guests-booking-lake" role="tab" aria-controls="guests-booking-lake" aria-selected="false">
                Photos and photo texts for lake view
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="guests-booking-beach-tab" data-toggle="tab" href="#guests-booking-beach" role="tab" aria-controls="guests-booking-beach"
                  aria-selected="true">Photos and photo texts for beach house</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="guests-booking-calendar-tab" data-toggle="tab" href="#guests-booking-calendar" role="tab" aria-controls="guests-booking-calendar"
                  aria-selected="false">Include occupancy calendar and booking function in existing websites</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-9 tab-content">
          <?php include 'template/guests-booking.text.php' ?>
          <?php include 'template/guests-booking.lake.php' ?>
          <?php include 'template/guests-booking.beach.php' ?>
          <?php include 'template/guests-booking.calendar.php' ?>
        </div>
      </div>
    </div>
    <!-- end guest booking content -->
