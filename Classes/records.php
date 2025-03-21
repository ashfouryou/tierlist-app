<?php

$recordFile = "branch_records.txt";
$branchName = trim(shell_exec("git branch --show-current"));
$timestamp = date("Y-m-d H:i:s");

if ($branchName) {
    file_put_contents($recordFile, "$timestamp - $branchName\n", FILE_APPEND | LOCK_EX);
    echo "Branch '$branchName' recorded.\n";
} else {
    echo "No branch found.\n";
}

?>
