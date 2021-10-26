<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order</title>
<style>
h5
{
	margin-bottom: 30px;
}
.name
{
	 font-weight: bold;
}
.input
{
	width: 100%;
  padding: 6px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.submit
{
	width: 15%;
	background-color: #2fdab8;
	color: white;
	padding: 8px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}
.error
{
	color:#F00;
}
.table thead tr th
{
	text-align:center;
}
.table tbody tr td
{
	text-align:center;
}
.table tfoot tr th
{
	text-align:center;
}
</style>

</head>

<body>

<div class="container-fulid">

<div class="col-md-12">
 
 <?php
   if($this->session->flashdata('msg'))
   {
	   ?>
 <div class="alert alert-success" style="margin-top:10px;"><?php echo $this->session->flashdata('msg');?></div>
      <?php
   }
   ?>
 

 
 <div class="col-md-8">

<form method="post" class="form">

 <?php
 if($allorder)
 {
	 foreach($allorder as $row)
	 {
		 ?>
         
      
 
          <div class="col-md-6" style="margin-top:20px;">
           <div class="panel panel-success">
  <div class="panel-heading">Panel Heading</div>
          <div class="panel-body">
          <table width="100%">
             
             <tr>
             <th>Name : </th>
			 <td><?php echo $row->Full_name;?></td>
             </tr>
             
             <tr>
             <th>Mobile number :</th>
             <td> <?php echo $row->Mobile_number;?></td>
             </tr>
             
             <tr>
             <th>House No :</th> 
			 <td><?php echo $row->House_no;?></td>
             </tr>
             
             <tr>
             <th>Colony	: </th>
			 <td><?php echo $row->Colony;?></td>
             </tr>
             <tr>
             <th>Landmark : </th>
			 <td><?php echo $row->Landmark;?></td>
             </tr>
             
             <tr>
             <th>Town City	 :</th> 
			 <td><?php echo $row->Town_City;?></td>
             </tr>
             
             <tr>
             <th>State City	 :</th> 
			 <td><?php echo $row->State;?></td>
             </tr>
             
             <tr>
             <th>Address Type :</th> 
			 <td><?php echo $row->Address_Type;?></td>
             </tr>
             
             <tr>
             <th>Pincode :</th> 
			 <td><?php echo $row->Pincode;?></td>
             </tr>
             
             <tr>
             
			 <td colspan="2"><input type="submit" class="btn btn-success"/></td>
             </tr>
            
              
              
           </table>       
         </div>
       </div>      
             
          </div>
         <?php
	 }
 }
 
 ?>
<details>
 <summary>Add a new address</summary>
 <h5>Be sure to click "Deliver to this address" when you've finished.</h5>
 
 

<div class="name">Full name:</div>
<div><input type="text" class="input" name="Full_name" value="<?php echo set_value('Full_name');?>" /></div>
<div class="error"><?php echo form_error('Full_name');?></div>

<div class="name">Mobile number:</div>
<div><input type="text" class="input" name="Mobile_number" value="<?php echo set_value('Mobile_number');?>" maxlength="13" /></div>
<div class="error"><?php echo form_error('Mobile_number');?></div>

<div class="name">Pincode:</div>
<div><input type="number" class="input" name="Pincode"  maxlength="6" value="<?php echo set_value('Pincode');?>"/></div>
<div class="error"><?php echo form_error('Pincode');?></div>

<div class="name">Flat, House no., Building, Company, Apartment: </div>
<div><input type="text" class="input" name="House_no" value="<?php echo set_value('House_no');?>"/></div>
<div class="error"><?php echo form_error('House_no');?></div>

<div class="name">Area, Colony, Street, Sector, Village: </div>
<div><input type="text" class="input" name="Colony" value="<?php echo set_value('Colony');?>"/></div>
<div class="error"><?php echo form_error('Colony');?></div>

<div class="name">Landmark e.g. near apollo hospital: </div>
<div><input type="text" class="input" name="Landmark" value="<?php echo set_value('Landmark');?>"/></div>
<div class="error"><?php echo form_error('Landmark');?></div>

<div class="name">Town/City: </div>
<div><input type="text" class="input" name="Town_City" value="<?php echo set_value('Town_City');?>"/></div>
<div class="error"><?php echo form_error('Town_City');?></div>

<div class="name">State:</div>
<div><input type="text" class="input" name="State" value="<?php echo set_value('State');?>"/></div>
<div class="error"><?php echo form_error('State');?></div>

<h2>Additional Address Details</h2>
<h5>Preferences are used to plan your delivery. However, shipments can sometimes arrive early or later than planned.</h5>

<div class="name">Address Type:</div>
<div><select class="input" name="Address_Type" >
		<option hidden="hidden">Select Address Type</option>
		<option> Home (7 am – 9 pm delivery) </option>
        <option> Office/Commercial (10 AM - 6 PM delivery) </option>
	</select></div>
 <div class="error">   <?php echo form_error('Address_Type');?></div>	



  </div>
  
  
  <div class="col-md-4">

<?php 
$User=$this->session->userdata('Email');
$CartData=$this->dborder->GetAllCartData($User);?>
 <h1>Order Summary</h1>
 
     <table width="100%" class="table table-bordered">
     
        <thead>
               <tr>
                   <th>Product</th>
                   <th>Qty</th>
                   <th>Rate</th>
                   <th>Amount</th>
               </tr>
         </thead>      
               
          <tbody>     
               <?php
			     $Total=0;
			     foreach($CartData as $row)
				 {
					 $Total+=$row->amount;
					 $GetProData=$this->dborder->GetProData($row->Product_id);
					 ?>
                     <tr>
                        <td>
                        <input type="hidden" name="order_id[]">
                        <input type="hidden" name="Email" value="<?php echo $User;?>">
                        <input type="hidden" name="product_id[]" value="<?php echo $row->Product_id;?>">
                        <img src="<?php echo base_url();?>upload_img/product/<?php echo $GetProData->image;?>" width="50" height="50"> &nbsp; &nbsp; <?php echo $GetProData->name;?></td>
                        <td><input type="hidden" name="Qty[]" value="<?php echo $row->qty;?>"><?php echo $row->qty;?></td>
                        <td><input type="hidden" name="Rate[]" value="<?php echo $row->rate;?>"><?php echo $row->rate;?></td>
                        <td><input type="hidden" name="Amount[]" value="<?php echo $row->amount;?>"><?php echo $row->amount;?></td>
                     </tr> 
                     <?php
				 }
			   ?>
               
               
        </tbody>
        
          <tfoot>
                   <th colspan="3">Total</th>
                   <th><?php echo $Total;?></th>
          </tfoot>
        
     
     </table>
 


  </div>
  
  </div>
  <div style="margin-left:30px;"><input type="submit" class="submit"/></div>
</details>
</form>
  
  </div>
  
</body>
</html>