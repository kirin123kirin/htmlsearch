<?php
$search_term = $_GET["search_term"];
$results = shell_exec("grep -P --exclude=index.html --exclude=search.php -m 500 -r \"$search_term\" *");
echo "<ol>";
echo "<li>" . str_replace("\n", "</li><li>", $results) . "</li>";
echo "</ol>";
?>
