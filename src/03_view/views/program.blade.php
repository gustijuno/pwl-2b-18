<?php
    echo $page
?>
<html>
@include('layouts.header')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <style>
            body{
        font-size: 50px;
        }
        </style>
    </head>
    <body>
        <h1><a href='<?php echo $url ?>'><button type="button" class="btn btn-primary">Program</button></a></h1>
    </body>
    <footer>
        <script type="text/javascript" src="/js/app.js"></script>
    </footer>
</html>