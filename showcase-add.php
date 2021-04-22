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
          <h6 class="card-body-title text-center">Add Showcase</h6>

        <form action="showcase-add-update.php" method="POST" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Work Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="work_name"  placeholder="Enter Work Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  placeholder="Enter Work Title">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Main Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="main_title"  placeholder="Enter your main title">
                </div>
              </div><!-- col-4 -->
             <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Main Summery: <span class="tx-danger">*</span></label>
                  <textarea name="main_summery" class="form-control"></textarea>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="upload_image" class="form-control-label">Thumbnail image: <span class="tx-danger">*</span></label><br>
                  <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                  name="thumbnail">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">thumbnial Preview: <span class="tx-danger">*</span></label></br>
                  <img id="blah" alt="your image" style="border-radius: 30%;width: 250px;height: 200px;" src="upload/<?= $assoc_edit_profile['image'];?>" />
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="upload_image" class="form-control-label">Main image: <span class="tx-danger">*</span></label><br>
                  <input type="file" onchange="document.getElementById('blahd').src = window.URL.createObjectURL(this.files[0])"
                  name="main_image">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Main Image Preview: <span class="tx-danger">*</span></label></br>
                  <img id="blahd" alt="your image" style="border-radius: 30%;width: 250px;height: 200px;" src="upload/<?= $assoc_edit_profile['image'];?>" />
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