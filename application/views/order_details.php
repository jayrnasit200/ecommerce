<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
 <style>
 body{ 
   
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
	margin-top:50px;
	margin-bottom:50px;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
</style>

<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>

</head>

<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">

<?php
  
$User=$this->session->userdata('Email');
$CartData=$this->dborder->GetAllCartData($User);
if($CartData)
{
?>
 

<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Login</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Delivery Address</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Order Summary</p>
        </div>
        
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Payment Option</p>
        </div>
        
    </div>
</div>


<form method="post">
    <div class="row setup-content" id="step-1" style="margin-bottom:50px;">
        <div class="col-xs-12">
            <div class="col-md-12">
            
            <div class="panel panel-default">
            
              <div class="panel panel-heading">Login Details</div>
              
              <div class="panel panel-body">
            
              <?php
			     echo $user= $this->session->userdata('Email');
			  ?>
                <input type="hidden" name="Email" value="<?php echo $user;?>">
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
          
          </div>  
            
        </div>    
            
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                
                
      <div class="col-md-6" style="margin-top:0px;">          
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
   
</details>
</div>

 <?php
 if($allorder)
 {
	 foreach($allorder as $row)
	 {
		 ?>
         
      
 
          <div class="col-md-6" style="margin-top:0px;">
           <div class="panel panel-success">
  <div class="panel-heading">Panel Heading</div>
          <div class="panel-body">
          <table width="100%">
             
             <tr>
             <th>Name : </th>
			 <td><input type="hidden" name="Full_name" value="<?php echo $row->Full_name;?>"><?php echo $row->Full_name;?></td>
             </tr>
             
             <tr>
             <th>Mobile number :</th>
             <td><input type="hidden" name="Mobile_number" value="<?php echo $row->Mobile_number;?>"> <?php echo $row->Mobile_number;?></td>
             </tr>
             
             <tr>
             <th>House No :</th> 
			 <td><input type="hidden" name="House_no" value="<?php echo $row->House_no;?>"><?php echo $row->House_no;?></td>
             </tr>
             
             <tr>
             <th>Colony	: </th>
			 <td><input type="hidden" name="Colony" value="<?php echo $row->Colony;?>"><?php echo $row->Colony;?></td>
             </tr>
             <tr>
             <th>Landmark : </th>
			 <td><input type="hidden" name="Landmark" value="<?php echo $row->Landmark;?>"><?php echo $row->Landmark;?></td>
             </tr>
             
             <tr>
             <th>Town City	 :</th> 
			 <td><input type="hidden" name="Town_City" value="<?php echo $row->Town_City;?>"><?php echo $row->Town_City;?></td>
             </tr>
             
             <tr>
             <th>State City	 :</th> 
			 <td><input type="hidden" name="State" value="<?php echo $row->State;?>"><?php echo $row->State;?></td>
             </tr>
             
             <tr>
             <th>Address Type :</th> 
			 <td><input type="hidden" name="Address_Type" value="<?php echo $row->Address_Type;?>"><?php echo $row->Address_Type;?></td>
             </tr>
             
             <tr>
             <th>Pincode :</th> 
			 <td><input type="hidden" name="Pincode" value="<?php echo $row->Pincode;?>"><?php echo $row->Pincode;?></td>
             </tr>
             
            
            
              
              
           </table>       
         </div>
       </div>      
             
          </div>
         <?php
	 }
 }
 
 ?>

            </div>
             <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
               

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
			     foreach($CartData as $row1)
				 {
					 $Total+=$row1->amount;
					 $GetProData=$this->dborder->GetProData($row1->Product_id);
					 ?>
                     <tr>
                        <td>
                        <input type="hidden" name="order_id[]">
                        <input type="hidden" name="Email" value="<?php echo $User;?>">
                        <input type="hidden" name="product_id[]" value="<?php echo $row1->Product_id;?>">
                        <img src="<?php echo base_url();?>upload_img/product/<?php echo $GetProData->image;?>" width="50" height="50"> &nbsp; &nbsp; <?php echo $GetProData->name;?></td>
                        <td><input type="hidden" name="Qty[]" value="<?php echo $row1->qty;?>"><?php echo $row1->qty;?></td>
                        <td><input type="hidden" name="Rate[]" value="<?php echo $row1->rate;?>"><?php echo $row1->rate;?></td>
                        <td><input type="hidden" name="Amount[]" value="<?php echo $row1->amount;?>"><?php echo $row1->amount;?></td>
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
               <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            
        </div>
    </div>
    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                
               <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Online Pay Now</button>
	</div>
        	</div>
</form>
<?php
}
else
{
	echo "Cart is Empty";
}
?>
</div>
</div>
</div>
</div>
</body>
</html>
