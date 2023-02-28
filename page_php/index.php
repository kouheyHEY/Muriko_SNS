<?php
	echo "aaa";
?>

<html>

<head>
</head>

<body>

    <!-- ヘッダ部分 -->
    <header>
    </header>

    <!-- メイン部分 -->
    <main>
        <div id="loginForm">
            <form action="index.php" method="POST" autocomplete="off">
                <p>ようこそ</p>
                <p><input type="text" name="userName"></p>
                <p id="loginButton"><input type="submit" name="login" value="ログイン" class="miniButton">
                <input type="submit" name="guestLogin" value="ゲストでログイン" class="miniButton">
                </p>
            </form>
        </div>

    </main>
</body>

</html>