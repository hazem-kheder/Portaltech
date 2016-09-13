<?php
use Portaltech\Container;
include_once __DIR__.'/bootstrap.php';

$container = new Container($configuration);
$listLoader = $container->getListLoader();
$lists = $listLoader->getLists();


$listId = isset($_GET['list_id']) ? $_GET['list_id'] : 1;

$container->setListId($listId);
$taskLoader = $container->getTaskLoader();
$tasks = $taskLoader->getTasks();
//var_dump($lists);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Portaltech Reply task manager</title>
</head>
<body>
<div class="container-fluid nopadding">
    <h1 class="col-md-12">Portaltech Reply task manager</h1>
    <div class="row">
        <div class="col-md-6">
            <h2 class="col-md-12">Lists</h2>
            <ul class="col-md-12">
                <?php foreach($lists as $list) : ?>
                    <li>
                        <a class="list" href="index.php?list_id=<?php echo $list['id']; ?>"> <?php echo $list['name']; ?></a>
                        <a href="">Edit</a><a href="">Delete</a><a href="">Mark Done</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="col-md-12 "><button type="button" class="btn btn-warning">Add List</button></div>
        </div>
        <div class="col-md-6">
            <h2 content="col-md-6">Tasks</h2>
            <ul class="col-md-12">
                <?php if(count($tasks) > 0): ?>
                    <?php foreach($tasks as $task) : ?>
                        <li><span class="list"> <?php echo $task['description']; ?></span>
                            <a href="">Edit</a><a href="">Delete</a><a href="">Mark Done</a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li class="empty">There is no Tasks for this List !</li>
                <?php endif; ?>
            </ul>
            <div class="col-md-12 "><button type="button" class="btn btn-warning">Add Task</button></div>
        </div>
    </div>
</div>

</body>
</html>

