const actualBtn = document.getElementById('myFile');

const fileChosen = document.getElementById('file-choose');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})