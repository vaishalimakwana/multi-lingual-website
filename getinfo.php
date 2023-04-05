<?php 
    ob_start();
    echo phpinfo();
    $info = ob_end_clean();
    echo "<pre>"; 
    print_r(phpinfo());
    echo "testing";
?>