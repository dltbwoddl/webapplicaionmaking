<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 함수는 코드의 복잡도를 줄이는 정리도구이다. -->
<body>
    <h1>javascript</h1>
        <script>
            function a(input){
                return(input+1);
            }
            document.write(a(1));//built in function
            prompt(a(1));//built in function
            a(2);
            a(3);
            a(4);
        </script>
    <h1>php</h1>
        <?php
            function a($input){
                return $input+1;
            }
            echo a(2);
        ?>
        
</body>
</html>