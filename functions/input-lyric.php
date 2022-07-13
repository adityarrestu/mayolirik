<?php 
  include 'image-up.php';

  if(isset($_POST['submit'])) {

    $title = stripslashes($_POST['title']);
    $title = mysqli_real_escape_string($conn, $title);
    $lang = stripslashes($_POST['bahasa']);
    $lang = mysqli_real_escape_string($conn, $lang);
    $lyric = stripslashes($_POST['lirik']);
    $lyric = mysqli_real_escape_string($conn, $lyric);
    $image = upload();

    if(!empty($title) &&
      !empty($lang) &&
      !empty($lyric) &&
      !empty($image)
    ) {

      $query = "INSERT INTO content VALUES
        ('', '$title', '$lang', '$lyric', '$image')
      ";
      $upload = mysqli_query($conn, $query);

      if($upload) {
        // Reset Input
        $title = "";
        $lang = "";
        $lyric = "";
        $image = "";

        $status = "Yorokobe Shounen! Konten berhasil ditambahkan!";

      } else {
        $error = "Terjadi kesalahan karena error";
      }

    } else {
      $error = "Data masukan tidak boleh kosong";  
    }

  }
?>