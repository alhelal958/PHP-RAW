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
          <h6 class="card-body-title text-center">MY Expereinces</h6>

        <form action="experience-add-update.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">FEATURE ITEM: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="FEATURE_ITEM" placeholder="Only Number Allow">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">ACTIVE PRODUCTS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="ACTIVE_PRODUCTS" placeholder="Only Number Allow">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">YEAR EXPERIENCE: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="YEAR_EXPERIENCE" placeholder="Only Number Allow">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">OUR CLIENTS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="OUR_CLIENTS" placeholder="Only Number Allow">
                </div>
              </div><!-- col-4 -->
            

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
         </form>





        </div><!-- card -->
    
<?php
  require "include/footer.php";
?>