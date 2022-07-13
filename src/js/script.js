function previewImg(event) {
  let close = document.getElementById('close');
  let reader = new FileReader();

  let output = document.getElementById('preview');
  let input = document.getElementById('gambar');

  reader.onload = function() {
    output.src = reader.result;
    close.classList.remove("d-none");
  }

  reader.readAsDataURL(event.target.files[0]);

  close.addEventListener('click', () => {
    close.classList.add("d-none");
    output.src = "";
    input.value = "";
  })
}