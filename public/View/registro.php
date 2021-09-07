<?php
require('../../vendor/autoload.php');
use App\bean\FuncaoBean;

$funcaoBean = new FuncaoBean();
?>
<div class="container-line">
    <form method="post" action="../../App/rules/FieldsRule.php">
        <div class="form-group">
            <label for="nome">Nome do funcionário:</label>
            <input type="text" id="nome" class="input-control" onblur="return upperCase()">
        </div>

        <div class="form-group">
            <label for="data_entrada">Data de entrada:</label>
            <input id="data_entrada" type="text" class="input-control">
        </div>

        <div class="form-group">
            <label for="funcao">Selecione uma função</label>
            <select class="input-control" name="selectFun" id="funcao">
                <option value="">
                </option>
                <?php
                $resultado = $funcaoBean->recuperaTodasFuncoes(true);
                foreach ($resultado as $r){
                    ?>
                    <option id="<?= $r['id_funcao']; ?>" value="<?= $r['funcao'];?>"><?= $r['funcao'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>






