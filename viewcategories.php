
<div >
  <h3>Customers Items</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Collage</th>
        <th class="text-center"> Certification</th>
        <th class="text-center"> Duration</th>
        <th class="text-center"> Domain</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from customers";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    
    <tr>
    <td><?=$count?></td>
      <td><?=$row["user_name"]?> 
      <td><?=$row["user_collage"]?></td>
      <td><?=$row["Certification"]?></td>
      <td><?=$row["user_duration"]?></td>
      <td><?=$row["Domain"]?></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="categoryDelete('<?=$row['user_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

 <!-- Trigger the modal with a button -->
 <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add User
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCustController.php" method="POST">
            <div class="form-group">
              <label for="user_name">User Name:</label>
              <input type="text" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <label for="user_collage">user collage:</label>
              <input type="text" class="form-control" name="user_collage" required>
            </div>
            <div class="form-group">
              <label for="Certification">Certification:</label>
              <input type="text" class="form-control" name="Certification" required>
            </div>
            <div class="form-group">
              <label for="user_duration">user duration:</label>
              <input type="text" class="form-control" name="user_duration" required>
            </div>
            <div class="form-group">
              <label for="Domain">user domain:</label>
              <input type="text" class="form-control" name="Domain" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   