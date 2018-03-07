<html>
<head>
<title>Kontynenty i państwa</title>
</head>
<body>
 
<table border="1" cellspacing="2">
 <tr>
   <td width="100%" colspan="5" align="center">Kraje i kontynenty</td>
 </tr>
<?php
  $kraje = Array(
      'Europa' => array('Polska', 'Anglia', 'Litwa', 'Francja'),
      'Afryka' => array('Tunezja', 'Egipt', 'RPA', 'Etiopia'),
      'Azja' => array('Chiny', 'Mongolia', 'Japonia', 'Kazachstan')
  );
 
  foreach ( $kraje as $kontynent => $kraj )
  {
      echo '<tr><td width="20%"><b>' . $kontynent . '</b></td>';
 
      foreach($kraj)
      {
          echo '<td width="20%">' . $kraj[$i] . '</td>';
      }
 
      echo '</tr>';
  }
?>
</table>
</body>
</html>