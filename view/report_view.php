<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Englesh</title>
</head>
<body>
<div class="conteiner">
    <table class="report-table">
        <tr>
            <th colspan="2">Статистика по пройденному тесту</th>
        </tr>
        <tr>
            <td>Количество показанных слов</td>
            <td><?=$num_show?></td>
        </tr>
        <tr>
            <td>Количество попыток</td>
            <td><?=$num_answer?></td>
        </tr>
        <tr>
            <td colspan="2" class="mark-test"><?=$mark?></td>
        </tr>
    </table>
    <a class="button" href="index.php">Может еще?</a>
</body>
</html>

