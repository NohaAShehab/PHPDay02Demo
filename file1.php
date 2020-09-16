<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
      
      <?php

        // open file using fopen method      
         // $filename = "php.txt";
         // $file = fopen( $filename, "r" );
         // var_dump($file); # if this returns stream (True)

         #Opens file or URL
         $file_name="php\welcome.txt";
         $file=fopen($file_name, "r");
         // // var_dump($file);
         if($file){
            $file_size=filesize($file_name);
            echo "file size= ".$file_size."<br>";
            echo "<h2> File opened successfully </h2>";
            // $data=fread($file,$file_size);
            #fgets return file line by line 
            #if specifed size --> return first 40 byte from the file
            // while(!feof($file)){
            //    // var_dump(feof($file));
            //    $data=fgets($file,100);
            //    // rewind($file);
            //    // echo $data;
            //    echo " I am at ".ftell($file) ."<br>";;
             
            // }
            // var_dump($data);
            
         }else{
            echo "<h2> File not opened </h2>";
         }
         $wfilename="php\wfile";
         $wfile=fopen($wfilename,"a");
         if($wfile){
            echo "<h2> File opened </h2>";
            fwrite($wfile,"Wlecomeeeeee");
            var_dump($wfile);

            fclose($wfile);
            var_dump($wfile);


         }else{
            echo "<h2> File not opened </h2>";
            
         }







         exit;

         if( $file == false ) {
            echo ( "Error in opening file" );
            exit(); // from php script
         }
            
         // functions that help in opening files 
         // returns with the file size 
         $filesize = filesize( $filename ); 
         var_dump($filesize);
         
         // reads the content of files
         # fread (stream , filesize)
         $filetext = fread( $file, $filesize ); 
         var_dump($filetext);
         
         fclose( $file );  // close the file 
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre> $filetext </pre>" );
      ?>
      
   </body>
</html>