<table>
    <tr>
        <th>
            <a href="?orderBy=type">Type:</a>
        </th>
        <th>
            <a href="?orderBy=description">Description:</a>
        </th>
        <th>
            <a href="?orderBy=recorded_date">Recorded Date:</a>
        </th>
        <th>
            <a href="?orderBy=added_date">Added Date:</a>
        </th>
    </tr>
</table>
<?php
$orderBy = array('type', 'description', 'recorded_date', 'added_date');

$order = 'type';
if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
    $order = $_GET['orderBy'];
}

$query = 'SELECT * FROM aTable ORDER BY '.$order;

// retrieve and show the data :)
?>