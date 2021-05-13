<?php
    include '../lib/session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <title> OSWTF - Team Fas </title>
    <script src="../script.js"></script>
</head>

<body>
    <header>
        <h1 class="title"><a href="main.php" class="main"> OSWTF - Team Fas </a></h1>
    </header>
    <hr size="1px">
    <ul class="log">
        <?php
            if ( $jb_login ) {
                echo $username;
                echo '님 &nbsp;&nbsp;&nbsp;'
        ?>
       <button style="font-size: 35px"><a href="../membership/logout.php"> 로그아웃 </a></button>
       <?php
            } else {
       ?>
       <button style="font-size: 35px"><a href="../membership/login.php"> 로그인 </a></button>
        <?php
            }
        ?>
    </ul>
    <div class="body">
        <div class="top">
            <p class="top"> OSWTF - Team Fas </p>
            <br>

        </div>

        <hr>
        <footer>
            * 참조 : Wikipidia
        </footer>
    </div>

    <!-- 여기까지 바디 -->

    <aside>
        <a href="#top">
            <button class="button">top</button>
        </a>
    </aside>

    <!-- 여기까지 어사이드 -->

</body>

</html>