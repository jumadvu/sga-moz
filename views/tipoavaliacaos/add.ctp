<?php //include('menu.ctp'); ?>
<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Tipo de Avaliacoes', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Tipo de  Avaliacao - Adicionar');?></h1>
        <div class="breadcrumbs"><?php echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">


<?php echo $form->create('Tipoavaliacao');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Carregamento de Novo Tipo de Avaliacao</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('name',array('label'=>'Nome','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
        echo $this->Form->input('t0014epocaavaliacao_id',array('label'=>'Epoca de Avaliacao','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
         ?>
        </tr>
      
    <tr><td></td><td><?php echo $this->Form->end(__('Carregar', true));?></td></tr>
        </table>
</div>
</div>