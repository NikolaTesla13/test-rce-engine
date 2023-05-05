<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'GET method';
} else {
    $secret = "wkjesrc24509873";
    $auth_header = $_SERVER['HTTP_X_AUTH'];

    if($auth_header != $secret) {
        echo "auth error";
        return;
    }

    $code = file_get_contents('php://input');
    $filename = 'temp.c';
    $output = '';

    Check if GCC is available
    $which_gcc_output = shell_exec('which gcc');
    if (!$which_gcc_output) {
        die('gcc is not installed or not in PATH');
    }

    // Write the C code to a file
    file_put_contents($filename, $code);

    // Compile the C code
    $compile_command = "../clang-10 {$filename} -o temp";
    $output .= shell_exec($compile_command);

    // Run the compiled C code
    $run_command = './temp';
    $output .= shell_exec($run_command);

    // Delete the temporary files
    unlink($filename);
    unlink('temp');

    // Output the result
    echo $output;
}
