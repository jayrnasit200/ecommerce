<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Slider :</h4>
        </div>
        <div class="form-body">
          <form method="post" enctype="multipart/form-data">
            
            <div>Name</div>
            <div><input type="text" class="form-control"  placeholder="enter Name" name="name"/><?php
echo form_error('name');?></div>
            
            <div>Image</div>
            <div><input type="file" class="form-control"  name="image"/></div>
            
            <div>
            <input type="submit"  name="submit" class="btn btn-primary"/>
          
            </div>
            
           </form>
        </div>
      </div>
   
<div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Slider Details:</h4>
        </div>
        <div class="table-responsive bs-example widget-shadow">
          <table class="table table-bordered" border="1" id="tbl_slider">
            <thead>
              <tr>
              	<th>Sr.No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
			  $no=1;
		foreach($alldata as $row)
		{
		
	   ?>
              <tr>
              	<td><?php echo $no++;?></td>
                
                <td><?php echo $row->name;?></td>
				<td><img src="<?php echo base_url();?>upload_img/slider/<?php echo $row->image; ?>" width="70" height="70"></td>
                
               <td><a href="<?php echo base_url();?>index.php/admin/slider/edit/<?php echo $row->slider_id;?>">Edit</a></td>
                <td><a href="<?php echo base_url();?>index.php/admin/slider/delete/<?php echo $row->slider_id;?>">Delete</a></td>
              </tr>
              <?php
}
?>
            </tbody>
          </table>
     </div>
      </div>
    </div>
  </div>
</div>
<script>
      $(document).ready( function () {
    $('#tbl_slider').DataTable();
} );
      </script>
</body>
</html>