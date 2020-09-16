<html>

   <head>
      <title>Arrays in PHP</title>
   </head>
   
   <body>    
    <?php
        // echo 'Arrays in php';

        /// how to define array 
        #loosly types
        $array = array('OS Application', 'OS Cloud', 55, true); 
        // var_dump($array);
        // // // array is indexed by default 
        // echo $array[0]; 
        // $arr=['application', $array, false, 455];
        // var_dump($arr);

    //     /// sequence in arrays using range function

        // $seq= range(0,10);
        // var_dump($seq);

        // $seq=range(0,10,2);
        // var_dump($seq);

        // $seq=range('m','z');
        // var_dump($seq);
        // echo  $seq['7'];

        #to deal with arrays you must use loops
        #1- first count the numbers of elements in an array using count
        #2- use for loop why?
        #to get number of elements in an array
        #count($arr_name) and returns with size of array
        // echo count($seq);

        // for($i=0; $i<count($seq); $i++){
        //     echo $seq[$i]. "<br>";
        // }

        // //// also foreach (array as element)
        // foreach($array as $c){
            
        //     echo $c. "  ".gettype($c)."<br>";
        // }

    //     //// Associative arrays ==== indexed arrays === key value pair arrays

        $plants= array( 'flowers'=>'sunflower', 
        'catcus'=>'Euphorbia', 5=>666);



        // var_dump($plants);

        // foreach($plants as $plant){  # simple foreach return with values 
        //     echo $plant. "<br>"; 
        // }

     
        // foreach($plants as $key=>$value){
        //     echo $key."_".$value. "<br>";
        // }

        // $plants['moreflowers']='gardenia';
        //   foreach($plants as $key=>$value){
        //     echo $key."_".$value. "<br>";
        // }

        // echo $plants['flowers'];

        $names=["Mohamed","Hager","Nehal","Basma","Hatem"];
        // var_dump($names);
        // $names[7]="Noha";
       
        // $names[5]="test";
        // var_dump($names);
        // $names[7]="opensource";
        // var_dump($names);

        // $n=[1,3,4,5,6,7,89,9,99,9,999];
        // var_dump($n);
       
        #compact function (mixed vars as string)
        // $name="Noha";
        // $email="nshehab@iti.gov.eg";
        // $mobile='99809808567';
        // $contact_info=compact("name","email","mobile");
        // var_dump($contact_info);

        // $counter=0;
        // foreach($names as $name){
        //     echo $name."<br>";
        //     $counter ++;
        // }
        // echo $counter ;


        #using while  but each is depricated, if you saw it in an old script
        // while($plant =each ($plants)){
        //     echo $plant;
        // }

        #array operators 
        $arr1=['a','b','c'];
        $arr2=[3, 66, True, "dddf"];
        $arr3=$arr2+$arr1;
        // var_dump($arr3);

    //     // array operators ===, ==

        //     # == check the value only
        // $arr1=range(0,10,2); # [0,2,4,8,10]  #integee
        // $arr2=array("0","2","4","6","8","10"); #string
        // if($arr1==$arr2){
        //     echo 'equal but not identical'. "<br>";
        // }
        // # === check the values and the data type
        // if($arr1===$arr2){
        //     echo "identical";
        // }else{
        //     echo "not identical";
        // }



        // if(! ($arr1===$arr2)){
        //     echo 'not identical';
        // }

    //     //// multi dimentional array 
        $tracks = array( 
            "cloud" => array (
                "java" => 'Eng. Eman',
                "bash" => 'Fatma',
                "courses"=> array('name'=>"perl")
             
            ), 
            "Application" => array (
               "admin" => 'Fatma',
               "php" => 'Noha'
            ),
            "eva"=>"test",
            "lan"=>"abc"
               
        );
        
        // var_dump($tracks);
        // echo $tracks['cloud']['courses']['name'];

    //     // access the array elements
    //     echo "<br>".$tracks['Application']['php']."<br>";

    //     // so we finished the arrays we need to sort it 
    //     // sorting functions 

    //     //// sort()
        $names=array('Eng Sherin','fatma','dina','shimaa','Sabagh','noha');
        // var_dump($names);
        // sort($names);
        // var_dump($names);  // note the case sensitivity in ordering 

    //     // #what the result of $x=sort($names)?

    //     // #sort now is implemented alphapitcally 
    //     // #let we need to sort the following array 
    //     $arr=array(1,'test',2,'php');
    //     sort($arr);
    //     var_dump($arr);

        // $newarr=array('1','54','255','26','33','4');
        // sort($newarr,SORT_NUMERIC);
        // var_dump($newarr);
        // sort($newarr,SORT_STRING);
        // var_dump($newarr);

    //     // #asort -->used in sorting key value 
    # array according to the value
        // $plants= array( 'flowers'=>'sunflower', 
        // 'catcus'=>'Euphorbia' ,'adff'=>"kjkj");

        // asort($plants); # an alias for sort 
        // var_dump($plants);

    //     // #ksort --> used in sorting according to the key
        // ksort($plants);
        // var_dump($plants);

    //     // #check the reverse using rsort, arsort, krsort


    //     ///////////////////////// using the user-defined sort ////////////// 

    //     #You can sort arrays using a predefined function for sort defined by the developer
        
    //     #Php provided some functions that help sorting items depends on the function passed to it like uasort and uksort 

        // function cmp($a, $b)
        // {
        //     if ($a == $b) {
        //         return 0;
        //     }
        //     return ($a > $b) ? -1 : 1;
        // }
        
        // $a = array(3, 2, 5, 6, 1);
        
        // usort($a, "cmp");
        // var_dump($a);

        
        // foreach ($a as $key => $value) {
        //     echo "$key: $value"."<br>";
        // }

    //     ///// ordering arrays ////

    //     ///shuffle() array_reverse ()  array_push ()  array_pop() 

        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_pop($stack);
        var_dump($stack);
        var_dump($fruit);
        // print_r($fruit);
        // echo "<br>"; 
        // print_r($stack);
        // echo "<br>"; 

        array_push($stack ,"strawberry");
        print_r($stack);
        echo "<br>"; 

        $reversed= array_reverse($stack);
        print_r($reversed);
        echo "<br>"; 

        $shuffled=shuffle($stack);
        print_r($shuffled);
        print_r($stack);
        echo "<br>";


    //     /////////////// reading arrays from files ///////////////////
        $lines = file('arrfile.txt');

        // // Loop through our array, show HTML source as HTML source; and line numbers too.
        foreach ($lines as $line_num => $line) {
            #echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
            echo $line."<br>";
        }

        // echo count($lines)."<br>";


        ## array flip 

        $colors = array(
            'one' => 'red',
            'two' => 'blue',
            'three' => 'yellow',
        );
        $newcolors=array_flip($colors);
        var_dump($colors);
        var_dump($newcolors);
    //     //// explode 
        // $data = "foo:*:1023:1000::/home/foo:/bin/sh";
        // list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
        // echo "<br>".$user; // foo
        // echo "<br>";
        // echo $pass; // *

        // $OriginalString = "Hello, OS Application Track, You All love ITI ";   
        // print_r(explode(" ",$OriginalString)); 

    //     //// implode function add string to the array 
        // $ar = array("hello", null, "world");
        // print(implode(',', $ar));

    //     // #check  value exists in an array 
        // $found =in_array("orange", $stack);
        // echo $found;

    //     // #current function 
    //     //check this to define an array 
        // $arr=['lalaland','Monstors INC','Lion king'];
    //     // pointer to the array
        // echo current($arr);
    //     echo next($arr)."<br>";
    //     // echo each($arr);  ////// depricated
    //     echo reset($arr)."<br>";

    //     /// count elements in an array 
    //     $arr= array(1,2,8558,22,1,5,1,65,65,6,0);
    //     var_dump(array_count_values($arr));

    //     /// see the result, item will as a key --> item count will be the value

    //     // extract function

        // extract($plants);
        // echo "$catcus $flowers";

    //     /// convert to scalar  #lab
    //     $info =['application','cloud', 'communication','iot'];

    //     list($osTrack1,$osTrack2, $osTrack3, $osTrack4)=$info;

    //     echo "Open source departments has 4 tracks $osTrack1, $osTrack2, $osTrack3 and $osTrack4";


    //     #tips 
    //     # 1- array merge  you can merge an associative array with normal one no proble
    //     $array = array (
    //         'websites' => array (
    //                 'Search' => 'Google',
    //                 'Social' => 'Facebook',
    //                 'News' => 'NY Times' 
    //         ),
    //         'friends' => array (
    //                 'Noha',
    //                 'Fatma',
    //                 'Eng Sherin',
    //                 'Dina',
    //                 'Shimaa' 
    //         ) 
    //     );
     
    //     $merged = array_merge ( $array ['websites'], $array ['friends'] );
    //     var_dump ( $merged );
    //     print_r($merged);

    //     ## array_keys()
    //     $keys=array_keys($merged);
    //     var_dump ($keys);

    //     #array_values 
    //     $values=array_values( $merged );
    //     var_dump ($values);

    //     $arr=['a', 'b', 'c','d'];
    //     var_dump(array_keys($arr));
    //     var_dump(array_values($arr));

    //     #array_key_exists()
    //     $exists = array_key_exists('7', $keys);
    //     print_r ( $exists ); // 1 or TRUE
    //     if($exists){
    //         echo 'Found <br>';
    //     }
        

    //     #array_sum
    //     $arr=['a', 'b', 'c','d'];
    //     $arrsum= array_sum($arr);
    //     var_dump($arrsum);
        
    //     $arr=[22,55,65,87];
    //     $arrsum= array_sum($arr);
    //     var_dump($arrsum);


    //     ### array_shift()

    //     /********** array_shift *************/

    //     echo ('/*******************************array_shift()********************************/');

    //     $array = array (    
    //         'websites' => array (
    //                 'Search' => 'Google',
    //                 'Social' => 'Facebook',
    //                 'News' => 'NY Times' 
    //         ),
    //         'friends' => array (
    //                 'Noha',
    //                 'Fatma',
    //                 'Eng Sherin',
    //                 'Dina',
    //                 'Shimaa' 
    //         ) 
    //     );
     
    //     $shifted = array_shift ( $array );
     
    //     var_dump ( $array );
    //     var_dump ( $shifted );

    //     /************************************ array map****************************************/
    //     #apply a function on an array
    //     function salestax($price) {
    //         return number_format ( ($price * 1.05), 2, '.', '' );
    //     }
         
    //     $items = array (
    //         100,
    //         50,
    //         250,
    //         70,
    //         500 
    //     );
    //     $finalcost = array_map ( 'salestax', $items );
    //     var_dump ( $finalcost );

    //     /**************************************** unique  array returns with the only unique items**************************/
    //     $index = array (
    //         'Information technology institute',
    //         'Open source track',
    //         'PHP is the best backend langauge.',
    //         'Information technology institute',
    //         'some tips on PHP arrays',
    //         'Arrays are a way of storing values' 
    //     );
    //     $unique = array_unique ( $index );
    //     print_r ( $unique );

    //     /********************************** array_slicing************************************/
    //     $index = array (
    //         'Information technology institute',
    //         'Open source track',
    //         'PHP is the best backend langauge.',
    //         'Information technology institute',
    //         'some tips on PHP arrays',
    //         'Arrays are a way of storing values' 
    //     );
    //     $sliced = array_slice ( $index, 1, 4 ); //slice it
    //     var_dump ( $sliced );

    //     /***************************************** array_diff**************************************/
    //     $index = array (
    //             'Information technology institute',
    //             'Open source track',
    //             'PHP is the best backend langauge.',
    //             'Information technology institute',
    //             'some tips on PHP arrays',
    //             'Arrays are a way of storing values' 
    //     );
         
    //     $index2 = array (
    //             'Information technology institute',
    //             'Open source track',
    //             'PHP is the best backend langauge.',
    //             'Information technology institute',
    //             'some tips on PHP arrays',
    //             'Arrays are a way of storing values',
    //             'Arrays with Style',
    //             'PHP in the Enterprise',
    //             'We are about to finish the lecture' 
    //     );
    //     $diff = array_diff ( $index2, $index );
    //     var_dump( $diff );

    //     /******************** array search **********************************/
    //     $index2 = array (
    //         'Information technology institute',
    //         'Open source track',
    //         'PHP is the best backend langauge.',
    //         'Information technology institute',
    //         'some tips on PHP arrays',
    //         'Arrays are a way of storing values',
    //         'Arrays with Style',
    //         'PHP in the Enterprise',
    //         'We are about to finish the lecture' 
    //     );
    // $found = array_search ( 'PHP in the Enterprise', $index2 );  //  (needle,haystack)
    // print_r ( $found ); // 7
        

    
    ?>
      
   </body>
</html>