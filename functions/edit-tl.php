<?php 
  
  if(isset($_POST['edit-tl'])) {

    $tlId = $_POST['tlId'];
    $translations = query("SELECT * FROM translation WHERE tlId = '$tlId'");

    $contentId = $translations[0]['contentId'];
    $content = query("SELECT * FROM content WHERE contentId = '$contentId'");

    $image = $content[0]['image'];
    $title = $content[0]['title'];
    $lang = $translations[0]['lang'];
    $lyric = $translations[0]['lyric'];

  }

  if(isset($_POST['edit-translation'])) {

    $tlId = $_POST['tlId'];
    $lyric = stripslashes($_POST['lirik']);
    $lyric = mysqli_real_escape_string($conn, $lyric);

    if(!empty($lyric)) {

      $query = "UPDATE translation SET lyric = '$lyric'";
      $update = mysqli_query($conn, $query);

      if($update) {
        // Reset Input
        $title = "";
        $lang = "";
        $lyric = "";
        $image = "";

        $status = "Terjemahan berhasil di-update! Ii desu yo!";

      } else {
        $error = "Terjadi kesalahan input. Moshiwake arimasen";
      }

    } else {
      $error = "Data tidak boleh kosong";
    }
  }
?>