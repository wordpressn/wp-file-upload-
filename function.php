/*  if you wish to save files inside your own directory */
<?php
unction fn_upload_file() {
2     if ( isset($_POST['upload_file']) ) {
3         $upload_dir = wp_upload_dir();
4
5         if ( ! empty( $upload_dir['basedir'] ) ) {
6             $user_dirname = $upload_dir['basedir'].'/product-images';
7             if ( ! file_exists( $user_dirname ) ) {
8                 wp_mkdir_p( $user_dirname );
9             }
10
11             $filename = wp_unique_filename( $user_dirname, $_FILES['file']['name'] );
12             move_uploaded_file($_FILES['file']['tmp_name'], $user_dirname .'/'. $filename);
13             // save into database $upload_dir['baseurl'].'/product-images/'.$filename;
14         }
15     }
16 }
17 add_action('init', 'fn_upload_file');
?>
