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
          <h6 class="card-body-title text-center">Edit Education Profile</h6>

        <form action="education-add-update.php" method="POST">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Year: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="year" placeholder="Enter Pass Year">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" placeholder="Enter Education Title">
                </div>
              </div><!-- col-4 -->
            
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">progress: <span class="tx-danger">*</span></label>
                   <input type="range" min="1" max="100" name="progress" value="50" class="slider form-control" id="myRange">
                  <!-- <input class="form-control" type="text" name="progress" placeholder="Enter Your percentage"> -->
                </div>
              </div><!-- col-4 -->
              
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
         </form>
        </div><!-- card -->

        <style>
          .slidecontainer {
            width: 100%;
          }

          .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
          }

          .slider:hover {
            opacity: 1;
          }

          .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
          }

          .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
          }
          </style>
    
<?php
  require "include/footer.php";
?>