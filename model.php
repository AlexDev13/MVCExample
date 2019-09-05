<?php

function uploadFile($image)
{
    $name = $image['name'];
    $tmp_name = $image['tmp_name'];
    move_uploaded_file($tmp_name, 'uploads/' . $name);
}
