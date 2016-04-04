<html>
    <head>
        <title>Login Page</title>
    </head>

    <body>

    <?php

        echo '<p> This is a login page</p>';
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo '<br/> username: '.$username.'; password: '.$password.'<br/>';

        echo 'isset($username): '.isset($username).'<br/>';
        echo 'isset($nothere): '.isset($nothere).'<br/>';
        echo 'empty($username): '.empty($username).'<br/>';
        echo 'empty($nothere): '.empty($nothere).'<br/>';

    ?>

    </body>

</html>