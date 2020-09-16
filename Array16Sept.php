<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        echo '<h1> <center> Arrays in php  </center> </h2> ';
        // $names=["Mostafa","Fatma","Aml","Fares", "Mohamed","Ashraqat","Yasmin"];
        // // var_dump($names);

        // $mixedArray=array("welcome",14,"PHP",True);
        // // var_dump($mixedArray);

        // #array 
        // $arr2=range("a","z",3);
        // // var_dump($arr2);
        // // echo $arr[6];
        // // for($m=0;$m<count($arr2);$m++){
        // //     echo $arr2[$m]."<br>";
        // // }
        // # to deal with array
        // // foreach($arr2 as $item){
        // //     echo $item."<br>";
        // // }

        // $info=array(
        //     "name"=>"Noha",
        //     "position"=>"Teaching assistant",
        //     "dept"=>"Open source"
        // );
        // $info=[
        //     "name"=>"Noha",
        //     "position"=>"Teaching assistant",
        //     "dept"=>"Open source"];

        // echo "<center> This is an associative array </center>";
        // // var_dump($info);
        // foreach($info as $element){
        //     echo $element." ";
        // }
        // echo "<br>";
        // // echo $info["name"]."<br>";
        // // echo $info["position"]."<br>";
        // // echo $info["dept"]."<br>";
        // // foreach($info as $k=>$v){
        // //     echo $k." = ".$v."<br>";
        // // }

        // $depts=["application","IOT","Cloud","Java"];
        // $info["dept"]=$depts;
        // // var_dump($info);
        // $info[5]="Five";
        // foreach($info as $k=>$v){
        //     if(is_array($v)){
        //         echo $k." = ";
        //         foreach($v as $element){
        //             echo $element." ";
        //         }
        //         echo " <br> ";
        //         continue;
        //     }
        //     echo $k." = ".$v."<br>";
        // }

        // $name="ITI";
        // $testarr=[4, True, $name];
        // var_dump($name);
        // // var_dump($testarr);
        // echo $testarr[2];
        // echo $testarr[2];

        $testarr2=[4, True, 66.098,"text",
        "name"=>"Mostafa",
        "College"=>"Computer and information"
        ];

        // var_dump($testarr2);
        // for($m=0;$m<count($testarr2);$m++){
        //     echo $testarr2[$m]."<br>";
        // }
        // foreach($testarr2 as $element){
        //     echo $element." ";
        // }

        // $nums=[1,4,5,7,8,9];
        // // var_dump($nums);
        // $nums[7]="test";
        // var_dump($nums);
        // // for($m=0;$m<count($nums);$m++){
        // //     echo $nums[$m]."<br>";
        // // }
        // // foreach($nums as $element){
        // //     echo $element." ";
        // // }

        echo "<center> <h2> union with arrays </h2> </center>";

        $a=[2,44,"gggg","welcome",True, 44.5,"name"=>"Noha"];
        // $b=["string",66,"test","Hey",'False', "yes","Test string"];
        $b=["name"=>"iti","branch"=>"Menfoia"];
        $c=$a+$b;
       
        foreach($a as $element){
            echo $element." | ";
        }
        
        echo "<br>";
        foreach($b as $element){
            echo $element." | ";
        }
       
      
        $arr5=["tracks"=>[
            "OS",
            "SD",
            "JAVA"
        ]];
        // echo $arr5["tracks"][2];

        // var_dump($c);
        echo "<center> <h2> Sorting arrays </h2> </center>";

        // $array = array('Application', 'AOS Cloud', 55, true); 
        // sort($array);
        // var_dump($array);


        // $stack = array("orange", "banana", "Apple", "raspberry");
        // rsort($stack);
        // var_dump($stack);
        $tracks = array( 
            "cloud" => array (
                "java" => 'Eng. Eman',
                "bash" => 'Fatma',
                "courses"=> array('name'=>"perl")
             
            ), 
            "Application" => array (
               "php" => 'Noha',
               "admin" => 'Fatma'
            ),
            "eva"=>"test",
            "lan"=>"abc"    
        );
        // asort($tracks);
        // var_dump($tracks);

        $plants= array( 'flowers'=>'sunflower', 
        'catcus'=>'Euphorbia' ,'adff'=>"kjkj");

        $arr=array_reverse($plants); # an alias for sort 
        var_dump($arr);

        array_push($plants,"Wenka");
        array_push($plants,"abc");
        var_dump($plants);
        var_dump(array_pop($plants));



    ?>
    
</body>
</html>