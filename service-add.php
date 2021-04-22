<?php
  require "include/header.php";

 
?>
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blank Page</h5>
          <p>This is a starter page</p>
        </div><!-- sl-page-title -->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title text-center">Edit service</h6>

        <form action="service-add-update.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter service name">
                </div>
              </div><!-- col-4 -->
            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select name="icon" class="form-control">
                    <option>Select Socials Icon</option>
                    <option value="fab fa-react">Creative Design</option>
                    <option value="fab fa-free-code-camp">UNLIMITED FEATURES</option>
                    <option value="fal fa-desktop">ULTRA RESPONSIVE</option>
                    <option value="fal fa-lightbulb-on">CREATIVE IDEAS</option>
                    <option value="fal fa-edit">EASY CUSTOMIZATION</option>
                    <option value="fal fa-headset">SUPPER SUPPORT</option>
                  </select>     
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">summery: <span class="tx-danger">*</span></label>
                  <textarea name="summery" class="form-control"></textarea>
                  <!-- <input class="form-control" type="text" name="summery" placeholder="Enter Socials Link"> -->
                </div>
              </div><!-- col-4 -->
              
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
         </form>





        </div><!-- card -->
    
<?php
  require "include/footer.php";
?>