<DOCTYPE html>
<html>
    <head>
        <title>Database Connection Error</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="error-styles.css">
        <style>
            body{
	            background-color: #B3E3EA;
                font-family: 'Roboto', sans-serif;
                margin-top:30px
            }

            h1{
                font-size: 40px;
            }
            h4{
                font-size:30px;
            }
            img{
                height: 600px;
                margin-top: -60px;
            }
        </style>
    </head>

    <body>
        <center>
            <h1>We lost the connection to our database...</h1>
            <h4>Please try again later</h4>
            <img src="images/db-con-error.png"/>
        </center>
        <button onclick="history.back()" id="btnBack">Go Back</button>
    </body>

</html>