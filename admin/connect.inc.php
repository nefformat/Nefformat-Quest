<?php

if(@file_exists("./admin/config.inc.php"))
// Устанавливаем соединение с базой данных
  echo "<p> Connected to \"".$dblocation."\"</p>";