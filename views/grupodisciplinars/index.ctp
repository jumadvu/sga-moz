<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo Grupo Disciplinar', true)), array('action' => 'add'),array('class'=>'button')); ?>
	<h1><?php __('Grupos Disciplinares');?></h1>
        
    </div>

    <div class="table">
	<table cellpadding="0" cellspacing="0" class ="listing">
	<tr>
	<th><?php echo $this->Paginator->sort('Grupo Disciplinar','id');?></th>
	<th><?php echo $this->Paginator->sort('Nome','name');?></th>
			<th class="actions"><?php __('Accoes');?></th>
</tr>
		<?php
	$i = 0;
	foreach ($grupodisciplinars as $grupodisciplinar):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $grupodisciplinar['Grupodisciplinar']['id']; ?>&nbsp;</td>
		<td><?php echo $grupodisciplinar['Grupodisciplinar']['name']; ?>&nbsp;</td>
		     
		<td class="accoes">
	            <?php echo $this->Html->image("/img/login-icon.gif", array("alt" => "Brownies","title"=>"Visualizar",'url' => array('action' => 'view', $grupodisciplinar['Grupodisciplinar']['id']))); ?>
                    <?php echo $this->Html->image("/img/edit-icon.gif", array("alt" => "Brownies","title"=>"Editar",'url' => array('action' => 'edit', $grupodisciplinar['Grupodisciplinar']['id']))); ?>
                    <?php echo $this->Html->image("/img/hr.gif", array("alt" => "Brownies","title"=>"Eliminar",'url' => array('action' => 'delete',$grupodisciplinar['Grupodisciplinar']['id']), null, sprintf(__('Tem a certeza que deseja eliminar # %s?', true), $grupodisciplinar['Grupodisciplinar']['id']))); ?>
		</td>

	</tr>
<?php endforeach; ?>
	</table>

</div>
        <p>
<?php
//echo $this->Paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('anterior', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('proximo', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

</div>