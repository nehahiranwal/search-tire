
<?php $this->load->view('header'); ?>
<script>
$('document').ready(function(){
	$("#state1").css({ 'border': '2px solid #ff4141' });
$('#state2').attr('disabled', 'disabled');
$('#state3').attr('disabled', 'disabled');
$('#state4').attr('disabled', 'disabled');
$('#state5').attr('disabled', 'disabled');
$('#state1').change(function () {
		 $("#state1").css({ 'border': '' });
		 $("#state2").css({ 'border': '2px solid #ff4141' });
        $('#state2').removeAttr('disabled');
    });
	$('#state2').change(function () {
      $("#state2").css({ 'border': '' });
	  $("#state3").css({ 'border': '2px solid #ff4141' });
        $('#state3').removeAttr('disabled');
		
    });
	$('#state3').change(function () {
        $("#state3").css({ 'border': '' });
	  $("#state4").css({ 'border': '2px solid #ff4141' });
        $('#state4').removeAttr('disabled');
    });
	$('#state4').change(function () {
		$("#state4").css({ 'border': '' });
	 
        $('#state5').removeAttr('disabled');
    });
	
	});
function sendForm(){
 $.ajax({
type: "POST",
url: "<?php echo base_url(); ?>index.php/vehicle/user_data_get",
data: $("#my_form").serialize(),
dataType: 'json', 
cache: false,
 success: function(data){
		console.log(data);
		if(data == false){
			
			$('#result').append('<div class="div-container"><div class="container"><div class="row"><div class="col-lg-12 col-md-12"><div class="vehicle_form"><h2>Sorry! ! No result Found</h2></div></div></div></div>');
		}else{
		  $.each(data,function()
                    {
                        var htmlText = '';

            for ( var key in data ) {
                htmlText += '<div class="div-container"><div class="container"><div class="row"><div class="col-lg-12 col-md-12"><div class="vehicle_form"><h2> TIRES & WHEELS FOR YOUR VEHICLE</h2><table><thead><tr><th>make</th><th>model</th><th>year</th><th>standard Tire Size</th><th>Body</th><th>Detail</th></tr></thead><tbody>';
                htmlText += '<tr><td>' + data[key].make + '</td>';
                htmlText += '<td>' + data[key].model + '</td>';
                htmlText += '<td>' + data[key].year + '</td>';
                htmlText += '<td> ' + data[key].size + '</td>';
                htmlText += '<td>' + data[key].body  + '</td>';
				htmlText +='<td><a href="<?php echo base_url(); ?>index.php/company/get?size='+data[key].size+'">Click Here</a></td></tr></tbody></table></div></div></div></div>';
                htmlText += '</div>';
            }

            $('#result').html(htmlText);
                        
                    });
		}
		// $('#result').html(reponse);
//window.location = "result.php";		
	}
});
}
</script>

 <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div class="vehicle_form">
	<h2>FIND TIRES & WHEELS FOR MY VEHICLE</h2>
<form method="POST" id="my_form">
<?php $this->load->database();
$query = $this->db->query("select * from vehicle"); ?>

<label>Make</label>
<select name="make" id="state1" >
<option value="">Select</option>

<?php foreach($query->result_array() as $output){?>
<option value="<?php echo $output['make']; ?>">
<?php echo $output['make']; ?></option>
<?php }  ?>

</select>
<br />
<label>Model</label>
<select name="model" id="state2">
<option value="">Select</option>
<?php foreach($query->result_array() as $output){?>
<option value="<?php echo $output['model']; ?>">
<?php echo $output['model']; ?></option>
<?php }  ?>
</select>
<br />
<label>Year</label>
<select name="year" id="state3">
<option value="">Select</option>
<?php foreach($query->result_array() as $output){?>
<option value="<?php echo $output['year']; ?>">
<?php echo $output['year']; ?></option>
<?php }  ?>
</select>
<br />
<label>body</label>
<select name="body" id="state4">
<option value="">Select</option>
<?php foreach($query->result_array() as $output){?>
<option value="<?php echo $output['body']; ?>">
<?php echo $output['body']; ?></option>
<?php }  ?>
</select>
<br />
<input type="button" class="btn" value="search" onclick="sendForm()" id="state5">
</form>
</div>

<div class="col-lg-6 col-md-6" id="link">
<h3><a href="<?php echo base_url(); ?>index.php/vehicle/show">Add Tire</a>|</h3>
<h3><a href="<?php echo base_url(); ?>index.php/company/index">Add Company</a><h3>
</div>

</div>
</div>
</div>
<div id="result">

</div>

<?php $this->load->view('footer'); ?>

