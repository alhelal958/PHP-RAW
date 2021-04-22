<?php
  require "include/header.php";
 
  

  $id = $_GET['id'];
  
  $user_select = "SELECT * FROM `hello_message` WHERE id = $id";
  $user_select_query = mysqli_query($db, $user_select);
  $user_select_assoc = mysqli_fetch_assoc($user_select_query);
  
  
  
?>
 <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
      </nav>
         
      <div class="sl-pagebody">
        <h2 class="text-center" style="padding-bottom: 33px">Users Edit</h2>
        <form action="hello-message-edit-update.php?id=<?= $user_select_assoc['id'];?>" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="<?= $user_select_assoc['name'];?>" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Message:</label>
            <input type="text" class="form-control" value="<?= $user_select_assoc['message'];?>"  name="message">
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
  </div>  

<?php
  require "include/footer.php";
?>

      