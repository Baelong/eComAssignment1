
<html>
<head>
    <title><?= $name ?> view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        #container {
            display: flex;
            flex-direction: row; /* Reverse the direction to align content div to the right */
        }
        nav {
            width: 20%; /* Set the width of the nav */
            
        }
        #content {
            flex: 1; /* Take up the remaining space */
            padding: 20px; /* Add some padding for spacing */
        }
    </style>
</head>
<body>
    <div id='container'>
        <nav>
            <ul>
                <li><a href="/Main/landingPage">Landing Page</a></li>
                <li><a href="/Main/aboutUs">About us</a></li>
                <li><a href="/Main/contact_us">Contact us</a></li>
                <li><a href="/Main/read">see the messages we get</a></li>
            </ul>
        </nav>
        <div id='content'>
            <h1>AuraSync</h1>
            <h3>Welcome to AuraSync, A Web Application that allows you to book appointments with barbers and aesthetician. </h3>
            <p>we aim to to simplify the client/barber booking process and connect with industry professionals.</p>
        </div>
    </div>
</body>
</html>
