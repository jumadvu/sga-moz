<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
      <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Matriculas', true)), array('action' => 'index'),array('class'=>'button')); ?>
	<h1><?php __('Nova Matricula');?></h1>
        <div class="breadcrumbs"><?php //echo $html->getCrumbs(' > ','Home'); ?></div>
    </div>
    <div class="table">

<img src="/sistema/img/ajax-loader.gif" style="display:none" id="ajax-loader">
<?php echo $form->create('Matricula');?>
        <table class="listingform" cellpadding="0" cellspacing="0">
         <tr>
            <th class="full" colspan="2">Carregamento de Matricula</th>
         </tr>
         <tr>
            <?php
		echo $this->Form->input('Aluno_id',array('label'=>'Estudante','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('t0003curso_id',array('label'=>'Nome do Curso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'cursoid'));
		echo $this->Form->input('t0005planoestudo_id',array('label'=>'Plano de Estudo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false,'id'=>'planoestudoid'));
		echo $this->Form->input('data',array('monthNames'=>array('Janeiro','Fevereiro','Marco','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'),'dateFormat'=>'DMY','label'=>'Data de Ingresso','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
		echo $this->Form->input('tg0021estadomatricula_id',array('options'=>array('1'=>'Normal','2'=>'Anulada','3'=>'Suspensa','4'=>'Concluida'),'label'=>'Estado da Matricula','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
	    
        $options = array('url' => 'ajax_update_plano_estudos/','update' => 'planoestudoid','indicator'=>'ajax-loader');
        echo $ajax->observeField('cursoid', $options);
		  ?>
        </tr>
      
    <tr><td></td><td><?php echo $this->Form->end(__('GRAVAR', true));?></td></tr>
        </table>
</div>
</div>