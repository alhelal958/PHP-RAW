<?php
  require "include/header.php";

  $id = $_SESSION['id'];
  $update = "SELECT * FROM users WHERE id = $id";
  $query_update = mysqli_query($db, $update);
  $assoc_edit_profile = mysqli_fetch_assoc($query_update);
  $_SESSION['id'] = $assoc_edit_profile['id'];
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
          <h6 class="card-body-title text-center">Password Change</h6>

        <form action="change-password-update.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Old Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="oldpassword" value="" placeholder="Old Password">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">New Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="newpassword" value="" placeholder="New Password">
                </div>
              </div>
             <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" name="confirmpassword" value="" placeholder="Confirm Password">
                </div>
              </div>
            </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
         </form>





        </div><!-- card -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<?php
  require "include/footer.php";
?>