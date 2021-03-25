<form class="form-upload">
  <label class="input-personalizado">
    <span class="botao-selecionar">Selecione uma imagem</span>
    <img class="imagem" />
    <input type="file" class="input-file" accept="image/*">
  </label>
</form>




<!-- CSS -->
*{
  font-family: sans-serif;
  box-sizing:border-box;
  color:#FFF;
}

.form-upload{
  background:#333;
  display: block;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
  width: 350px;
}

.input-personalizado{
  cursor: pointer;
}

.imagem{
  max-width: 100%;
}

.input-file{
  display:none;
}




<!-- js -->

const $ = document.querySelector.bind(document);

	const previewImg = $('.imagem');
	const fileChooser = $('.input-file');

	fileChooser.onchange = e => {
		const fileToUpload = e.target.files.item(0);
		const reader = new FileReader();
		reader.onload = e => previewImg.src = e.target.result;
		reader.readAsDataURL(fileToUpload);
	};