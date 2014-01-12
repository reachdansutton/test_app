<?php
$new_image_name ='image_' . date('Y-m-d-H-i-s').'_'.uniqid() . '.jpg';
move_uploaded_file($_FILES["file"]["tmp_name"],"/home/techguy4/public_html/test/upload/".$new_image_name);