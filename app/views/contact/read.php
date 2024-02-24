<html>
<head>
	<title>Message List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	 <h1>Contact Us</h1>
            <ul>
                <li><a href="/Main/index">Landing page</a></li>
                <li><a href="/Main/about_us">About us</a></li>
                <li><a href="/Contact/index">Contact us</a></li>
                <li><a href="/Contact/read">See the messages we get</a></li>
            </ul>
	<div id='container'>
		<h1>Contact Us - Messages we get</h1>
		<table>
			<tr><th>email</th><th>message</th><th>IP</th></tr>

		<?php
		foreach($messageData as $msg){
			echo "<tr><td>$msg->email</td><td>$msg->message</td><td>$msg->IP</td></tr>";
		}
		?>
		</table>
	</div>
</body>
</html>