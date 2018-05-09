<!-- strat prices content -->
    <div class="tab-pane fade show active" id="prices" role="tabpanel" aria-labelledby="prices-tab">
      <h5 class="alert alert-info text-center" role="alert">For information and help on prices and seasons,
        <a href="#"> please click here</a>
      </h5>
      <div class="row mt-4">
        <div class="col-3">
          <div class="box">
            <ul class="nav nav-tabs flex-column border-0">
              <li class="nav-item">
                <a class="nav-link active" id="price-lake-tab" data-toggle="tab" href="#price-lake" role="tab" aria-controls="price-lake"
                  aria-selected="false">price-lake</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="price-beach-tab" data-toggle="tab" href="#price-beach" role="tab" aria-controls="price-beach" aria-selected="false">price-beach</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="reward-management-tab" data-toggle="tab" href="#reward-management" role="tab" aria-controls="reward-management"
                  aria-selected="true">reward-management</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-9 tab-content">
          <?php include 'template/prices.lake.php' ?>
          <div class="tab-pane fade" id="price-beach" role="tabpanel" aria-labelledby="price-beach-tab">6</div>
          <div class="tab-pane fade" id="reward-management" role="tabpanel" aria-labelledby="reward-management-tab">6</div>
        </div>
      </div>
    </div>
    <!-- end prices content -->