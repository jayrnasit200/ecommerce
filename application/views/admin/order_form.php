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
          <h4>Sub Category:</h4>
        </div>
        <div class="form-body">

        <div class="table-responsive bs-example widget-shadow">
<table class="table table-bordered" id="tbl_oder" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Full name</th>
                                <th>Mobile number</th>
                                <th>Pincode</th>
                                <th>House no</th>
                                <th>Colony</th>
                                <th>Landmark</th>
                                <th>Town_City</th>
                                <th>State</th>
                                <th>Address Type</th>
                                <th>Tiam</th>
								<th>Date</th>
                                <th>product name</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Amount</th>
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
                                <td><?php echo $row->Email;?></td>
                                <td><?php echo $row->Full_name;?></td>
                                <td><?php echo $row->Mobile_number;?></td>
                                <td><?php echo $row->Pincode;?></td>
                                <td><?php echo $row->House_no;?></td>
                                <td><?php echo $row->Colony;?></td>
                                <td><?php echo $row->Landmark;?></td>
                                <td><?php echo $row->Town_City;?></td>
                                <td><?php echo $row->State;?></td>
                                <td><?php echo $row->Address_Type;?></td>
                                <td><?php echo $row->create_date;?></td>
                                <td><?php echo $row->date;?></td>
                                
                                <td><?php $proname=$this->dborder->GetproName($row->product_id);?>
                                <img src="<?php echo base_url();?>upload_img/product/<?php echo $proname->image;?>" width="50" height="50"> &nbsp; &nbsp; <?php echo $proname->name;?>
                                </td>
                                <td><?php echo $row->Qty;?></td>
                                <td><?php echo $row->Rate;?></td>
                                <td><?php echo $row->Amount;?></td>
                              
                            </tr>

                      

                        <?php
}
?>
                          </tbody>   
                        </table>
                        </div>
                        </div></div>
                        </div></div>
                        </div>
                        
                        <script>
      $(document).ready( function () {
    $('#tbl_oder').DataTable();
} );
      </script>
</body>
</html>