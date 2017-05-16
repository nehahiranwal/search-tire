<?php $this->load->view('header'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div class="vehicle_form">
	<h2> Company</h2>
	
<?php 

if (!empty($annunci)) 
{?>
<table>
  <thead>
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">Feature</th>
	 <th scope="col">Price/each</th>
	 
	<th scope="col">image</th>
	
    </tr>
  </thead>
  <tbody>
<?php
foreach($annunci as $row)
	{
	?>
	
    <tr>
      <td><?php echo $row->name;?></td>
	  <td><?php echo $row->discription;?></td>
	  <td>$<?php echo $row->price;?></td>
	  
	  <td><img src="<?php echo base_url();?>/upload/<?php echo $row->image;?>" alt=""/></td>
      
    </tr>
	<?php } } else{
		echo "<h2>Sorry ! No result Found.</h2>";
	}?>
</tbody>
</table>
</div>

<div class="col-lg-6 col-md-6" id="link">
<h3><a href="<?php echo base_url(); ?>index.php/vehicle/index">Search Tire</a></h3>

</div>

</div>
</div>
</div>
<?php $this->load->view('footer'); ?>

