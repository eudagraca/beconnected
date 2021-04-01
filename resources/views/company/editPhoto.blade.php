@extends('layouts.app')

@section('content')
<div class="uk-container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="" action="{{route('updatephoto', $iddetalhe->id)}}" action="/updatephoto/{{$iddetalhe->id}}" method="post" id="editimagesForm__{{$images->id}}" enctype="multipart/form-data">
                
                    {{ csrf_field() }}

                        <div class="js-upload uk-placeholder uk-text-center">
                        <legend class="uk-legend " for="Product Name">Editar imagem da montra</legend>
                        <!-- <label for="Product Name">Product photos (can attach more than one):</label> -->
                            <div class="uk-margin">
                                <div class="uk-width-1-1" uk-grid>
                                    <div class="uk-width-1-1@s">
                                        <p>Imagem actual</p>
                                    <img class="uk-border-circle imagem uk-possition-center" style="width: 150px; height: 150px; background-color: rgba(240, 248, 255, 0)" alt="Logo"  uk-img data-src="{{ url("storage/{$iddetalhe->src}") }}" />
                                    </div>

                                    <div class="uk-width-1-2@s">
                                        <input value="{{ $images->src }}" type="text" name="src" hidden>
                                        <input class="uk-input" name="name" type="text" value="{{ $images->name ?? old('name') }}" placeholder="Nome">
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <input class="uk-input"  name="price" type="text" value="{{ $images->price ?? old('price') }}" placeholder="Preço: 299 Mts">
                                    </div>'
                                
                                    <div class="uk-width-1-1@s">
                                        <input class="uk-input" name="descrition" type="text" value="{{ $images->descrition ?? old('descrition') }}" placeholder="Descrição do artigo"> 
                                    <!-- 2 -->
                                    </div>
                                </div>
                            </div>
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-middle">Anexe a imagem soltando-a aqui</span>
                            <div uk-form-custom>
                                <!-- <input type="file" multiple> -->
                                <input type="file" class="form-control input-file" name="photos"  value="{{ $images->src ?? old('photos') }}"/>
                                <span class="uk-link">anexar images</span>
                            </div>
                        </div>
                        <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                    <input type="submit" class="uk-button radius uk-align-right uk-button-primary" value="Actualizar" form="editimagesForm__{{$images->id}}" />
                </form>
            </div>
        </div>
    </div>  
</div>


<script>

const $ = document.querySelector.bind(document);
const previewImg = $('.imagem');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(fileToUpload);
};
</script>

<script>

const $ = document.querySelector.bind(document);
const previewImg = $('.imagens');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
    const fileToUpload = e.target.files.item(0);
    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(fileToUpload);
};
</script>
@endsection