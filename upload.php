<?php

if (isset($_FILES['file']['name'])) {
    if (0 < $_FILES['file']['error']) {
        echo 'Error during file upload' . $_FILES['file']['error'];
    } else {
        if (file_exists('upload/' . $_FILES['file']['name'])) {
            echo 'File already exists : upload/' . $_FILES['file']['name'];
        } else {
            move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
            echo 'File successfully uploaded : upload/' . $_FILES['file']['name'];
        }
    }
} else {
    echo 'Please choose a file';
}
?> 
