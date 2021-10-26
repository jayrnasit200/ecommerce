<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    
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
            
            
        <div class="col-md-3">    

            <div class="form-group">
             <label for="exampleInputEmail1">Model Number</label>
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Model Number" name="product_number" value="<?php echo $return->product_number ;?>"><?php
echo form_error('product_number');?></div>
             
              
              <div class="form-group">
             <label for="exampleInputEmail1">Name</label>
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name" value="<?php echo $return->name ;?>"><?php echo form_error('name');?></div>

              
              
              <div class="form-group">   
              <label for="exampleInputEmail1">categoryv Name</label>
              <select name="cat_id" class="form-control"> 
                <option hidden>Select category_id</option>
                <?php 
                                    foreach($allcat as $row)
                                    {
                    if($return->cat_id==$row->cat_id)
                                  {
                ?>
                <option value="<?php echo $row->cat_id; ?>"  selected="selected"><?php echo $row->name; ?></option>
                <?php
                     }
           else
           {
             ?>
                <option value="<?php echo $row->cat_id; ?>"><?php echo $row->name; ?></option>
                <?php
           }
                  }
             
                ?>
              </select><?php echo form_error('cat_id');?></div>

                <div class="form-group">
              <label for="exampleInputEmail1"> type Name</label>
              <select name="type_id" class="form-control">
                <option hidden>Select type_id</option>
                <?php 
                                    foreach($alltype as $row)
                                    {
                                ?>
                <option value="<?php echo $row->type_id; ?>" selected="selected"><?php echo $row->name; ?></option>
                <?php
                     }
                ?>
              </select><?php echo form_error('type_id');?>
              </div>
              
       </div>
       
       <div class="col-md-3">         
               
             
                <div class="form-group">
              <label for="exampleInputEmail1">sub category Name</label>
              <select name="subcat_id" class="form-control">
                <option hidden>Select category Name</option>
                <?php 
                                    foreach($allcat as $row)
                                    {
                    if($row->sub_category_id=$return->subcat_id)
                    {
                                ?>
                <option value="<?php echo $row->sub_category_id; ?>" selected="selected"><?php echo $row->name; ?></option>
                <?php
                                         }
            else
            {
              ?>
                          <option value="<?php echo $row->sub_category_id; ?>"><?php echo $row->name; ?></option>
                          <?php
            }
                  }
                ?>
              </select><?php echo form_error('sub_category_id');?>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="hidden" name="old_img" value="<?php echo $return->image;?>">
                 <input type="file" name="image" class="form-control" /><?php echo $return->image;?>
                  </div>
             
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="hidden" name="old_img" value="<?php echo $return->image1;?>">
                 <input type="file" name="image1" class="form-control" /><?php echo $return->image1;?>
                  </div>
            
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="hidden" name="old_img" value="<?php echo $return->image2;?>">
                 <input type="file" name="image2" class="form-control" /><?php echo $return->image2;?>
                  </div>
              
     </div>         
            
         <div class="col-md-3">     
              <div class="form-group">
                <label for="exampleInputPassword1">Image</label>
                <input type="hidden" name="old_img" value="<?php echo $return->image3;?>">
                 <input type="file" name="image3" class="form-control" /><?php echo $return->image3;?>
                  </div>
              
             
             <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" placeholder="Price" name="price" id="price" value="<?php echo $return->price ;?>" /><?php echo form_error('price');?></div>

              
              <div class="form-group">
                 <label for="exampleInputEmail1">Discount</label>
                 <input type="text" class="form-control"  onKeyup="calc();" id="dis" placeholder="Discount" name="discount" value="<?php echo $return->discount ;?>"><?php echo form_error('discount');
?></div>
              
              
              <div class="form-group">

                   <label for="exampleInputEmail1">Discount Price</label>
                   <input type="text" class="form-control"  id="dis_amt" placeholder="Discount Price" name="discount_price" value="<?php echo $return->discount_price ;?>">
                                                    <?php
echo form_error('discount_price');
?></div>
              
             </div>
              
                       <div class="col-md-3">     

             <div class="form-group">
                   <label for="exampleInputEmail1">Amount</label>
                   <input type="text" class="form-control" id="sell_rs" placeholder="Amount" name="sell_price"value="<?php echo $return->sell_price ;?>"><?php echo form_error('sell_price');?></div>

              
           
              <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Stock" name="stoke" value="<?php echo $return->stoke ;?>"><?php echo form_error('stoke');?></div>
     
              
            <div class="form-group">
                       <label for="exampleInputEmail1">Date</label>
                       <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Date" name="date" value="<?php echo $return->date ;?>"><?php echo form_error('date');?></div>

              
           </div>
              
              
            
                      <div class="col-md-6">     

               <div class="form-group">
                       <label for="exampleInputEmail1">Short Description</label>
                       <textarea class="form-control" id="exampleInputEmail1" placeholder="Short Description" name="short_description"><?php echo $return->short_description ;?></textarea><?php
echo form_error('short_description');?></div>

                
                </div>
           
            <div class="col-md-6">     

               <div class="form-group">
                       <label for="exampleInputEmail1">Description</label>
                       <textarea class="form-control" id="exampleInputEmail1" placeholder="Description" name="description"><?php echo $return->description ;?></textarea><?php
echo form_error('description');?></div>

                
                </div>
            
           <div class="col-md-6">        
              <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </div>  
            
          </form>
        </div>
      </div>
      <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
          <h4>product Details:</h4>
        </div>
        <div class="table-responsive bs-example widget-shadow">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Sr.No</th>
                <th>Model Num</th>
                <th>Name</th>
                <th>cat Name</th>
                <th>Subcat name</th>
                <th>type Name</th>
                <th>Image</th>
                <th>First Image</th>
                <th>Second Image</th>
                <th>Third Image</th>
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
                <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row->image1; ?>" width="70" height="70"></td>
                <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row->image2; ?>" width="70" height="70"></td>
                <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row->image3; ?>" width="70" height="70"></td>
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

</body>

</html>