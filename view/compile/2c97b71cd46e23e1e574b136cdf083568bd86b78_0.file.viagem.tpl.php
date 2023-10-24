<?php
/* Smarty version 3.1.48, created on 2023-10-23 15:32:17
  from 'C:\xampp\htdocs\view\templates\viagem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_653675e1ad2bb8_92061798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c97b71cd46e23e1e574b136cdf083568bd86b78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\view\\templates\\viagem.tpl',
      1 => 1698067936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/footer.tpl' => 1,
  ),
),false)) {
function content_653675e1ad2bb8_92061798 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Viagem</h2>
                    <?php if ($_smarty_tpl->tpl_vars['id_nivel']->value == 1) {?>
                        <form id="relatorioForm" class="row" action="<?php echo $_smarty_tpl->tpl_vars['relatorio']->value;?>
" method="POST" target="_blank">
                        <div class="form-group mx-3">
                            <label for="cc-exp" class="control-label mb-1">Data de Saida</label>
                            <input id="initial-date" name="initial-date" type="date" class="form-control cc-exp">
                        </div>
                        <div class="form-group mx-3">
                            <label for="cc-exp" class="control-label mb-1">Ate a Data</label>
                            <input id="final-date" name="final-date" type="date" class="form-control cc-exp">
                        </div>
                        <div class="overview-wrap mx-3">
                            <button id="gerarPdfBtn" type="button" class="au-btn au-btn-icon au-btn--blue">gerar pdf</button>
                        </div>
                    </form>
                    <?php }?>
                    <button class="au-btn au-btn-icon au-btn--blue" onclick="new Viagem().addViagem()">
                        <i class="zmdi zmdi-plus"></i>adicionar</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35"></h3>
                <div class="table-responsive table-responsive-data2" style="overflow-x: auto;">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID_VIAGEM</th>
                                <th>MATRICULA DO CARRO</th>
                                <th>MOTORISTA</th>
                                <th>CARGA</th>
                                <th>ORIGEM</th>
                                <th>DESTINO</th>
                                <th>DESCRIÇÃO</th>
                                <th>PESO DA CARGA</th>
                                <th>VALOR DA CARGA</th>
                                <th>SAIDA</th>
                                <th>PREVISAO DE CHEGADA</th>
                                <th>STATUS</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="table-body-viagem">
                            <tr class="spacer"></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
/Viagem/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    document.getElementById("gerarPdfBtn").addEventListener("click", function () {
        const initialDateInput = document.getElementById("initial-date");
        const finalDateInput = document.getElementById("final-date");
        const initialDateValue = initialDateInput.value;
        const finalDateValue = finalDateInput.value;

        if (!initialDateValue.trim() || !finalDateValue.trim()) {
            alert("As datas de início e fim devem ser preenchidas.");
        } else {
            document.getElementById("relatorioForm").submit();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}