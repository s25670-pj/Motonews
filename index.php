<?php
include("path.php");
include(ROOT_PATH . "/app/controller/topics.php");

$posts = array();
$postsTitle = 'Latest';

if (isset($_GET['t_id']))
{
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = $_GET['name'];
}
else if (isset($_POST['search-term']))
{
    $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
}
else
{
    $posts = getPublishedPosts();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Motonews</title>
</head>

<body>
<?php
include(ROOT_PATH . "/app/include/header.php");
include(ROOT_PATH . "/app/include/messages.php");
?>
    <!-- Content -->
    <div class="content clearfix">
        <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
                <?php foreach (array_reverse($posts) as $post): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user"> <?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar"> <?php echo date('F j, Y H:i', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
        <!-- // Main Content -->
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>
            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include(ROOT_PATH . "/app/include/footer.php"); ?>
</body>
</html>