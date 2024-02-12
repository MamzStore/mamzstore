<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userlist = file_get_contents('users.txt');
    $users = explode("\n", $userlist);

    foreach($users as $user) {
        $user_detail = explode("|", $user);

        if($user_detail[0] == $username && trim($user_detail[1]) == $password) {
            echo "Login successful!";
            header('Location:config.html');
        }
    }

    echo "USERNAME ATAU KATA SANDI SALAH";
}
?>