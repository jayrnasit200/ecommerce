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
          <h4>slider :</h4>
        </div>
        <div class="form-body">
          <form method="post" enctype="multipart/form-data">
            
            <div>Name</div>
            <div><input type="text" class="form-control"  placeholder="enter Name"  value="<?php echo $return->name ;?>" name="name"/><?php echo form_error('name');?></div>
            
            <div>Image</div>
            <input type="hidden" name="old_img" value="<?php echo $return->image;?>">
            <div><input type="file" class="form-control"  name="image"/><?php echo $return->image;?></div>
            
            <div>
            <input type="submit"  name="submit" class="btn btn-primary"/>
            <input type="reset" />
            </div>
            
           </form>
        </div>
      </div>
   


<div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Category Details:</h4>
        </div>
        <div class="table-responsive bs-example widget-shadow">
          <table class="table table-bordered" border="1">
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
		foreach($alldata as $row)
		{
		$no=1;
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


</body>
</html>