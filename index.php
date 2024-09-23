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

// Function to display the blog post titles with links
function displayPostTitles($posts) {
    foreach ($posts as $index => $post) {
        echo '<p><a href="detail.php?post_id=' . $index . '">' . $post['title'] . '</a></p>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <?php displayPostTitles($blogPosts); ?>
</body>
</html>
