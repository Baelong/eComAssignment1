<html>
<head>
	<title>Contact Us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	

</head>
<body>
        <h1>Contact Us</h1>
            <ul>
                <li><a href="Main/index">Landing page</a></li>
                <li><a href="Main/about_us">About us</a></li>
                <li><a href="Contact/index">Contact us</a></li>
                <li><a href="Contact/read">See the messages we get</a></li>
            </ul>
        
        <h2>Contact Us</h2>
        <p>Wanna reach us? Write your email information and message in the following form and then submit:</p>
       <form method="post" action='/Contact/send_messages'>
    <table>
        <tr>
            <td><label for="email">Email address:</label></td>
            <td><input type="email" id="email" name="email" value="<?= isset($messageData->email) ? $messageData->email : '' ?>" required></td>
        </tr>
        <tr>
            <td><label for="message">Message:</label></td>
            <td><textarea id="message" name="message" rows="2" cols="50" required><?= isset($messageData->message) ? $messageData->message : '' ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="action" value="Send"></td>
        </tr>
    </table>
</form>

</body>
</html>