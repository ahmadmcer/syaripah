<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= BASE_URL; ?>/css/styles.css" rel="stylesheet">
  <title>Document</title>
</head>
<body class="container font-mono mx-auto p-5">
  <?php
    function printData($data, $level = 0)
    {
      foreach ($data as $key => $value) {
        if (is_array($value)) {
          echo str_repeat('&emsp;', $level) . $key . ':<br>';
          printData($value, $level + 1);
        } else {
          echo str_repeat('&emsp;', $level) . $key . ' => ' . $value . '<br>';
        }
      }
    }
    // {
    //   foreach ($data as $key => $value) {
    //     if (is_array($value)) {
    //       echo $key . ':<br>&emsp;';
    //       printData($value);
    //     } else {
    //       echo $key . ' => ' . $value . '<br>';
    //     }
    //   }
    // }

    printData($data);

    // foreach ($data as $key => $value) {
    //   if (is_array($value)) {
    //     echo $key . ':<br>';
    //     foreach ($value as $k => $v) {
    //       if (is_array($v)) {
    //         echo $k . ':<br>';
    //         foreach ($v as $k1 => $v1) {
    //           echo $k1 . ' => ' . $v1 . '<br>';
    //         }
    //       } else {
    //         echo $k . ' => ' . $v . '<br>';
    //       }
    //     }
    //   } else {
    //     echo $key . ' => ' . $value . '<br>';
    //   }
    // }
  ?>
</body>
</html>