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
                <li><a href="/Main/index">Landing Page</a></li>
                <li><a href="/Main/about_us">About us</a></li>
                <li><a href="/Contact/index">Contact us</a></li>
                <li><a href="/Contact/read">see the messages we get</a></li>
            </ul>
        </nav>
        <div id='content'>
            <h1>About Us</h1>
            <h3>see our incredible team of developers AKA the London Mice</h3>
            <table>
                <tr>
                    <td>
                    	<figure>
                    		<img src="resources/ali.jpg" height = '50%' width = '50%' />
                    		<figcaption>Ali Ilyas<figcaption>
                    
                   		 </figure>
                    </td>
                    <td>A passionate team member deeply focused on coding, 
                    with eyes fixed on the screen, surrounded by code snippets and diagrams.</td>
                </tr>
                <tr>
                    <td>
                    <figure>
                    		<img src="" height = '50%' width = '50%' />
                    		<figcaption>Junior<figcaption>
                    
                   		 </figure>
                    </td>
                    <td>A creative thinker brainstorming ideas, 
                    with a pencil in hand and a sketchbook full of innovative designs</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
