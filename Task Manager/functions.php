<?php

function isAllowed ($age) {
    if ($age >= 21) {
        echo 'Youre in';
    } else {
        echo 'Youre out !';
    };
}