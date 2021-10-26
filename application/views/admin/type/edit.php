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
                        <h4>Type:</h4>
                    </div>

                    <div class="form-body">
                        <form method="post" enctype="multipart/form-data">





                          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="Name" class="form-control" id="exampleInputusername1" placeholder="Name" name="name"  value="<?php echo $return->name;?>"> </div>
         </div>




                            

                           

                            <input type="Submit" name="submit" class="btn btn-primary">

                        </form>

                    </div>
                </div>
               
               
               <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Type Details:</h4>
                    </div>
                   <div class="table-responsive bs-example widget-shadow">
						
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                
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
                               
                                <td><a href="<?php echo base_url();?>index.php/admin/category/edit/<?php echo $row->type_id;?>">Edit</a></td>
                                <td><a href="<?php echo base_url();?>index.php/admin/category/delete/<?php echo $row->type_id;?>">Delete</a></td>
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