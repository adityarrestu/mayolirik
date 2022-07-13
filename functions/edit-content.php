<?php 

  if(isset($_POST['edit'])) {
    
    $contentId = $_POST['id'];
    $content = query("SELECT * FROM content WHERE contentId = '$contentId'");

    $title = $content[0]['title'];
    $image = $content[0]['image'];
    $lang = $content[0]['lang'];
    $lyric = $content[0]['lyric'];

  }

  if(isset($_POST['edit-content'])) {

    $contentId = $_POST['contentId'];
    $title = stripslashes($_POST['title']);
    $lang = stripslashes($_POST['bahasa']);
    $lyric = stripslashes($_POST['lirik']);
    
    $gambar = query("SELECT image FROM content WHERE contentId = '$contentId'")[0]['image'];

    if($_FILES['gambar']['name'] != null) {
      $image = upload();

    } else {
      $image = $gambar;      
    }
    $status = "di sini";

    if(!empty($title) &&
      !empty($lang) &&
      !empty($lyric) &&
      !empty($image)
    ) {

      $query = "UPDATE content SET
        title = '$title', 
        lang = '$lang', 
        lyric = '$lyric', 
        image = '$image'
        WHERE contentId = '$contentId'
      ";
      $update = mysqli_query($conn, $query);

      if($update) {
        // Reset Input
        $title = "";
        $lang = "";
        $lyric = "";
        $image = "";

        $status = "Yorokobe Shounen! Konten berhasil di-update!";

      } else {
        $error = "Terjadi kesalahan karena error";
      }

    } else {
      $error = "Data masukan tidak boleh kosong";  
    }
  }
?>