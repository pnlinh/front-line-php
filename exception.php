<?php

try {
    $triggerException = fn() => throw new Exception();
    $triggerException();
} catch (Exception) {
    echo 'Oh no.';
}
