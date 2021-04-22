<?php
  require "include/header.php";
 
  
  $select = "SELECT * FROM `users` WHERE status = 1";
  $q = mysqli_query($db , $select);
  // $assoc = mysqli_fetch_assoc($q);    that was my big mistake
?>
 <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>
  <?php 
     $idd = $_SESSION['id'];
     $s = "SELECT * FROM `users` WHERE id = $idd";
     $qu = mysqli_query($db , $s);
     $as = mysqli_fetch_assoc($qu);
   ?>
   <?php if ($as['role'] == '2'): ?>
    <div class="sl-pagebody">
      <div class="sl-page-title">    
       <div class="container">
                <h2 class="text-center">ALL USERS</h2>
                <div class="text-success text-center">
                  <?php
                    if (isset($_SESSION['userupdated'])) {
                       echo $_SESSION['userupdated'];
                       unset($_SESSION['userupdated']);
                    }
                    ?>
                </div>
                <div class="text-danger text-center">
                  <?php
                    if (isset($_SESSION['delete'])) {
                       echo $_SESSION['delete'];
                       unset($_SESSION['delete']);
                    }
                  ?>
               </div>

                <table class="table" id="myTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>image</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($q as $key => $value): ?>
                        <tr>
                          <td><?= ++$key; ?></td>
                          <td><?= $value['name']; ?></td>
                          <td><?= $value['email']; ?></td>
                          <td>
                            <img width="50px" src="upload/<?= $value['image'];?>">
                          </td>
                          <td>
                            <?php 
                               if ($value['role']== 1) {
                                  echo "User";
                               }
                               elseif ($value['role']== 2) {
                                 echo "Employee";
                               }
                               elseif ($value['role']== 3) {
                                 echo "Admin";
                               }

                             ?>  
                           </td>
                          <td>
                            <a class="btn btn-primary" href="user-edit.php?id=<?= $value['id'];?>">Edit</a>
                            <button  data-id="<?= $value['id'];?>" onclick="" class="btn btn-danger UserDelete"> Delete </button>

                          </td>
                        </tr>
                    <?php endforeach ?>
                    
                    
                  </tbody>
                </table>
      </div>
    </div> 
     <?php elseif($as['role'] == '1'):?>
       <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Blank Page</h5>
       <h3 class="s1-pagebody">You ARE not authorized to see this </h3>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
     <?php elseif($as['role'] == '3'):?>
    <div class="sl-pagebody">
      <div class="sl-page-title">    
       <div class="container">
                <h2 class="text-center">ALL USERS</h2>
                <div class="text-success text-center">
                  <?php
                    if (isset($_SESSION['userupdated'])) {
                       echo $_SESSION['userupdated'];
                       unset($_SESSION['userupdated']);
                    }
                    ?>
                </div>
                <div class="text-danger text-center">
                  <?php
                    if (isset($_SESSION['delete'])) {
                       echo $_SESSION['delete'];
                       unset($_SESSION['delete']);
                    }
                  ?>
               </div>

                <table class="table" id="myTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>image</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($q as $key => $value): ?>
                        <tr>
                          <td><?= ++$key; ?></td>
                          <td><?= $value['name']; ?></td>
                          <td><?= $value['email']; ?></td>
                          <td>
                            <img width="50px" src="upload/<?= $value['image'];?>">
                          </td>
                          <td>
                            <?php 
                               if ($value['role']== 1) {
                                  echo "User";
                               }
                               elseif ($value['role']== 2) {
                                 echo "Employee";
                               }
                               elseif ($value['role']== 3) {
                                 echo "Admin";
                               }

                             ?>  
                           </td>
                          <td>
                            <a class="btn btn-primary" href="user-edit.php?id=<?= $value['id'];?>">Edit</a>
                            <button  data-id="<?= $value['id'];?>" onclick="" class="btn btn-danger UserDelete"> Delete </button>

                          </td>
                        </tr>
                    <?php endforeach ?>
                    
                    
                  </tbody>
                </table>
      </div>
    </div>
   </div>
   <?php endif ?>
   
    


  
  <script type="text/javascript">
   $('.UserDelete').click(function(){
    var id = $(this).attr("data-id");
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })

      .then((willDelete) => {

        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
          window.setTimeout(function(){
             window.location.href = 'user-delete.php?id='+id;
           },5000);
         
        } else {
          swal("Your imaginary file is safe!");
        }
});
   })
  </script>
      <script>
          $(document).ready( function () {
            $('#myTable').DataTable();
           } );
          
           $(function(){
            'use strict';

            $('.select2').select2({
              minimumResultsForSearch: Infinity
            });
          })
     </script>
     
<?php
  require "include/footer.php";
?>
                          <!-- <a class="btn btn-danger" href="user-delete.php?id=<?= $value['id'];?>">Delete</a> -->
      