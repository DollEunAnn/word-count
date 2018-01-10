<?php
$paragraph=file_get_contents("alice.txt");

$words = explode(" ", $paragraph);
var_dump($words);

$times=0;

for($i=0;$i <= count($words);$i++){

	for($ii=0;$ii <= count($words); $ii++){

		if($words[$i] == $words[$ii]) {

			echo "$words";

		}

	}
}
// foreach ($line as $line) {
	
// 	$word = explode(" ", $line);

// 		foreach ($word as $key => $word) {

// 			if($word == $words[$key]){

// 				$times= $times + 1;
// 			}

// 			echo "$word + $times \n";
// 		}
// }
			// foreach ($word as $num => $word) {
			// 	# code...

			// 	echo $key = $word
			// }

			// if ($word == $word){

			// 	$time++;
			// 	echo "$word = $times \n";

				
			// }


			// +' '+ '=' +$time;




















// $words=explode(" ", $paragraph);
// var_dump($words);










// if($paragraph == $word)

// for($lines=0;$lines <= count($lines);$lines++) {

// 	$lines=explode(" ", $words);
// }

// $words =explode(" ", $line);

// if ($array == $words){
// 	echo "word"+ ;
// }
// $words = 'A string with certain words occuring more often than other words.';
// print_r( array_count_values(str_word_count($words, 1)) );

?>