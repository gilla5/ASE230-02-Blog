<?php

$file='posts.json';
$content=file_get_contents($file);
var_dump($content);
echo '<hr />';

$php_array=json_decode($content,true);
var_dump($php_array);
echo '<hr />';
foreach($php_array as $post){
    echo $post['title'].' '.$post['content'].' '.$post['author'].' '.$post['date'].' '.
    '<br />';
}

$file = "visitors.csv";
$f = fopen($file, "r");
while ($record = fgetcsv($f)) {
foreach($record as $line) {
echo $line . "<br>";
}
}
fclose($f);

$visitorCount = [];
$visited = false;

foreach($visitorCount as $row) {
    if ($row[0]== $postId){
        $row[1] = (int)$row[1] + 1;
        $visited = true;
        break;
}

// Function to display the blog post details
function displayPostDetails($posts, $postId) {
    if (isset($posts[$postId])) {
        $post = $posts[$postId];
        echo '<h1>' . $post['title'] . '</h1>';
        echo '<p>Author: ' . $post['author'] . '</p>';
        echo '<p>Date: ' . $post['date'] . '</p>';
        echo '<p>' . $post['content'] . '</p>';
    } else {
        echo '<p>Post not found.</p>';
    }
}

// Get the post_id from the URL
$postId = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Post Details</title>
</head>
<body>
    <?php displayPostDetails($blogPosts, $postId); ?>
    <p>Visitor Count: <?php echo ($visitorCount[$postId] > 0); ?>
</body>
</html>
