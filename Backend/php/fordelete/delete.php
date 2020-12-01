<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                                                    // OBJECT 
    // class car {
    //     Public $model;
    //     public $color;
    //     public function __construct($model, $color) {
    //         $this->model = $model;
    //         $this->color = $color;
    //     }
    //     public function message() {
    //         return "this is my car " . $this->model . " " . $this->color;
    //     }
    // }

    // $mycar = new car("Honda", "Black");
    // echo $mycar -> message(); 
    
                                                    // INDEXED ARRAY EITH LOOP

    // $myStore = array("Honda", "farrari", "toyota");
    // $aryylength = count($myStore);
    
    // for ($i=0; $i < $aryylength; $i++) { 
    //     echo $myStore[$i];
    //     echo "<br>";
    // }

                                                    // ASSOCIATIVE ARRAY WTIH LOOP
    
    // $myStore = array("Honda"=>"4", "farrari"=>"6", "toyota"=>"8");
    
    // foreach ($myStore as $key => $value) {
    //     echo $key . ' ' . $value;
    //     echo "<br>";
    // }

                                                     // MULTIDIMENSIONAL ARRAYS

    $store = array(
        array("daniayl", "agha", "wasseq"),
        array("ziyad", "junaid", "jawad"),
        array("arsalan", "Naqi", "Nabeel"),
    );

    for ($row=0; $row <  3; $row++) {         
        for ($col=0; $col < 3; $col++) { 
            echo $store[$row][$col];
            echo "<br>";
            
        }
    }



    ?>
</body>
</html>