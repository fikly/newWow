<!DOCTYPE html>
<html>
<head> 
</head>


<body>
	
<div id="page-wrap">

		<div id="contact-area">
			
			<form method="post" action="page.php?mod=kontak" id="contacts">
				<label for="Name">Name:</label>
				<input type="text" name="name" id="Name" />
				
				<label for="City">City:</label>
				<input type="text" name="city" id="City" />
	
				<label for="Email">Email:</label>
				<input type="text" name="email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			
			<div style="clear: both;"></div>
			 
		
		</div>
	
</div>



</body>
</html>

