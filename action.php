<?php
// Sample array of movies
$movies = array(
    array("title" => "Mowgli: Legend of the Jungle", "image" => "action1.jpg"),
    array("title" => "Avatar", "image" => "action2.jpg"),
    array("title" => "Inception", "image" => "action3.jpg"),
    // Add more movies as needed
);

// Loop through the movies to generate HTML content
foreach ($movies as $movie) {
    echo '<div class="movie">';
    echo '<img src="' . $movie["image"] . '" alt="' . $movie["title"] . '" class="movie_poster">';
    echo '<h3 class="movie_title">' . $movie["title"] . '</h3>';
    echo '</div>';
}
?>