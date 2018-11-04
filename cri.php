<form method="post" name="form1" id="form1" enctype="multi" action="<?php $PHP_SELF ?>">

<input name="frm_title" type="text" id="frm_title" size="50" />

<input type="file" id="uploadedfile" name="file"/>

<textarea name="frm_desc" id="frm_desc" cols="47" rows="5"></textarea>

<input name="form_posted" type="hidden" value="true" />

<input name="btn_save" type="submit" class="bg-blue" value="Save and Continue" /> 
</form> 

<?php 
if(isset($_POST['form_posted'])){ 

$name = $_FILES['file']['tmp_name']; 
print $name; 
//print_r($_FILES);

//if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
//print 'file uploaded'; 
// 
} 
?> 





aoVjei5s8h4-xRcuWrpfOguvGPD2cW5KEo8r3KfJjh		
