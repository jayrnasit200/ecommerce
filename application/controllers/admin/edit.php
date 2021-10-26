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
          <h4>sub_Category:</h4>
        </div>
        <div class="form-body">
          <form method="post" enctype="multipart/form-data">
          
          	<div class="form-group">
              <label for="exampleInputEmail1"> category Name</label>
              <select name="cat_id" class="form-control">
                <option hidden>Select category_id</option>
                <?php 
                                    foreach($allcat as $row)
                                    {
                                ?>
                <option value="<?php echo $row->cat_id; ?>"><?php echo $row->name; ?></option>
                <?php
                     }
                ?>
              </select><?php echo form_error('cat_id');?>
              </div>
              
              <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" value="<?php echo set_value('name');?>"><?php echo form_error('name');?>
              </div>
              
              
                          <input type="submit" name="submit" class="btn btn-primary">

          
          </form>
        </div>
      </div>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>Category Details:</h4>
        </div>
        <div class="table-responsive bs-example widget-shadow">
          <table class="table table-bordered">
            <thead>
              <tr>
              	<th>Sr.No</th>
                <th>cat Name</th>
                <th>Name</th>
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
                <td><?php echo $row->cat_id;?></td>
                <td><?php echo $row->name;?></td>
                
              
             	<td><a href="<?php echo base_url();?>index.php/admin/sub_category/edit/<?php echo $row->sub_category_id;?>">Edit</a></td>
                <td><a href="<?php echo base_url();?>index.php/admin/sub_category/delete/<?php echo $row->sub_category_id;?>">Delete</a></td>
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
</body>
</html>