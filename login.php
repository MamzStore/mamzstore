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
----admin-----
<?php
session_start();
if ($_POST['username'] === 'admin' && $_POST['password'] === '123') {
  $_SESSION['loggedin'] = true;
  header('Location: config.html');
} else {
  echo 'Invalid login credentials.';
}
-----imam-----
if ($_POST['username'] === 'imam' && $_POST['password'] === '123') {
  $_SESSION['loggedin'] = true;
  header('Location: config.html');
} else {
  echo 'Invalid login credentials.';
}
?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: masuk.php');
  exit;
}
?>