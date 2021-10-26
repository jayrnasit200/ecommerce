<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">

<div>
<label>Payment Type</label>
<input type="radio" name="type" value="COD">COD
<input type="radio" name="type" value="Online">Online
</div>



</form>
<?php 
foreach($alldata as $row)
{
?>
<input type="text" value="<?php echo $row->order_id?>"/>
<?php 
}
?>
</body>
</html>
