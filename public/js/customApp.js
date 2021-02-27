$(document).ready(function() {

    var bar = document.getElementById('js-progressbar');

    UIkit.upload('.js-upload', {
        url: '',
        multiple: true,

        beforeSend: function() {
            console.log('beforeSend', arguments);
        },
        beforeAll: function() {
            console.log('beforeAll', arguments);
        },
        load: function() {
            console.log('load', arguments);
        },
        error: function() {
            console.log('error', arguments);
        },
        complete: function() {
            console.log('complete', arguments);
        },

        loadStart: function(e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function(e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function(e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function() {
            console.log('completeAll', arguments);

            setTimeout(function() {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }
    });

    //Stepeer

    // GoTo second inputs (Endereço da empresa)
    $('#nextOne').click(function(){
        $("#dados-da-empresa").attr("hidden", true);
        $("#endereco-da-empresa").attr("hidden", false);
    })

    // Back to initial inputs (Dados da empresa)
    $('#previousOne').click(function(){
        $("#dados-da-empresa").attr("hidden", false);
        $("#endereco-da-empresa").attr("hidden", true);
    })

    //GoTo Third inputs ()
    $('#nextTwo').click(function(){
        $("#detalhes-da-empresa").attr("hidden", false);
        $("#endereco-da-empresa").attr("hidden", true);
    })

    // Back to second inputs (Dados da empresa)
    $('#previousTwo').click(function(){
      $("#detalhes-da-empresa").attr("hidden", true);
      $("#endereco-da-empresa").attr("hidden", false);
    })
});
