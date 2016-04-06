<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db_practice_php", "root", "pass");
?>

<html>
<head>
    <title>This is a database page</title>
</head>
<body>

<?php

    if ($pdo -> exec("INSERT INTO TB_STUD(id, name) VALUES('230803198106150317', 'Simon Yang')")) {
        echo 'successful';
    } else {
        echo 'Failed';
    }

?>

</body>
</html>
