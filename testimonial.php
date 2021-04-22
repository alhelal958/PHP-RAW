<?php
  require "include/header.php";
 
  $seelects = "SELECT * FROM `testimonial`";
  $selecsst_q = mysqli_query($db, $seelects);
 
  
  // $assoc = mysqli_fetch_assoc($q);    that was my big mistake
?>
 <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>
     
  <div class="sl-pagebody">
    <div class="sl-page-title">    
     <div class="container">
              <h2 class="text-center">Testimonial Part</h2>
      <div class="text-right">
        <a href="testimonial-add.php"> <i class="fas fa fa-plus"></i>Add </a>
      </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Review</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($selecsst_q as $key => $value): ?>
                      <tr>
                        <td><?= ++$key; ?></td>
                        <td><img src="upload/testimonial/<?= $value['image'];?>" alt="" width="60" height="60"></td>
                        <td><?= $value['review']; ?></td>
                        <td><?= $value['name']; ?></td>
                        
                        <td>
                         <!--  <a class="btn btn-primary" href="hello-message-edit.php?id=<?= $value['id'];?>">Edit</a> -->
                           <a class="btn btn-danger" href="testimonial-delete.php?id=<?= $value['id'];?>">Delete</a>

                        </td>
                      </tr>
                  <?php endforeach ?>
                  
                  
                </tbody>
              </table>
    </div>
  </div> 


 
<?php
  require "include/footer.php";
?>
                          <!-- <a class="btn btn-danger" href="user-delete.php?id=<?= $value['id'];?>">Delete</a> -->
      