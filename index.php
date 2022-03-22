<?php




//echo 10 > 5;
//echo 20 + 40;


//$age = 70;
//$salary = 100;
//if($age > 50){
//    $salary = $salary +100;
//    echo $salary;
//}else{
//    $salary = $salary -20;
//    echo $salary;
//}




//$name = "mohamed";
//
//if($name == "mohamed"){
//    echo "name is mohamed";
//}elseif($name == "ahmed"){
//    echo "name is ahmed";
//}elseif($name == "eslam"){
//    echo "name is eslam";
//}


// 90 => 2
// 80 => 1
// 92 => 4







//if($name == "ahmed"){
//    echo "he is name is ahmed";
//}else{
//    echo "not found";
//}
//$name = "ahmed";
//echo ($name == "ahmed") ? "he is name is ahmed" : "not found";
//
//$name = "mohamed";
//
//switch ($name){
//    case "mohamed":
//        echo "name is mohamed";
//    break;
//    case "ahmed":
//        echo "name is ahmed";
//    break;
//    case "eslam":
//        echo "name is eslam";
//    break;
//    default:
//        echo "not found";
//}

// 50 <   f
// 50 > , 60  c
// 70 , 80    b
// 80 , 90   a
// 90 , 100 a+
//$degree = 40;










// while

//$i = 1;
//while($i < 12){
//    echo $i."<br>";
//
//    $i++;
//}






//for($i=0;$i<10;$i++){
//    echo $i."<br>";
//}





//for($y=0;$y<4;$y++){
//
//    for($x=0;$x<4;$x++){
//        echo "*";
//    }
//   echo "<br>";
//}







// *
// **
// ***
// ****












//for($y=4;$y>0;$y--){
//    for($x=0;$x<$y;$x++){
//        echo "*";
//    }
//    echo "<br>";
//}

//$name = "mohamed , ahmed , eslam";





















//$i=0;
//do{
//
//    $i++;
//    echo $i."<br>";
//
//}while($i>10);





// ####
// ####
// ####
// ####







//$list_of_tech = [
//    "php",
//    "mysql",
//    "oop",
//    "c++",
//    "mvc"
//];

//while($item = array_shift($list_of_tech)){
//    echo $item."<br>";
//}
//
//print_r($list_of_tech);








// first row ( 2  )
// second row ( 3 )
// third row  ( 4 )
//echo "<table border='1'>";
//for($i=1;$i<=8;$i++){
//    echo "<tr>";
//    for($x=1;$x<=8;$x++){
//        $total = $x + $i;
//        if($total % 2){
//            echo "<td bgcolor='white' width='70' height='50'></td>";
//        }else{
//            echo "<td bgcolor='black' width='70' height='50'></td>";
//        }
//    }
//   echo "</tr>";
//}
//echo "</table>";







//$number = [10,30,40,1000,70,50,2000];
//echo $number[count($number) - 1];
//$max = $number[0];
//for($i=0;$i<count($number);$i++){
//    if($max > $number[$i]){
//        $max = $number[$i];
//    }
//}
//echo $max;
//max($number);

















//$c = count($list_of_tech);
//for($i=0;$i<$c;$i++){
//    echo $list_of_tech[$i]."<br>";
//}




























//$list = ["backend" => "php","frotnend" => "html"];

//$list = [
//    "backend"=>"php",
//    "frontend"=>"html"
//];
//foreach ($list as $m ){
//    echo $m."<br>";
//}




//$users = [
//    [
//        "first"=>"mohamed",
//        "last"=>"amr",
//        "age"=>27,
//        "skills"=> [
//            "tech"=> ["html","css"],
//            "soft"=> ["reading"]
//        ]
//    ],
//    [
//        "first"=>"ahmed",
//        "last"=>"amr",
//        "age"=>27,
//        "skills"=> [
//            "tech"=> ["html","css"],
//            "soft"=> ["reading"]
//        ]
//    ]
//];

//foreach($users as $user){
//    foreach ($user['skills']['tech'] as $value){
//        echo $value."<br>";
//    }
//}



//foreach ($users as $user){
//    foreach ($user as $key => $value){
//        echo $key." : ".$value."<br>";
//    }
//    echo "<hr>";
//}





// first : mohamed
// last : amr
// ----------------------
// first : ahmed
// last eslam
//---------------








//echo "dawdawd";
//print_r(["ww","www"]);








//$keys =  array_keys($list);
//print_r($keys);
//$values = array_values($list);
//
//for($i=0;$i<count($values);$i++){
//    echo $values[$i]."<br>";
//}
//print_r($list);
//while ($value = array_pop($list)){
//    echo $value."<br>";
//}




//function loop($x){
//    foreach ($x as $k => $v){
//        echo  $k." : ".$v."<br>";
//    }
//}
//function welcome($x){
//    echo "welcome ya $x <br>";
//}
//
//welcome("mohamed");
//welcome("ahmed");






















//$number = [10,30,40];
//$number2 = [15,88,23];
//
//
//loop($number);
//loop($number2);








//function number($x){
//    return $x;
//}
//
//
//echo 10 + number(10);











//function increment(&$n){
//    echo ++$n;
//}
//
//
//$x = 10;
//increment($x);
//echo "<hr>";
//echo $x;







$students =  $_POST['students'];
// 1
$list_of_students = explode(",",$students);
// 2
$content = file_get_contents("cer.html");

foreach ($list_of_students as $student){
    fopen($student.".html","w");
    $new_content =  str_replace("name",$student,$content);
    file_put_contents($student.".html",$new_content);
}























//$number = [20,30,40,5];
//
//while($i = array_pop($number)){
//    echo $i;
//}
//
//
//print_r($number);












