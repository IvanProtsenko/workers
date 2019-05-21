<?php
$con=mysqli_connect("127.0.0.1", "root", "");
mysqli_set_charset($con, 'utf8');
mysqli_select_db($con, "workers");
if ($_POST['search1']) {
  $Zapros = mysqli_query($con, "SELECT * FROM workers WHERE EXTRACT(MONTH FROM birth_date) ='".$_POST['id_text']."'");
}
else  $Zapros = "SELECT * FROM workers";
$workers = mysqli_fetch_all($Zapros);
echo 'Вы искали: '.$_POST['id_text'].' месяц';
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
 <br><a href="/database/file.php">На главную</a>
