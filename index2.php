<?php
 session_start();
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
        echo "Хеллоу, $login <br><br>";
    } else {
        echo "Вы вышли ХаХа.";
    }
    ?>
<html>
    <body>
    <form action = "out.php" method = "post">
      <button type="submit">Выйти</button>
    </form>
    </body>
</html>