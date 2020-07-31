<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        list = new Array("one","two","three");
        document.write(list[0]);
        document.write(list.length);
    </script>
    <?php
        $list = array("one","two","three");
        echo $list[2];
        echo count($list);
    ?>
</body>
</html>