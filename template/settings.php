<div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
  <h3 class="text-center">Your existing apartments</h3>
 <div class="row">
 <div class="col-8 offset-2">
   <table class="table table-hover table-sm box table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Surname</th>
        <th scope="col">Number of people</th>
        <th scope="col">Guest book page</th>
        <th scope="col">To edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>sea ​​view</td>
        <td>4</td>
        <td><a href="#">http://v462qg55.fewodu.de</a></td>
        <td>
            <button class="btn btn-info btn-sm btn-block">To edit</button>
        </td>
      </tr>
      <tr>
        <td>beach house</td>
        <td>4</td>
        <td><a href="#">http://ynhepd6m.fewodu.de</a></td>
        <td>
            <button class="btn btn-info btn-sm btn-block">To edit</button>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button class="btn btn-info btn-sm btn-block">Create a new apartement</button>
        </td>
      </tr>
      
    </tbody>
  </table>
  <h5 class="alert alert-info text-center" role="alert">For help on imports and exports,
        <a href="#"> please click here</a>
      </h5>
 </div>
 </div>
  <div id="settings-accordion">
  <?php include 'template/settings.lake.php' ?>
  <?php include 'template/settings.beach.php' ?>
  </div>
</div>