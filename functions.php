<?php
function addTask($tasks, $newTask) {
    if (empty($newTask)) {
        return $tasks;
    }
    $tasks[] = $newTask;
    return $tasks;
}
?>