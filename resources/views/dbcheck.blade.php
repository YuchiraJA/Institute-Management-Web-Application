<?php
// Test database connection
try {
    DB::connection()->getPdo();
    echo "Connection Successful";
} catch (\Exception $e) {
    die("Could not connect to the database.  Please check your configuration. error:" . $e );
}


?>



