<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_005</title>
</head>
<body>
  <p>
      <?php
        $score = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

        $average = array_sum($score) / count($score);
        echo $average;
        ?>
  </p>
</body>
</html>