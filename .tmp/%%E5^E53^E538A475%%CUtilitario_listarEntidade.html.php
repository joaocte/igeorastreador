<?php /* Smarty version 2.6.13, created on 2010-11-02 14:38:06
         compiled from CUtilitario_listarEntidade.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'CUtilitario_listarEntidade.html', 37, false),)), $this); ?>
<form name="formulario" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" >
	<script type="javascript">
		$(document).ready(function(){
			$('.nomeTabela').hide();
			$('.nomeEntidade').click(function(){
				$('.nomeTabela').toggle();
			});
		})
	</script>
<div class="container0 ui-widget-content ui-corner-all">
	<div class="a"></div>
	<div class="b"></div>
	<div class="c"></div>
	<div class="d"></div>
	<div class="e"></div>
	<div class="f"></div>
	<div class="g"></div>
	<div class="h"></div>
	<h1 class="ui-state-default ui-corner-all"><?php echo $this->_tpl_vars['tituloEspecifico']; ?>
</h1>
	<div class="lista">
		<table summary="text" class="tabela0 ui-widget-content ui-corner-all">
			<thead>
				<tr>
					<th class="nomeEntidade ui-state-default">Entidade</th>
					<th class="nomeNegocio ui-state-default">Negócio</th>
					<th class="nomeTabela ui-state-default">Tabela</th>
					<th class="nomeSequence ui-state-default">Sequence</th>
					<th class="existente ui-state-default centralizado">Campos Banco</th>
					<th class="definido ui-state-default centralizado">Campos Entidade</th>
					<th class="definido ui-state-default centralizado"></th>
					<th class="ui-state-default centralizado"></th>
					<th class="ui-state-default centralizado"></th>
				</tr>
			</thead>
			<tbody>
			<?php $_from = $this->_tpl_vars['listagem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['negocio'] => $this->_tpl_vars['nome']):
?>
			<tr class="<?php echo smarty_function_cycle(array('values' => 'linhaListagem1,linhaListagem2'), $this);?>
">
				<td class="nomeEntidade"><?php echo $this->_tpl_vars['nome']; ?>
 </td>
				<td class="nomeNegocio"><?php echo $this->_tpl_vars['negocios'][$this->_tpl_vars['negocio']]; ?>
</td>
				<td class="nomeTabela"><a title="Definição da tabela '<?php echo $this->_tpl_vars['tabelas'][$this->_tpl_vars['negocio']]; ?>
' no banco de dados" href="?c=CUtilitario_listarCamposTabela&tabela=<?php echo $this->_tpl_vars['tabelas'][$this->_tpl_vars['negocio']]; ?>
"><?php echo $this->_tpl_vars['tabelas'][$this->_tpl_vars['negocio']]; ?>
 </a></td>
				<td class="nomeSequence"><?php echo $this->_tpl_vars['sequencias'][$this->_tpl_vars['negocio']]; ?>
 </td>
				<td class="numerico direita"><?php echo $this->_tpl_vars['camposExistentes'][$this->_tpl_vars['negocio']]; ?>
</td>
				<td class="numerico direita"><?php echo $this->_tpl_vars['camposDefinidos'][$this->_tpl_vars['negocio']]; ?>
</td>
				<td align="left" ><?php echo $this->_tpl_vars['diferencas'][$this->_tpl_vars['negocio']]; ?>
</td>
				<td class="centralizado"><a href="?c=<?php echo $this->_tpl_vars['controles'][$this->_tpl_vars['negocio']]; ?>
" title="Ver Tela de Pesquisa dessa Entidade"><img border="0" src=".sistema/icones/application_view_list.png"/></a></td>
				<td class="centralizado"><a href="?c=CUtilitario_geradorDefinirEntidade&amp;entidade=<?php echo $this->_tpl_vars['negocio']; ?>
" title="Editar essa Entidade"><img border="0" src=".sistema/icones/pencil.png"/></a></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			</tbody>
		</table>
        <div id='menu_corpo'>
            <?php echo $this->_tpl_vars['menuPrograma']; ?>

        </div>
	</div>
</div>
</form>