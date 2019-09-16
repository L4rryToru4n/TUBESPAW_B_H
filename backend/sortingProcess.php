<?php

$sql = "SELECT * FROM MyTable";

if ($_GET['sort'] == 'type')
{
    $sql .= " ORDER BY type";
}
elseif ($_GET['sort'] == 'desc')
{
    $sql .= " ORDER BY Description";
}
elseif ($_GET['sort'] == 'recorded')
{
    $sql .= " ORDER BY DateRecorded";
}
elseif($_GET['sort'] == 'added')
{
    $sql .= " ORDER BY DateAdded";
}

?>

// Comments
// Notice that you shouldn't take the $_GET value directly and append it to your query. 
// As some user could got to MyPage.php?sort=; DELETE FROM MyTable; 