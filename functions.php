<?php
  function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
    return $result;
      }

      ob_start();
      extract($data);
      require($name);

      $result = ob_get_clean();

    return $result;
    }



    function format_sum($cost) {
      $round=ceil($cost);
      if ($round<1000){
        $output=$round ." ₽";
      }
      elseif ($round>1000) {
        $round= number_format($round, 0, ',', ' ');
        $output=$round ." ₽";
    }
    return $output;
    }


?>
