<?php
// $d = 30;
// if($d < 20){
//     echo "Have a good day!";
// }
// else{
//     echo "Have a good night!";
// };

$posts = ['First Post', 'Second Post', 'Third Post', 'Fourth Post', 'Fifth Post'];
// if (!empty($posts)) {
//     foreach ($posts as $post) {
//         echo $post . '<br>';
//     }
// } else {
//     echo "No posts found";
// }

// echo !empty($posts) ? $posts[0] : "No posts found";

// $firstPost = !empty($posts) ? $posts[0] : "No posts found";
// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;
// echo $firstPost;

$favcolor = "yellow";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
