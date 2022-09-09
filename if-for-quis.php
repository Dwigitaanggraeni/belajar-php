<?php
    // Nama : Dwi Gita Anggraeni
    // Kelas : 11 RPL 2

    for ($x = 1; $x < 10; $x++) {

        $i=10;

        $spasi="";

        while($i>$x){

            $spasi .="&nbsp;";

            $i--;

        }

        echo $spasi;

        $a=1;

        $btg="";

        while($a<=$x){

            $btg .="*";

            $a++;

        }

        echo $btg."<br>";

}
    echo "<hr>";

    for ($x = 1; $x < 10; $x++) {

        $i=1;

        $btg="";

        while($i<=$x){

            $btg .="*";

            $i++;

        }

    echo "$btg<br>";
 }
    echo "<hr>";
    for ($x = 10; $x > 0; $x--) {

        $i=1;

        $spasi="";

        while($i<=$x){

            $spasi .="&nbsp;&nbsp;";

            $i++;

        }

        echo $spasi;

        $a=10;

        $btg="";

        while($a>$x){

            $btg .="*";

            $a--;

        }

        echo $btg."<br>";



    }
    echo "<hr>";
 
    for ($x = 1; $x < 10; $x++) {

        $i=1;

        $spasi="";

        while($i<=$x){

            $spasi .="&nbsp;";

            $i++;

        }

        echo $spasi;

        $a=10;

        $btg="";

        while($a>$x){

            $btg .="*";

            $a--;

        }

        echo $btg."<br>";



    }
    echo "<hr>";
 
    for ($x = 1; $x < 10; $x++) {

        $i=1;

        $spasi="";

        while($i<=$x){

            $spasi .="&nbsp;&nbsp;";

            $i++;

        }

        echo $spasi;

        $a=10;

        $btg="";

        while($a>$x){

            $btg .="*";

            $a--;

        }

        echo $btg."<br>";
    }
    echo "<hr>";

    for ($x = 1; $x < 10; $x++) {

        $i=10;

        $btg="";

        while($i>$x){

            $btg .="*";

            $i-=1;

        }

    echo "$btg<br>";
 }
    echo "<hr>";

    $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++){
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";
   }
   echo "<hr>";

   for ($i=1; $i<=5; $i++){
    for ($j=$i; $j>=1; $j--){
        echo $j;
    }echo "<br>";
}
echo "<hr>";

$h = 9;
$a = 0;
for($i=0;$i<$h;$i++){
    for($j=$h;$j>$a;$j--){
        print "&nbsp;";
    }
    for($k=0;$k<=$a;$k++){
        if($i==(int)($h/2)){
            print "+&nbsp;";
        }else{
            if($k==0 || $k==$a || $k==(int)($a/2)){
                print "+&nbsp;";
            }else{
                print "&nbsp;&nbsp;";
            }
        }
    }
    if($i<4){
        $a+=2;
    }else{
        $a-=2;
    }
    print "<br/>";
}
echo "<hr>";

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 9; $j++) {
        echo '* ';
    }
    echo '
';
}