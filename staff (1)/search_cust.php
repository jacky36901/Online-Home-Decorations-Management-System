<?php 
include_once("../shares/db/mydatabase.inc");
include("top.php");
?>
 <head>
<style> body{
        background:url(images/q2.jpg) no-repeat top fixed ;
    
        background-size:cover;}

table{
                  
                   border-radius: 1em;
                   width: 500px;
	               height: 150px;
                   margin-left:0px;
                 
               }
               th {
                   
     background-color: black;
    color:antiquewhite;
    height: 40px;
}
    input[type=submit] ,input[type=reset]{
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 2px;
    cursor: pointer;
    float: right;
}

input[type=submit],input[type=reset]:hover {
    background-color: #45a049;
}
	input,select{
		border: 2px solod red;
		border-radius: 5px;
		width:150px;
		
	}
/*body
    {
        background-image:url(ad8.jpg);
        height: 800px;
    }*/
</style>
    </head>
    <br><br><br><br><br><br><br>
    <body>
    <div style="position:relative;left:520px;top:0px;border:groove;width:500px;height:150px;background-color:thistle" >
    <form method="post" action="print_cust.php">
<table style="position:relative;top:20px;left:40px;height:100px;width:400px;">
        <tr><td><font color="black"><b>FROM</b></font> </td>
<td><input type="date" name="txtStartDate"></td>
</tr>
<tr><td> <font color="black"><b>TO</b></font></td>
<td> <input type="date" name="txtEndDate"></td>
</tr>
    <tr><td><a style="position:relative;top:60px;left:150px;" href="allcust.php"><b><font size="4" color="black">View all Customers</font></b></a></td></tr>
    </center>  <tr>
      <tr>
<td><input style="position:relative;top:80px;left:150px;" type="submit" name="search" value="Generate"></td></tr>
          

       </table>
</form>
		</div> 
		