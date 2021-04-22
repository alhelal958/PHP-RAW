<?php
  require "include/header.php";
 
  $sselects = "SELECT COUNT(*) as total,id,address, phone,email FROM `contact`";//sob data neya lage
  $sselecst_q = mysqli_query($db, $sselects);
  $assoc = mysqli_fetch_assoc($sselecst_q);
 
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
              <h2 class="text-center">Contact</h2>
      <div class="text-right">
      <?php if ($assoc['total'] == 0): ?>
        <a href="contact-add.php"> <i class="fas fa fa-plus"></i>Add </a>
      <?php endif ?>
       
      </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>address</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sselecst_q as $key => $value): ?>
                      <tr>
                        <td><?= ++$key; ?></td>
                        <td><?= $value['address']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['phone']; ?></td>
                        
                        <td>
                           <a class="btn btn-danger" href="contact-delete.php?id=<?php echo $value['id'];?>">Delete</a>
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
      