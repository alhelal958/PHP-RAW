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
          <h6 class="card-body-title text-center">Edit Messages</h6>

        <form action="hello-message-add-update.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" placeholder="Enter Socials name">
                </div>
              </div><!-- col-4 -->
            
             
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Message: <span class="tx-danger">*</span></label>
                <!--   <input class="form-control" type="text" name="link" placeholder="Enter your message"> -->
                <textarea name="message" class="form-control"></textarea>
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