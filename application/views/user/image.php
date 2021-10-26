<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" id="upload_multiple_image" enctype="multipart/form-data">

                 
              
                
                <div class="form-group">
             <div> <label for="exampleInputEmail1">Select product_id</label></div>
              <select name="product_id" class="form-control">
                <option hidden>Select product name</option>
                <?php 
            foreach($Allpro as $row)
                {
               ?>
                 <option value="<?php echo $row->product_id;?>"><?php echo $row->name;?></option>
               <?php
                }
               ?>
            </select>
                
                 
                <div>image</div>
                <div><input type="file" name="image[]" multiple="multiple" ></div>
                
               <br />
                <div><input type="submit" name="submit"></div>
    </form>
    
    
  <table align="center" border="1">
       <tr>
          <th>Sr.No</th>
          <th>stutus</th>
          <th>is_created</th>
          <th>is_deleted</th>
          <th>product_id</th>
          <th>image</th>
          
      </tr>
       
       <?php
   $no=1;
   foreach($Alldata as $row)
   {
   ?>
           <tr>
               <td><?php echo $no++;?></td>
               <td><?php echo $row->stutus;?></td>
               <td><?php echo $row->is_created;?></td>
               <td><?php echo $row->is_deleted;?></td>
               <td><?php echo $row->product_id;?></td>
               <td><?php echo $row->image;?></td>
               </tr>
               <?php
   }
   ?>
               </table>
</body>
</html>