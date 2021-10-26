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
                        <h4>Category:</h4>
                    </div>

                    <div class="form-body">
                        <form method="post" enctype="multipart/form-data">
                        
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Category Name" name="name" value="<?php echo $return->name ;?>">
                                
                                <?php echo form_error('name');?>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                             <input type="hidden" name="old_img" value="<?php echo $return->image;?>">
                             <input type="file" name="image" class="form-control" /><?php echo $return->image;?>

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
                                <th>No</th>
                                <th>category Name</th>
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
                                <td>
                                    <?php echo $no++ ;?>
                                </td>
                                <td>
                                    <?php echo $row->name;?>
                                </td>
                                <td><img src="<?php echo base_url();?>upload_img/category/<?php echo $row->image; ?>" width="70" height="70"></td>
                                <td><a href="<?php echo base_url();?>index.php/admin/category/edit/<?php echo $row->cat_id;?>">Edit</a></td>
                                <td><a href="<?php echo base_url();?>index.php/admin/category/delete/<?php echo $row->cat_id;?>">Delete</a></td>
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