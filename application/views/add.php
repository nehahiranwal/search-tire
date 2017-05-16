<?php $this->load->view('header'); ?>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function formValidation()
      {
      
         if( document.myForm.make.value == '')
         {
            document.getElementById('errmake').innerHTML = " Enter Value ";;
            document.myForm.make.focus() ;
            return false;
		 } 
		 if( document.myForm.model.value == '')
         {
            document.getElementById('errmodel').innerHTML = " Enter Model ";;
            document.myForm.make.focus() ;
            return false;
		 } 
		 if( document.myForm.year.value == '' || document.myForm.year.value.length != 4 )
         {
            document.getElementById('erryear').innerHTML = " Please provide a year in the format ####. ";
            document.myForm.make.focus() ;
            return false;
		 } 
		  if( document.myForm.body.value == '')
         {
            document.getElementById('errbody').innerHTML = " Enter Value ";;
            document.myForm.make.focus() ;
            return false;
		 }
		 if( document.myForm.size.value == '')
         {
            document.getElementById('errsize').innerHTML = " Enter Tire Size ";;
            document.myForm.make.focus() ;
            return false;
		 }
		  return( true );
		 }
   </script>      
 <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div class="vehicle_form">
	<h2>ADD TIRES & WHEELS </h2>
<form method="POST" onSubmit="return(formValidation());" action="<?php echo base_url();?>index.php/vehicle/add" enctype="multipart/form-data" name="myForm">

<label>Make</label>
<input type="text" name="make" /><span id="errmake"></span>
<br />
<label>Model</label>
<input type="text" name="model" /><span id="errmodel"></span>
<br />
<label>Year</label>
<input type="text" name="year" /><span id="erryear"></span>
<br />
<label>Body</label>
<input type="text" name="body" /><span id="errbody"></span>
<br />
<label>Tire Size</label>
<input type="text" name="size" /><span id="errsize"></span>

<br />
<input type="submit" class="btn" value="Add vehicle">
</form>
</div>

<div class="col-lg-6 col-md-6" id="link">
<h3><a href="<?php echo base_url(); ?>index.php/vehicle/index">Search Tire</a>|</h3>
<h3><a href="<?php echo base_url(); ?>index.php/company/index">Add Company</a><h3>
</div>

</div>
</div>
</div>
<?php $this->load->view('footer'); ?>
