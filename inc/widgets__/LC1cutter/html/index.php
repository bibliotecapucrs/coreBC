<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/JavaScript">
        function remveAcentos(nome) {
            // pre: insira uma string
            //post: retorna a string sem acentos
            nome = nome.replace("Á", "A");
            nome = nome.replace("É", "E");
            nome = nome.replace("Í", "I");
            nome = nome.replace("Ó", "O");
            nome = nome.replace("Ú", "U");
            nome = nome.replace("Ü", "U");
            nome = nome.replace("á", "A");
            nome = nome.replace("é", "E");
            nome = nome.replace("í", "I");
            nome = nome.replace("ó", "O");
            nome = nome.replace("ú", "U");
            nome = nome.replace("ä", "A");
            nome = nome.replace("Ä", "A");
            nome = nome.replace("ë", "E");
            nome = nome.replace("Ë", "E");
            nome = nome.replace("ï", "I");
            nome = nome.replace("Ï", "I");
            nome = nome.replace("ö", "O");
            nome = nome.replace("Ö", "O");
            nome = nome.replace("ü", "U");
            nome = nome.replace("Ü", "U");
            nome = nome.replace("Ç", "C");
            nome = nome.replace("à", "A");
            nome = nome.replace("À", "A");
            nome = nome.replace("è", "E");
            nome = nome.replace("È", "E");
            nome = nome.replace("ì", "I");
            nome = nome.replace("Ì", "I");
            nome = nome.replace("ò", "O");
            nome = nome.replace("Ò", "O");
            nome = nome.replace("ù", "U");
            nome = nome.replace("Ù", "U");
            nome = nome.replace("â", "A");
            nome = nome.replace("Â", "A");
            nome = nome.replace("ê", "E");
            nome = nome.replace("Ê", "E");
            nome = nome.replace("î", "I");
            nome = nome.replace("Î", "I");
            nome = nome.replace("ô", "O");
            nome = nome.replace("Ô", "O");
            nome = nome.replace("û", "U");
            nome = nome.replace("Û", "U");
            nome = nome.replace("ñ", "NZ");
            return nome;
        }
        var table;

        $(document).ready(function () {
            $(".numero").hide();

            $.ajax({
                url: "<?php echo get_template_directory_uri();?>/inc/classes/Widgets/LC1cutter/html/cutter.txt",
                success: function (result) {
                    table = result;
                }
            });

            $("form").submit(function () {
                submitCut();
                return false;
            });
        });

        function submitCut() {
            cutter = cutterFunc();
            $("#numero_tit").show();
            $("#numero_cut").text(cutter).show();
            $("#numero_cut_copy").text(cutter).show();
        }

        function cutterFunc() {
            var inputtxt = $('input[name="cutText"]').val();
            var original = inputtxt;
            tblc = table.split("\n");
            cutter = ''; //retorna o valor da tabela de corte que corresponde à entrada

            inputtxt = remveAcentos(inputtxt);
            inputtxt = inputtxt.replace(" ", "");
            inputtxt = inputtxt.trim();
            inputtxt = inputtxt.toLowerCase();
            for (j = 0; j < (tblc.length - 1); j++) {
                if (inputtxt >= tblc[j].slice(4) && inputtxt < tblc[j + 1].slice(4)) {
                    if (inputtxt[0] == 'a' || inputtxt[0] == 'e' || inputtxt[0] == 'i' || inputtxt[0] == 'o' || inputtxt[0] == 'u') {
                        cutter = inputtxt.slice(0, 1).toUpperCase() + tblc[j].slice(0, 3);
                    } else if (inputtxt[0] == 's' && inputtxt[1] != 'c') {
                        cutter = inputtxt.slice(0, 1).toUpperCase() + tblc[j].slice(0, 3);
                    } else if (inputtxt[0] == 's' && inputtxt[1] == 'c') {
                        cutter = inputtxt.slice(0, 3).toUpperCase() + tblc[j].slice(0, 3);
                    } else {
                        cutter = inputtxt[0].toUpperCase() + tblc[j].slice(0, 3);
                    }
                    cutter = cutter.replace("0", "");
                    cutter = cutter.replace("0", "");
                    break;
                }
            }
            return cutter;
        }
    </script>


<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-table"></i>
    <h3 class="box-title">Cutter-sanborn</h3>

    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fa fa-times"></i></button>
    </div>
  </div>

    <div class="box-body">

    <label><small>Digite o nome que deseja encontrar.</small></label>

    <form>
        <div class="input-group">
            <input type="text" class="form-control" class="form-control" type="text" name="cutText"/>
            <div class="input-group-btn">
              <button class="input-group-prepend btn btn-primary" type="submit"  onclick="submitCut()" >Gerar</button>
            </div>

        </div>
    </form>      
    <br>

    <div class="input-group">
        <span class="numero" id="numero_tit">
            <button class="btn btn-success btn-lg btn-block" onclick="copiaCutter()">Copiar
                <span  style="font-weight: bold" id="numero_cut"></span>
                <textarea style="display: none;  width: 1px; height: 1px; border: none #00a65a;  resize: none; background: #00a65a; overflow: hidden;" id="numero_cut_copy"></textarea>
            </button>         
        </span>
    </div>

    </div><!--box-body-->
    <div class="box-footer clearfix">
        <a href="<?php echo get_template_directory_uri();?>/inc/classes/Widgets/LC1cutter/html/about.html" target="_blank" class="card-link">Como usar</a> | 
        <a href="<?php echo get_template_directory_uri();?>/inc/classes/Widgets/LC1cutter/html/tabela.html" target="_blank" class="card-link">Ver tabela</a>
    </div>

</div><!--box box-info-->

<script type="text/javascript">
    function copiaCutter() {

    var value = $("#numero_cut_copy").text(cutter).show();
    var copyText = document.getElementById("numero_cut_copy");
    copyText.select();
    document.execCommand("copy");
    alert("Cutter copiado: " + copyText.value);
}
</script>