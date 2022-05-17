<DOCTYPE html>
<html>
    <head>
        <title>Database Connection Error</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="error-styles.css">
        <style>
            body{
	            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	            background-size: 400% 400%;
	            animation: gradient 10s ease infinite;
	            height: 100vh;
            }

            @keyframes gradient {
        	0% {
		        background-position: 0% 50%;
	        }
	        % {
		        background-position: 100% 50%;
	        }
	        100% {
		        background-position: 0% 50%;
	        }
            }   
            
            h1{
                font-size: 40px;
                color: #000;
                font-family: 'Roboto';
            }
        </style>
    </head>

    <body>
        <h1>We lost the connection to our database...M</h1>
        <h4>Please try again later</h4>
        <img src="images/db-con-error.png"/>
    </body>

</html>