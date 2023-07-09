wp_upload_bits() function, WordPress will automatically store your uploaded files inside the uploads directory.
You can find your files inside the current year-month folder,

<?php
2 function fn_upload_file() {
3     if ( isset($_POST['upload_file']) ) {
4         $upload = wp_upload_bits($_FILES['file']['name'], null, $_FILES['file']['tmp_name']);
5         // save into database $upload['url]
6     }
7 }
8 add_action('init', 'fn_upload_file');
