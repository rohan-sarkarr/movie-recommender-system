<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
        }
        
        a:hover {
            cursor: pointer;
        }
        
        body {
            font-weight: 300;
            font-size: 100%;
            background-image: url('../static/images/bgimg.jpg');
            line-height: 1.5;
            color: white;
        }
        
        .text-center {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .button {
            font-weight: 300;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            border: 1px solid #efefef;
            padding: 1rem;
            background: black;
            border-radius: 5px;
            margin-top: 30px;
            margin-left: 700px;
            align-items: center;
            position: relative;
        }
        
        ul {
            margin-top: 30px;
            font-size: 30px;
        }
        
        ul li {
            list-style-type: none;
        }
    </style>
</head>

<body style="color: white; margin-top: 250px;">

    <div class="text-center">
        <h1 style="text-shadow: 0 0 20px #fffb00; ">Sorry! Page not found. Possible reason(s):</h1>
        <ul>
            <li>Misspelled input.</li>
            <li>The movie name does not exist in the database.</li>
        </ul>
    </div>
    <a class="button" onClick="goBack()"><i class="fas fa-home"></i> Back</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</body>

</html>