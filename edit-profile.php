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
          <h6 class="card-body-title text-center">Edit Profile</h6>

        <form action="edit-profile-update.php" method="POST" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="<?= $assoc_edit_profile['name'];?>" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="<?= $assoc_edit_profile['email'];?>" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="upload_image" class="form-control-label">Upload image: <span class="tx-danger">*</span></label><br>
                  <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                  name="profile_image">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Image Preview: <span class="tx-danger">*</span></label></br>
                  <img id="blah" alt="your image" style="border-radius: 30%;width: 250px;height: 200px;" src="upload/<?= $assoc_edit_profile['image'];?>" />
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