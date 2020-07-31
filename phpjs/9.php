<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <script>
    var i=0;
    while(i<10){
        document.write("<li> 1 </li>");
        i=i+1;
    }
    </script>
    </ul>
    <?php
    $i=0;
    while($i<10){
        echo $i;
        $i=$i+1;
    }

    ?>
</body>
</html>