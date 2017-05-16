<?php $this->load->view('header'); ?>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function formValidation()
      {
      
         if( document.companyform.company.value == '')
         {
            document.getElementById('errccompany').innerHTML = " Enter Company Name ";;
            document.companyform.company.focus() ;
            return false;
		 } 
		 if( document.companyform.price.value == '')
         {
            document.getElementById('errcprice').innerHTML = " Enter Price ";;
            document.companyform.price.focus() ;
            return false;
		 } 
		 if( document.companyform.discription.value == '' )
         {
            document.getElementById('errcdiscription').innerHTML = "Write Feature Of Tire and Company";
            document.companyform.discription.focus() ;
            return false;
		 } 
		  if( document.companyform.pic.value == '')
         {
            document.getElementById('errcpic').innerHTML = " Choose Tire Image ";;
            document.companyform.make.focus() ;
            return false;
		 }
		 if( document.companyform.size.value == '')
         {
            document.getElementById('errcsize').innerHTML = " Select Tire Size ";;
            document.companyform.size.focus() ;
            return false;
		 }
		  if( document.companyform.year.value == '')
         {
            document.getElementById('errcyear').innerHTML = " Select Year";;
            document.companyform.year.focus() ;
            return false;
		 }
		  if( document.companyform.make.value == '')
         {
            document.getElementById('errcmake').innerHTML = " Select Make";;
            document.companyform.make.focus() ;
            return false;
		 }
		  if( document.companyform.model.value == '')
         {
            document.getElementById('errcmodle').innerHTML = " Select Tire Model ";;
            document.companyform.model.focus() ;
            return false;
		 }
		  return( true );
		 }
   </script>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div class="vehicle_form">
	<h2>ADD Company</h2>
<form method="POST" onSubmit="return(formValidation());" action="<?php echo base_url();?>index.php/company/add" enctype="multipart/form-data" name="companyform">
<label>Company Name</label>
<input type="text" name="company" /><span id="errccompany"></span>
<br />
<label>Price/each</label>
<input type="text" name="price" /><span id="errcprice"></span>
<br />
<label>Discription </label>
<textarea name="discription"></textarea><span id="errcdiscription"></span>
<br />
<label>Tire Image</label>
<input type="file" name="pic" id="tire_img"/><span id="errcpic"></span>
<br />
<label>Tire Size</label>

<?php $this->load->database();
$query = $this->db->query("select * from vehicle"); ?>
	<select name="size" id="">
<option value="">Select</option>
<?php foreach ($query->result_array() as $row) {?>
<option value="<?php echo $row['size']; ?>">
<?php echo $row['size']; ?></option>
<?php }  ?>
</select><span id="errcsize"></span>
<br />
<label>Year</label>
<select name="year" id="">
<option value="">Select</option>
<?php foreach ($query->result_array() as $row) {?>
<option value="<?php echo $row['year']; ?>">
<?php echo $row['year']; ?></option>
<?php }  ?>
</select><span id="errcyear"></span>
<br />
<label>Make</label>
<select name="make" id="">
<option value="">Select</option>
<?php foreach ($query->result_array() as $row) {?>
<option value="<?php echo $row['make']; ?>">
<?php echo $row['make']; ?></option>
<?php }  ?>
</select><span id="errcmake"></span>
<br />
<label>Model</label>
<select name="model" id="">
<option value="">Select</option>
<?php foreach ($query->result_array() as $row) {?>
<option value="<?php echo $row['model']; ?>">
<?php echo $row['model']; ?></option>
<?php }  ?>
</select><span id="errcmodle"></span>


<br />
<input type="submit" class="btn" value="Add Company">
</form>
</div>
<div class="col-lg-6 col-md-6" id="link">
<h3><a href="<?php echo base_url(); ?>index.php/vehicle/show">Add Tire</a>|</h3>
<h3><a href="<?php echo base_url(); ?>index.php/vehicle/index">Search Tire</a><h3>
</div>
</div>
</div>
</div>

<?php $this->load->view('footer'); ?>