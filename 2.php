
    <?php
    header('content-type:text/html;charset=utf-8');
       $arrport=array(
          '洛' => array("src"=>"css/1.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '飞机' => array("src"=>"css/2.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '人马' => array("src"=>"css/3.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '盲僧' => array("src"=>"css/5.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '大龙' => array("src"=>"css/8.jpg",'ATK' =>80,"DEF"=>134,"hp"=>11615,"mp"=>324 ),
          '麦林炮手' =>array("src"=>"css/9.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '剑姬' => array("src"=>"css/40.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          'Timo' => array("src"=>"css/6.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
          '女警' =>array("src"=>"css/7.jpg",'ATK' =>80,"DEF"=>34,"hp"=>615,"mp"=>324 ),
       );

    if (isset($_GET['name'])) {
      // code...
      $name = $_GET['name'];
      echo "<img src=".$arrport[$name]["src"].">";
      echo "<br>";
      echo '攻击力是'.$arrport[$name]["ATK"];
      echo "<br>";
      echo '护甲是'.$arrport[$name]["DEF"];
        echo "<br>";
      echo '生命值是'.$arrport[$name]["hp"];
        echo "<br>";
      echo '魔法值是'.$arrport[$name]["mp"];
    }


     ?>
