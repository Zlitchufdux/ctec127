<?php
$jason = "Good guy";

if ($jason == "Good guy") {
    echo "Jason is a nice guy";
} else {
    echo "Not Jason";
}

// this is a ternary operator. Line 11 is the same as writing line 4-7
echo $jason == "Nice guy" ? "Jason is a nice guy" : "Not Jason";
 // (the ?) is the same as (if) and (the :) is the same as (else)      