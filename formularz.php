<form action="" method="GET" >
Podaj nr
<input name = "nr">
Podaj name
<input name = "name">
Podaj surname
<input name = "surname">
Podaj score
<input name = "score">
<input type = "submit" name = "sub">
</form>

<?php

 $user= 'root';

 $pass= '';

 $host = 'localhost';

 $base = 'Dziennik'; //tutaj nazwa twojej bazy

 $con= mysqli_connect($host,$user,$pass, $base);

 mysqli_select_db($con,$base);

 

 if(isset($_GET['sub']))

 {

 $nr = $_GET['nr'];

 $name = $_GET['name'];

 $surname = $_GET['surname'];

 $score = $_GET['score'];

$query = "Insert into informatyki(ID, Name, Surname, Score) values('$nr', '$name', '$surname', '$score')";

$run =mysqli_query($con,$query);

 

if($run){

 echo "Formularz zatwierdzony";

}

else{

 echo "formularz jest błędny";

}

 }

?>