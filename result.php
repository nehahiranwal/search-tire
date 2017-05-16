
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div class="vehicle_form">
	<h2> TIRES & WHEELS FOR YOUR VEHICLE</h2>
	<?php $this->load->database();
$query = $this->db->query("select * from vehicle where vehicle='" .$_POST['vehicle']. "' AND make = '" .$_POST['make']. "' AND model='" .$_POST['model']. "'  AND year='" .$_POST['year']. "' "); ?>
<?php
 
if($query->num_rows()> 0)
{?>
<table>
  <thead>
    <tr>
      <th scope="col">Vehicle</th>
      <th scope="col">make</th>
	<th scope="col">model</th>
	<th scope="col">year</th>
	<th scope="col">standard Tire Size</th>
	<th scope="col">image</th>
	<th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
<?php
while($row = $query->row_array())
	{
	?>
	
    <tr>
      <td><?php echo $row['vehicle'];?></td>
      <td><?php echo $row['make'];?></td>
      <td><?php echo $row['model'];?></td>
      <td><?php echo $row['year'];?></td>
	  <td><?php echo $row['size'];?></td>
	  <td><img src="images/<?php echo $row['image'];?>" alt=""/></td>
	  <td><a href="detail.php?size=<?php echo $row['size'];?>">Click Here</td>
    </tr>
	<?php } } else{
		echo "<h2>Sorry ! No result Found.</h2>";
	}?>
</tbody>
</table>
</div>
</div>
</div>
</div>


