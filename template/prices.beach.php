<div class="tab-pane fade" id="price-beach" role="tabpanel" aria-labelledby="price-beach-tab">
<h3 class="mb-4">Seasonal table for beach house</h3>
  <table class="table table-hover table-sm box table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">
          Season Name
        </th>
        <th scope="col">from</th>
        <th scope="col">to</th>
        <th scope="col">first night</th>
        <th scope="col">following night</th>
        <th scope="col">week</th>
        <th scope="col">Min booking</th>
        <th scope="col">To edit</th>
        <th scope="col">copy</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button class="btn btn-info btn-sm btn-block">Create a new season</button>
        </td>
      </tr>
    </tbody>
  </table>
  <h3 class="mb-4">Basic rates for all seasons</h3>
  <form method="post" action="#">
  <table class="box table table-hover table-sm box table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Power</th>
            <th scope="col">Price (€)</th>
            <th scope="col">option</th>
            <th scope="col">For guest booking form?</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Basic price per night </td>
            <td><input class="form-control" value="75.0"/></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Cleaning</td>
            <td><input class="form-control" value="75.0"/></td>
            <td>
              Mandatory? <br />
              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio-8" checked/>
                <div class="state p-success">
                    <label>Yes</label>
                </div>
              </div>

              <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio-8">
                  <div class="state p-danger">
                      <label>No</label>
                  </div>
              </div>
            </td>
            <td>
              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio7" checked>
                <div class="state p-success">
                    <label>Yes</label>
                </div>
              </div>

              <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio7">
                  <div class="state p-danger">
                      <label>No</label>
                  </div>
              </div>
            </td>
          </tr>
          <tr>
              <td>booking fee</td>
              <td>
                <input class="form-control" value="75.0" />
              </td>
              <td></td>
              <td>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio-6" checked>
                  <div class="state p-success">
                    <label> Yes</label>
                  </div>
                </div>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio-6">
                  <div class="state p-danger">
                    <label> No</label>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td>cot</td>
              <td>
                <input class="form-control" value="75.0" />
              </td>
              <td></td>
              <td>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio5" checked>
                  <div class="state p-success">
                    <label> Yes</label>
                  </div>
                </div>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio5">
                  <div class="state p-danger">
                    <label> No</label>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td>high chair</td>
              <td>
                <input class="form-control" value="75.0" />
              </td>
              <td></td>
              <td>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio-4" checked>
                  <div class="state p-success">
                    <label> Yes</label>
                  </div>
                </div>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio-4">
                  <div class="state p-danger">
                    <label> No</label>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
              <td>Bed sheets towels</td>
              <td>
                <input class="form-control" value="75.0" />
              </td>
              <td></td>
              <td>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio3" checked>
                  <div class="state p-success">
                    <label> Yes</label>
                  </div>
                </div>
                <div class="pretty p-default p-round p-smooth">
                  <input type="radio" name="radio3">
                  <div class="state p-danger">
                    <label> No</label>
                  </div>
                </div>
              </td>
          </tr>
          <tr>
            <td>
              <label>Extra1 (dog, beach chair, etc)</label>
              <input class="form-control" value="75.0" />
            </td>
            <td>
              <input class="form-control" value="75.0" />
            </td>
            <td>
              <select class="custom-select">
                <option selected>flat-rate</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </td>
            <td>
              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio-2" checked>
                <div class="state p-success">
                  <label> Yes</label>
                </div>
              </div>

              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio-2">
                <div class="state p-danger">
                  <label> No</label>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <label>Extra2 (dog, beach chair, etc)</label>
              <input class="form-control" value="75.0" />
            </td>
            <td>
              <input class="form-control" value="75.0" />
            </td>
            <td>
              <select class="custom-select">
                <option selected>flat-rate</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </td>
            <td>
              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio1" checked>
                <div class="state p-success">
                  <label> Yes</label>
                </div>
              </div>

              <div class="pretty p-default p-round p-smooth">
                <input type="radio" name="radio1">
                <div class="state p-danger">
                  <label> No</label>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-success btn-lg">Save</button>
  </form>
  
</div>