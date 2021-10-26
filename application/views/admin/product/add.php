<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <style>
.fast
{
	display:flex;
	margin:0 -10
}
.fast_1 .form-group{
	width:100%;
	padding:0 10px;	
}
.flex
{
	display:flex;
	height:auto !important;
}
.form-view table{
		display: block;
	}
	.form-flex{
		display:-webkit-box;
	    display:-ms-flexbox;
	    display:flex;
	    margin: 0 -7.5px;
	}
	.form_wrapper_1 .form-group{
		width: 100%;
		padding: 0 7.5px;
	}
</style>
<script type="text/javascript">
function calc()
{
	var price=Number(document.getElementById('price').value);
	var dis=Number(document.getElementById('dis').value);
	
	ans=(price*dis)/100;
	document.getElementById('dis_amt').value=ans;
	
	ans1=(price-ans);
    document.getElementById('sell_rs').value=ans1;  
	
}	

</script>

<script>
  var cats;
  function change_cat()
  {
	  cats=$('#cat').val();
	  $('#subcat').load('<?php echo base_url();?>index.php/admin/product/GetSubCat/'+cats);
  }
</script>

</head>

<body>


<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>product:</h4>
        </div>
        <div class="form-body">
          <form method="post" enctype="multipart/form-data">
            
            
           
              <div class="form-flex form_wrapper_1">
            <div class="form-group">
              <label for="exampleInputEmail1">Model Number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Model Number" name="product_number" value="<?php echo set_value('product_number');?>"><?php echo form_error('product_number');?></div>
             
              
              <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" value="<?php echo set_value('name');?>"><?php echo form_error('name');?>
              </div></div>
              
                <div class="form-flex form_wrapper_1">
              <div class="form-group">
              <label for="exampleInputEmail1"> category Name</label>
              <select name="cat_id" id="cat" class="form-control" onchange="change_cat();">
                <option hidden>Select category Name</option>
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
              <label for="exampleInputEmail1"> type Name</label>
              <select name="type_id" class="form-control">
                <option hidden>Select type Name</option>
                <?php 
                                    foreach($alltype as $row)
                                    {
                                ?>
                <option value="<?php echo $row->type_id; ?>" ><?php echo $row->name; ?></option>
                
                <?php
                     }
                ?>
              </select><?php echo form_error('type_id');?>
              </div></div>
              

                <div class="form-flex form_wrapper_1">
              <div class="form-group">
              <label for="exampleInputEmail1">Sub Name</label>
              <select name="subcat_id" id="subcat" class="form-control">
                <option hidden>Select sub category name</option>
                <?php 
            foreach($Allsub as $row)
                {
               ?>
                 <option value="<?php echo $row->sub_category_id;?>" ><?php echo $row->Name;?></option>
               <?php
                }
               ?>
            </select><?php echo form_error('subcat_id');?>
              </div>

            </div>
              <div class="form-flex form_wrapper_1">
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="file" name="image" class="form-control" placeholder="Image"/>
              </div> 
             
              <div class="form-group">
                <label for="exampleInputPassword1">First Image</label>
              <input type="file" name="simage[]" class="form-control" multiple="multiple" placeholder="Image1"/>
              </div> <?php echo form_error('simage');?>
            
              </div>

               <div class="form-flex form_wrapper_1">
              <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="text" class="form-control" placeholder="Price" name="price" id="price" value="<?php echo set_value('price');?>"><?php echo form_error('price');?>
              </div>
              <br>
              <div class="form-group">
              <label for="exampleInputEmail1">Discount</label>
              <input type="text" class="form-control"  onKeyup="calc();" id="dis" placeholder="Discount" name="discount" value="<?php echo set_value('discount');?>">
              <?php echo form_error('discount');?>
              </div></div>
              
              <div class="form-flex form_wrapper_1">
              <div class="form-group">
              <label for="exampleInputEmail1">Discount price</label>
              <input type="text" class="form-control"  id="dis_amt" placeholder="Discount price" name="discount_price" value="<?php echo set_value('discount_price');?>"><?php echo form_error('discount_price');?></div>
            

              <div class="form-group">
              <label for="exampleInputEmail1">Amount</label>
              <input type="text" class="form-control" id="sell_rs" placeholder="amount" name="sell_price" value="<?php echo set_value('sell_price');?>"><?php echo form_error('sell_price');?>
              </div></div>
              
             <div class="form-flex form_wrapper_1">
              <div class="form-group">
              <label for="exampleInputEmail1">Stock</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="stock" name="stoke" value="<?php echo set_value('stoke');?>"><?php echo form_error('stoke');?>
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date" value="<?php echo set_value('date');?>"><?php echo form_error('date')?> 
              </div></div>
              
          
                <div class="form-flex form_wrapper_1">
               <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea class="form-control" id="exampleInputEmail1" placeholder="Description" name="description"><?php echo set_value('description');?></textarea><?php echo form_error('description');?>
				</div>
                
                       
				<div class="form-group">
             <label for="exampleInputEmail1">Short Description</label>
             <textarea class="form-control" id="exampleInputEmail1" placeholder="short Description" name="short_description"><?php echo set_value('short_description');?></textarea><?php echo form_error('short_description');?></div></div>
             
                    
              <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
            </div>
           
            
          </form>
        </div>
      </div>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>product Details:</h4>
        </div>
        <div class="table-responsive bs-example widget-shadow">
          <table class="table table-bordered" id="tbl_pro">
            <thead>
              <tr>
              	<th>Sr.No</th>
                <th>Model Num</th>
                <th>Name</th>
                <th>cat Name</th>
                <th>Subcat name</th>
                <th>type Name</th>
                <th>Image</th>
                <th>Second Image</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Discount Price</th>
                <th>Amount</th>
                <th>Stock</th>
                <th>Descr</th>
                <th>Short Descr</th>
                <th>Date</th>
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
                <td><?php echo $row->product_number;?></td>
                <td><?php echo $row->name;?></td>
                <td><?php $CatName=$this->dbproduct->GetCatName($row->cat_id);
				           echo $CatName->name;?></td>
                <td><?php $subCatName=$this->dbproduct->GetsubeName($row->subcat_id);
				           echo $subCatName->Name;?></td>
          
           <td><?php $typeName=$this->dbproduct->GettypeName($row->type_id);
				           echo $typeName->name;?></td>
                <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row->image; ?>" width="70" height="70"></td>
                <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row->simage; ?>" width="70" height="70"></td>
                
                <td><?php echo $row->price;?></td>
                <td><?php echo $row->discount;?></td>
                <td><?php echo $row->discount_price;?></td>
                <td><?php echo $row->sell_price;?></td>
               
                <td><?php echo $row->stoke;?></td>
                <td><?php echo $row->description;?></td>
                <td><?php echo $row->short_description;?></td>
                <td><?php echo $row->date;?></td>
                <td><a href="<?php echo base_url();?>index.php/admin/product/edit/<?php echo $row->product_id;?>">Edit</a></td>
                <td><a href="<?php echo base_url();?>index.php/admin/product/delete/<?php echo $row->product_id;?>">Delete</a></td>
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
    $('#tbl_pro').DataTable();
} );
      </script>
</body>
</html>