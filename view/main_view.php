<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/check_word.js"></script>
    <script src="js/logout.js"></script>
    <title>English</title>
</head>
<body>
<div class="conteiner">
    <h1>Проверка знаний английских слов</h1>
    <table class="main-table">
        <tr>
            <td class="table-title">English</td>
            <td class="table-title">Russian</td>
        </tr>
        <?php
        printf('<tr>
                        <td rowspan="5" id="word_check" id_check="%d" class="rus">%s</td>
                        <td class="eng"><input type="radio" name="eng" id_word="%d">%s</td>
                    </tr>',$words[$num_check]['id'], $words[$num_check]['eng'], $words[0]['id'], $words[0]['rus']);
        for ($i = 1, $count = count($words); $i < $count; $i++) {
            printf('<tr><td class="eng"><input type="radio" name="eng" id_word="%d">%s</td></tr>',$words[$i]['id'], $words[$i]['rus']);
        }
        ?>
    </table>
    <table class="test-info">
        <tr>
            <th colspan="2">Статистика теста</th>
        </tr>
        <tr>
            <td>Слов показано</td>
            <td id="info_show_words"><?=$show_words?></td>
        </tr>
        <tr>
            <td>Слов осталось</td>
            <td><?=$remain_words?></td>
        </tr>
        <tr>
            <td>Кол-во попыток</td>
            <td id="info_answers"><?=$num_answers?></td>
        </tr>
    </table>
    <div class="user-info" <?=$user_display?>>
        <table  >
            <tr>
                <th colspan="2">Статистика пользователя</th>
            </tr>
            <tr>
                <td>Имя</td>
                <td><?=$user['login']?></td>
            </tr>
            <tr>
                <td>Кол-во тестов</td>
                <td><?=$user['count_test']?></td>
            </tr>
            <tr>
                <td>Кол-во слов</td>
                <td><?=$count_words?></td>
            </tr>
        </table>
        <a href="#" onclick="return false" id="logout">Выйти</a>
    </div>
    <table class="users_leaders">
        <tr>
            <th>Лидирующая тройка</th>
        </tr>
        <tr>
            <td>Владимир</td>
            <td>234</td>
        </tr>
        <tr>
            <td>Максим</td>
            <td145></td145>
        </tr>
        <tr>
            <td>Дима</td>
            <td>22</td>
        </tr>
    </table>
    <div class="auth-form" <?php if($user) echo 'style="display:none"'?>>
        <span class="error-auth"><?=$error_auth?></span>
        <form action="auth_reg.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="text" name="pass" id="pass" placeholder="Password"><br><br>
            <input type="submit" name="log" value="Login">
            <input type="submit" name="sign" value="Signup">
        </form>
    </div>
    <a class="button" href="http://localhost/engl">Начать заново</a>
</div>
</body>
</html>