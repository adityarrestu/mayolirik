<?php 

  if(isset($_POST['translation'])) {
    
    $contentId = $_POST['id'];
    $content = query("SELECT * FROM content WHERE contentId = '$contentId'");

    $title = $content[0]['title'];
    $image = $content[0]['image'];

  }

  if(isset($_POST['tl'])) {

    $contentId = $_POST['contentId'];
  
    $lang = stripslashes($_POST['bahasa']);
    $lang = mysqli_real_escape_string($conn, $lang);
    $lyric = stripslashes($_POST['lirik']);
    $lyric = mysqli_real_escape_string($conn, $lyric);

    if(!empty($lang) && !empty($lyric)) {
      
      $translation = query("SELECT lang FROM translation WHERE contentId = '$contentId'");

      // cek tl jika sudah ada
      foreach($translation as $tl) {
        if($tl['lang'] == $lang) {
          // jika ada di-pass keluar
          $copy = 1;
          goto pass;

        } else {
          $copy = 0;
        }
      }
      pass:

      if($copy == 0) {

        $query = "INSERT INTO translation VALUES ('', '$contentId', '$lang', '$lyric')";
        $insert = mysqli_query($conn, $query);
    
        if($insert) {
          // Reset Input
          $title = "";
          $lang = "";
          $lyric = "";

          $status = "Sugoi! Terjemahan baru ditambahkan!";

        } else {
          $error = "Terjadi kesalahan input. Moshiwake arimasen!";
        }

      } else {
        $error = "Terjemahan sudah ada. Pilih bahasa lain";
      } 

    } else {
      $error = "Data tidak boleh kosong";
    }
  }

?>