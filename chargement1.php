<?php include"header.php" ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bootstrap-select usability tests</a>
    </div>
  </div>
</nav>

<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Large222222222 Select (liveSearch enabled, container: 'body')</label>
      <select class="selectpicker" multiple data-max-options="2">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Barbecue</option>
</select>
      <div class="col-lg-5">
        <label>Standard</label>
        <select class="selectpicker form-control" id="number" data-container="body" data-live-search="true" title="Select a number" data-hide-disabled="true"></select>
      </div>

      <div class="col-lg-5">
        <label>Multiple (no virtualScroll)</label>
        <select multiple class="selectpicker form-control" id="number-multiple" data-container="body" data-live-search="true" title="Select a number" data-hide-disabled="true" data-actions-box="true" data-virtual-scroll="false"></select>
      </div>
    </div>
  </form>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Large Select (liveSearch disabled)</label>

      <div class="col-lg-5">
        <label>Standard</label>
        <select class="selectpicker form-control" id="number2" data-live-search="true" title="Select a number" data-hide-disabled="true"></select>
      </div>

      <div class="col-lg-5">
        <label>Multiple</label>
        <select class="selectpicker form-control" id="number2-multiple" data-live-search="true" title="Select a number" data-hide-disabled="true" data-actions-box="true" multiple></select>
      </div>
    </div>
  </form>

  <hr>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Basic"111111 (liveSearch disabled)</label>
      <select class="selectpicker" multiple data-max-options="2">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Barbecue</option>
</select>
      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control">
          <option>cow</option>
          <option data-subtext="option subtext">bull</option>
          <option data-divider="true"></option>
          <option class="get-class" disabled>ox</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option>ASD</option>
            <option selected>Bla</option>
            <option>Ble</option>
          </optgroup>
        </select>
      </div>
    </div>
  </form>

  <hr>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Basic" (liveSearch enabled)</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
          <option>cow</option>
          <option data-subtext="option subtext">bull</option>
          <option class="get-class" disabled>ox</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option>ASD</option>
            <option selected>Bla</option>
            <option>Ble</option>
          </optgroup>
        </select>
      </div>
    </div>
  </form>

  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic2" class="col-lg-2 control-label">"Basic" (multiple, maxOptions=1)</label>

      <div class="col-lg-10">
        <select id="basic2" class="show-tick form-control" multiple>
          <option>cow</option>
          <option>bull</option>
          <option class="get-class" disabled>ox</option>
          <optgroup label="test" data-subtext="another test">
            <option>ASD</option>
            <option selected>Bla</option>
            <option>Ble</option>
          </optgroup>
        </select>
      </div>
    </div>
  </form>

  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="maxOption2" class="col-lg-2 control-label">multiple, show-menu-arrow, maxOptions=2</label>

      <div class="col-lg-10">
        <select id="maxOption2" class="selectpicker show-menu-arrow form-control" multiple data-max-options="2">
          <option>chicken</option>
          <option>turkey</option>
          <option disabled>duck</option>
          <option>goose</option>
        </select>
      </div>
    </div>
  </form>

  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group form-group-lg">
      <label for="error" class="col-lg-2 control-label">error</label>

      <div class="col-lg-10 error">
        <select id="error" class="selectpicker show-tick form-control">
          <option>pen</option>
          <option>pencil</option>
          <option selected>brush</option>
        </select>
      </div>
    </div>
  </form>

  <hr>
  <form class="form-horizontal" role="form">
    <div class="form-group has-error form-group-lg">
      <label class="control-label col-lg-2" for="country">error type 2</label>

      <div class="col-lg-10">
        <select id="country" name="country" class="form-control selectpicker">
          <option>Argentina</option>
          <option>United State</option>
          <option>Mexico</option>
        </select>

        <p class="help-block">No service available in the selected country</p>
      </div>
    </div>
  </form>

  <hr>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <select class="selectpicker" multiple data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
            <optgroup label="filter1">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
            <optgroup label="filter2">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
            <optgroup label="filter3">
              <option>option1</option>
              <option>option2</option>
              <option>option3</option>
              <option>option4</option>
            </optgroup>
          </select>
        </div>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="q">

          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

    </div>
    <!-- .container-fluid -->
  </nav>

  <hr>
  <select id="first-disabled" class="selectpicker" data-hide-disabled="true" data-live-search="true">
    <optgroup disabled="disabled" label="disabled">
      <option>Hidden</option>
    </optgroup>
    <optgroup label="Fruit">
      <option>Apple</option>
      <option>Orange</option>
    </optgroup>
    <optgroup label="Vegetable">
      <option>Corn</option>
      <option>Carrot</option>
    </optgroup>
  </select>

  <hr>
  <select id="first-disabled2" class="selectpicker" multiple data-hide-disabled="true" data-size="5">
    <option>Apple</option>
    <option>Banana</option>
    <option>Orange</option>
    <option>Pineapple</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
  </select>
  <button id="special" class="btn btn-default">Hide selected by disabling</button>
  <button id="special2" class="btn btn-default">Reset</button>
  <p>Just select 1st element, click button and check list again</p>

  <hr>
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <select class="form-control selectpicker">
      <option>One</option>
      <option>Two</option>
      <option>Three</option>
    </select>
  </div>

  <hr>
  <div class="input-group">
    <span class="input-group-addon">@</span>
    <select class="form-control selectpicker" data-mobile="true">
      <option>One</option>
      <option>Two</option>
      <option>Three</option>
    </select>
  </div>
  <p>With <code>data-mobile="true"</code> option.</p>

  <hr>
  <select id="done" class="selectpicker" multiple data-done-button="true">
    <option>Apple</option>
    <option>Banana</option>
    <option>Orange</option>
    <option>Pineapple</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
    <option>Apple2</option>
    <option>Banana2</option>
    <option>Orange2</option>
    <option>Pineapple2</option>
  </select>

  <hr>

  <div class="form-group">
    <label for="tokens">Key words (data-tokens)</label>
    <select id="tokens" class="selectpicker form-control" multiple data-live-search="true">
      <option data-tokens="first">I actually am called "one"</option>
      <option data-tokens="second">And me "two"</option>
      <option data-tokens="last">I am "three"</option>
    </select>
  </div>

  <hr>
  <form class="form-inline">
    <div class="form-group">
      <label class="col-md-1 control-label" for="lunchBegins">Lunch (Begins search):</label>
    </div>
    <div class="form-group">
      <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select a lunch ...">
        <option>Hot Dog, Fries and a Soda</option>
        <option>Burger, Shake and a Smile</option>
        <option>Sugar, Spice and all things nice</option>
        <option>Baby Back Ribs</option>
        <option>A really really long option made to illustrate an issue with the live search in an inline form</option>
      </select>
    </div>
  </form>
</div>

<?php include"footer.php" ?>