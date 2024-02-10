
<div >
  <h3>Customers Items</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Collage</th>
        <th class="text-center">Certification</th>
        <th class="text-center"> Duration</th>
        <th class="text-center"> Domain</th>

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

      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

 <!-- Trigger the modal with a button -->
 