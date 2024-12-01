<?php include("head.html")?>
<body>
<div class="book" style=" margin-left:auto; margin-right:auto; text-align:center; background-color:#FFCCCC;)">
<div class="form" style="padding-left:400px; padding-top:100px; width:1000px; height:400px; ">
<form action="connection.php" method="post">
<table cellpadding="10px"">
<tr><td> <label for="register">SERVICE</label></td>
<td> <select name="service" required >
<option>Dine In</option>
<option>TakeAway</option>
<option>Delivery</option>
</select></td></tr>
<tr><td> <label for="branch">BRANCH</label></td>
<td> <select name="branch" id="branch">
<option>Thanjavur</option>
<option>Kumbakonam</option>
<option>Trichy</option>
</select></td></tr>
<tr><td> <label for="cuisine">CUISINE</label></td>
<td> <select name="cuisine" id="cuisine">
<option>Indian</option>
<option>Italian</option>
<option>Korean</option>
<option>Chinese</option>
</select></td></tr>
<tr><td><label for="name">NAME</label></td>
<td><input name="name" id="name" type="text" size="20" required  /></td></tr>
<tr><td><label for="email">EMAIL</label></td>
<td><input type="email" id="email" name="email" /></td></tr>
<tr><td><label for="mobile">MOBILE</label></td>
<td><input name="mobile" id="mobile" size="10" type="number" /></td></tr>
<tr>
<td><button type="submit">Place order</button></td>
<td><button  type="reset">Cancel</button>
</td></tr>
</table>

</form></div>
</div>



</body>
<?php include("foot.html")?>

