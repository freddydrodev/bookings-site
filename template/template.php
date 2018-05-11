<!-- strat template content -->
<div class="tab-pane fade" id="templates" role="tabpanel" aria-labelledby="templates-tab">
<h5 class="alert alert-info text-center" role="alert">For information and help on your templates and documents,
        <a href="#"> please click here</a>
      </h5>
      <div class="row mt-4">
        <div class="col-3">
          <div class="box">
            <ul class="nav nav-tabs flex-column border-0">
              <li class="nav-item">
                <a class="nav-link active" id="template-email-lake-tab" data-toggle="tab" href="#template-email-lake" role="tab" aria-controls="template-email-lake"
                  aria-selected="false">E-mail templates for lake view</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="template-pdf-lake-tab" data-toggle="tab" href="#template-pdf-lake" role="tab" aria-controls="template-pdf-lake" aria-selected="false">
                PDF templates  for lake view
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="template-file-lake-tab" data-toggle="tab" href="#template-file-lake" role="tab" aria-controls="template-file-lake"
                  aria-selected="true">File attachments  for lake view</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="template-email-beach-tab" data-toggle="tab" href="#template-email-beach" role="tab" aria-controls="template-email-beach"
                  aria-selected="false">E-mail templates for beach view</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="template-pdf-beach-tab" data-toggle="tab" href="#template-pdf-beach" role="tab" aria-controls="template-pdf-beach" aria-selected="false">
                PDF templates  for beach view
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="template-file-beach-tab" data-toggle="tab" href="#template-file-beach" role="tab" aria-controls="template-file-beach"
                  aria-selected="true">File attachments for beach view</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-9 tab-content">
          <?php include 'template/template.email.lake.php' ?>
          <?php include 'template/template.pdf.lake.php' ?>
          <?php include 'template/template.file.lake.php' ?>
          <?php include 'template/template.email.beach.php' ?>
          <?php include 'template/template.pdf.beach.php' ?>
          <?php include 'template/template.file.beach.php' ?>
        </div>
      </div>
</div>
    <!-- end template content -->