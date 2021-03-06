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

    function viewtime(){
      date_default_timezone_set("Europe/Moscow");
      $ts_midnight = strtotime('tomorrow');
      $secs_to_midnight = $ts_midnight - time("H:i");
      $hours = floor($secs_to_midnight / 3600);
      $minutes = floor(($secs_to_midnight % 3600) / 60);
      return("$hours:$minutes");
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
