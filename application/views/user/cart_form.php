<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

/*th

{
	padding-left:170px;
	border-bottom:2px solid #CCC;
}
td

{
	padding-left:170px;
	border-bottom:2px solid #CCC;
}
tr
{
 
}*/
.total
{
	border-bottom:hidden;
	padding-left:900px;
	 font-weight: 900;
}
.button {
  background-color: #2fdab8; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 10px;
  margin-top:30px;
  margin-left:920px;
}
.check
{
	color:#FFF;
}
</style>

<script>

$(document).ready(function(){

    update_amounts();
    $('.qty').change(function() {
        update_amounts();
    });
});


function update_amounts()
{
    var sum = 0.0;
    $('#myTable > tbody  > tr').each(function() {
        var qty = $(this).find('option:selected').val();
        var price = $(this).find('.price').val();
        var amount = (qty*price)
        sum+=amount;
        //$(this).find('.amount').text(''+amount);
    });
    //just update the total to sum    
}
function item_cart(cart_id,qty,price)
{
var amount=0;
	amount=parseInt(qty) * parseInt(price);
	
$.ajax({
	url:'<?php echo base_url();?>index.php/user/cart/update/',
	type:'POST',
	data:{cart_id:cart_id,
		     qty:qty,
			 amount:amount
			 },
	success: function(data){
			location.reload();
			//$(.cart_info).html(data);
		}
	
	});
}
</script>

<!--<script type="text/javascript">
function calc()
{
	var price=Number(document.getElementById('price').value);
	var qty=Number(document.getElementById('qty').value);
	
	ans=(price*qty);
	document.getElementById('total').value=ans;
	
	
	
}	

</script>-->
</head>


<body>

<div class="banner-bootom-w3-agileits">
	<div class="container">
    
    
	<?php 
	if($this->session->flashdata('msg'))
	{
		?>
        <div class="alert alert-success"> 
	  <?php echo $this->session->flashdata('msg');
	    ?>
        </div>
        <?php
	}
	?>
   

<form method="post">
<div>
	<table id="myTable" class="table table-bordered">
     <thead>
        <tr>
            <th>Sr.No</th>
       		<th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total amount</th>
            <th>Delete</th>
        </tr>
     </thead>
     
     <tbody>   
         <?php
		 
			  $no=1;
			  $Total=0;
		foreach($allcart as $row)
		{
		   $Prodata=$this->dbcart->GetAllProData($row->Product_id);
		   foreach($Prodata as $row1)
		   {
		    $Total+=$row->amount;
	   ?>
        <input type="hidden" name="product_id" value="<?php echo $row->Product_id;?>">
        <tr>
        	<td><?php echo $no++;?></td>
        	<td><?php echo $row1->name;?></td>
            <td><img src="<?php echo base_url();?>upload_img/product/<?php echo $row1->image; ?>" width="70" height="70"></td>
            
            <td>
			<input type="hidden" name="rate" class="price" value="<?php echo $row->rate;?>">
			<?php echo $row->rate;?></td>
            
            <td>
                 <select name="qty"  class="qty" onchange="item_cart(<?php echo $row->cart_id;?>,this.value,<?php echo $row->rate;?>)">
               
                <option value="1" <?php if($row->qty=='1'){echo "selected";}?>>1</option>
                <option value="2" <?php if($row->qty=='2'){echo "selected";}?>>2</option>
                <option value="3" <?php if($row->qty=='3'){echo "selected";}?>>3</option>
                <option value="4" <?php if($row->qty=='4'){echo "selected";}?>>4</option>
                <option value="5" <?php if($row->qty=='5'){echo "selected";}?>>5</option>
                </select>
   			</td>
            
          
            
            
             <td>
			 <input type="text" name="total_amount" id="total" readonly="readonly" style="border:none;" value="<?php echo $row->amount;?>">
			</td>
           <td class=""><a href="<?php echo base_url();?>index.php/user/cart/delete/<?php echo $row->cart_id;?>" class="fa  fa-trash-o" onclick="return confirm('Are You Sure Delete This Item')"></a></td>
        </tr>
        
        <?php
		   }
		}
		?>
        </tbody>
    </table>
    <div class="total">Total Amount : <?php echo $Total;?></div>
    
    <button class="button"><a href="<?php echo base_url();?>index.php/user/order" class="check">Proceed to checkout</a></button>	
    </div>

</form>

</div>
</div>

</body>
</html>