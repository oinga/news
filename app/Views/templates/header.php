<!doctype html>
<title
<html>
    <head>
        <title>Codeigniter Tutorial</title>
        <style>
            a:link, a:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            }

            a:hover, a:active {
            background-color: red;
            }

            .mysubmit:link, 
            .mysubmit:visited, 
            #create:link, 
            #create:visited {
            background-color: #04AA6D;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            }
            
            .mysubmit:link, 
            .mysubmit:visited, 
            #create:hover, 
            #create:active {
            background-color: green;
            }
        </style>
</head>
<body>
    <?php //short hand for <?php echo $title ?>
    <h1><?= esc($title) ?></h1>