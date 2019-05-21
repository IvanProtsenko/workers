<?php
$con=mysqli_connect("127.0.0.1", "root", "");
mysqli_set_charset($con, 'utf8');
mysqli_select_db($con, "workers");
$query_result = mysqli_query($con, 'SELECT * FROM `workers`');
$workers = mysqli_fetch_all($query_result);

 echo '<table border="1">
   <tr>
    <th>Номер сотрудника</th>
    <th>ФИО</th>
    <th>Дата рождения</th>
    <th>Дата начала работы</th>
    <th>Пол</th>
   </tr>
 ';

 foreach ($workers as $worker)
 {
    echo '<tr>';
    echo '<h2><td>'.$worker[0].'</td> <td>'.$worker[1].'</td> <td>'.$worker[2].'</td> <td>'.$worker[3].'</td> <td>'.$worker[4].'</td></h2>';
    echo "<br></div></div>";
    echo '</tr>';
 }
 echo '</table>';
?>
    <form method="POST" action="/database/search1.php">
    <p><b>Поиск по месяцу рождения сотрудников: </b><br>
      <input type="text" name ="id_text" size="40">
     <input type="submit" name="search1" value="Найти">
    </form>
    <form method="POST" action="/database/search2.php">
    <p><b>Сортировка по дате принятия на работу: </b><br>
     <input type="submit" name="search2" value="Перейти">
    </form>
