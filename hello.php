<?php

  # 基本のキの字
  echo "hello,world!";

    echo "<br />";

  $my = "hello, my world!";
  print($my);

    echo "<br />";

  $you = "hello, your world!";
  print($you);
  printf($you);

    echo "<br />";

  echo strlen($my);

    echo "<br />";

  echo md5($my);

    echo "<br />";

  echo levenshtein($my, $you);



?>
