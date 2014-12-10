<?php

ob_start();
function open($path, $name) {
    echo "\n--- SESSION OPEN ---\n";
}

function read($sessionId) {
    echo "\n--- SESSION READ ---\n";
    return serialize(['a' => 'b']);
}

function write($sessionId, $data) {
    echo "\n--- SESSION WRITE ---\n";
}

function close() {
    echo "\n--- SESSION CLOSE ---\n";
}

function destroy($sessionId) {
    echo "\n--- SESSION DESTROY ---\n";
}

function gc($lifetime) {
    echo "\n--- SESSION GC ---\n";
}

session_set_save_handler('open', 'close', 'read', 'write', 'destroy', 'gc');

echo "\nTesting Session Without Updated Values\n-----------------------------------\n";
echo "\n> session_start()\n";
session_start();
echo "\n> \$_SESSION variable not changed\n";
