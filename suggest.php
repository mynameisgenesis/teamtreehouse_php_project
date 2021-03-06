<?php 

$pageTitle = "Suggest a Media Item"; 

$section = "suggest";

include ("includes/header.php"); ?>

<div class="section page">
	<div class="wrapper">
		<h1>Suggest a Media Item</h1>
		<p>If you think there is something that I&rsquo;m missing let me know!</p>
		<form method="post" action="process.php">
		<table>
			<tr>
				<th><label for="name">Name: </label></th>
				<td><input type="text" id="name" name="name"/></td>
			</tr>
			<tr>
				<th><label for="email">Email: </label></th>
				<td><input type="text" id="email" name="email"/></td>
			</tr>
			<tr>
				<th><label for="details">Suggest Item Details: </label></th>
				<td><textarea name="details" id="details"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="Send">
		</form>
	</div>
</div>

<?php include("includes/footer.php"); ?>