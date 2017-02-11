<?php

class GamedayPlan;

private static $instance = null;

  public $name = "WIL'S SPORTS CENTER";
  public $address ="440 Hang Cir"
  public $gameday =[

    "Basketball" => 7/14/16,
    "Soccer" => 8/16/16,
    "Footbal" => 9/14/16,
    "Swimming" =>10/14/16

];

public static function  getInstance() {
  if (!self::$instance) {
      self::$instance = new GamedayPlan();
    }

    return self::$instance;
  }



   /*foreach ($gameday as $sports => $gameday){
   if($sports_name === $sports){
     $total +=  $gameday;
        }
      }
   }
   return $total;
}

?>
