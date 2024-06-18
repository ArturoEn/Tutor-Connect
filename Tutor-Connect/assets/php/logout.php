<?php 
    session_start();
    session_destroy();

    echo "
        <script>
            window.location = '/Tutor-Connect/index.php';
        </script>
    ";

?>