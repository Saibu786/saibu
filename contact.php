<?php include("head.html")?>

<body><div class="contact">
<div class="map"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3097.8144432837303!2d79.138529!3d10.774864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baab9ffc135d841%3A0x84899823e6e2ed50!2sKFC!5e1!3m2!1sen!2sin!4v1732988310528!5m2!1sen!2sin" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="address"> 
<h4>ADDRESS:</h4>
<p>kamala subrmaniam Arcade,<br>petha perumal colony,<br>Trichy main road,<br>Thanjavur,<br>Tamilnadu - 613007.</p>
</div>
<hr />
<div class="feedback"> 
<form action="contactconn.php" method="post">
<table cellpadding="20px" style="color:#FFFFFF;"><tr><td>
<label>EMAIL</label></td>
<td><input type="email" name="email"></td></tr>
<tr><td><label>COMMENTS</label></td>
<td><textarea name="text" name="comment" placeholder="Enter Your Feedback"></textarea></td></tr>
<tr><td><button type="submit">SEND</button></td>
<td><button type="reset">CLEAR</button></td></tr>
</table>
</form>
</div>
</div>
</body>

<?php include("foot.html")?>