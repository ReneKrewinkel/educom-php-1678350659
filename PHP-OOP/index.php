<?php
include "php-namespaces.php";

//use classes from Html namespace
$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;

// use Alias for namespace with the "use"keyword:
    use Html as H;
    $table = new H\Table();
    use Html\Table as T;
    $table = new T();

?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>