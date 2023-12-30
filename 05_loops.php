<?php
//FOREACH
$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post', 'Fifth Post'];

// for($x = 0 ; $x < count($posts) ; $x++){
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post . '<br>';
// };
// foreach ($posts as $index => $post) {
//     // echo $index + 1 . ' - ' . $post . '<br>';
// };

//functions

function registerUser ($email){
    // echo $email . ' registered';
}
registerUser('Nish');

$multiply = fn($n1,$n2) => $n1 * $n2;
echo $multiply(4,5);

?>

