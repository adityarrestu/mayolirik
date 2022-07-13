<?php 
  if(isset($_POST['hapus'])) {

    $contentId = $_POST['contentId'];

    $gambar = query("SELECT image FROM content WHERE contentId = '$contentId'")[0]['image'];
    $gambarLama = './src/img/'.$gambar;
      
    $query = "DELETE FROM content WHERE contentId = '$contentId'";
    $delete = mysqli_query($conn, $query);

    if($delete) {

      if(!unlink($gambarLama)) {
        $error = "Tidak bisa menghapus gambar karena error";
      }
      
      $status = "Content berhasil dihapus! Otsukaresama!";
    }
  }

?>