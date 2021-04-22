<?php
  require "include/header.php";
 
  $selects = "SELECT * FROM `services` WHERE status = 1";
  $selecst_q = mysqli_query($db, $selects);
 
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
              <h2 class="text-center">ALL Services</h2>
      <div class="text-right">
       <a href="service-add.php"> <i class="fas fa fa-plus"></i>Add </a>
      </div>
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>icon</th>
                    <th>summery</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($selecst_q as $key => $value): ?>
                      <tr>
                        <td><?= ++$key; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><i class="<?= $value['icon'];?>"></i></td>
                        <td><?= $value['summery']; ?></td>
                        <td>
                         <!--  <a class="btn btn-primary" href="social-edit.php?id=<?= $value['id'];?>">Edit</a> -->
                           <a class="btn btn-danger" href="social-delete.php?id=<?= $value['id'];?>">Delete</a>

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
      