<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--상황에 따라 유연한 프로그래밍이 좋은 것이다. -->
    <script>
    list = new Array("임요한","임요하1","이효한")
    i=0;
    while(i<4){
        document.write(list[i])
        i++;
    }
    </script>
    <script>
    list = new Array("임요한","임요하1","이효한")
    i=0;
    while(i<list.length){
        document.write(list[i])
        i++;
    }
    </script>
    <?php
    $list = array("dy","glks0","dfgg");
    $i=0;
    while( $i < count($list)){
        echo $list[$i];
        $i=$i+1;
    }
    ?>
</body>
</html>