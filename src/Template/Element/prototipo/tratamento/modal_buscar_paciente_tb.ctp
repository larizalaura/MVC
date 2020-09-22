<div class="modal fade" tabindex="-1" role="dialog" id="modalBuscarPaciente">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cadastrar Profissional</h4>
            </div>
            <div class="modal-body">
                <?= $this->Form->create('buscar'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->input('Nome do profissional',['label'=>'Nome do Profissional','id'=>'nome-profissional-cadastro']); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <?= $this->Form->input('Sigla do Conselho',['options'=>['-','CRM','COREM']]); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->input('Número'); ?>
                    </div>
                    <div class="col-md-3">
                        <?= $this->Form->input('Estado Emissor',['options'=>['-','SP','MG']]); ?>
                    </div>
                    <div class="col-md-3">
                        <br>
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cadastrar</button>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
                <br>
                <table class="table table-condensed table-striped">
                    <thead>
                    <tr>
                        <th>Ação</th>
                        <th>Nome do Profissional</th>
                        <th>Sigla do Conselho</th>
                        <th>Número do Conselho</th>
                        <th>Estado Emissor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="" class="btn btn-default btn-xs">Escolher</a></td>
                        <td>Profissional 001</td>
                        <td>CRM</td>
                        <td>123456</td>
                        <td>SP</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
