<div class="box box-widget">

    <div class="box-footer box-comments">
        <div class="box-comment">
            <div class="col-md-11">
                <div class="comment-text">
                    <span class="username">Usuário: Usuário 1</span>
                    <span class="username">Unidade: Unidade 1</span>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="col-md-1">
                 <span class="text-muted pull-right">8:03 01/01/2019</span>
                 <?= $this->Html->link('<i class="fas fa-edit" style="font-size:18px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/tratamento/editar_observacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Observação']) ?>
            </div>
        </div>

        <div class="box-comment">
            <div class="col-md-11">
                <div class="comment-text">
                    <span class="username">Usuário: Usuário 1</span>
                    <span class="username">Unidade: Unidade 1</span>
                       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="col-md-1">
                 <span class="text-muted pull-right">8:30 02/01/2019</span>
                 <?= $this->Html->link('<i class="fas fa-edit" style="font-size:18px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/tratamento/editar_observacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Observação']) ?>
            </div>
            <!-- /.comment-text -->
        </div>

        <div class="box-comment">
            <div class="col-md-11">
                <div class="comment-text">
                    <span class="username">Usuário: Usuário 1</span>
                    <span class="username">Unidade: Unidade 1</span>
                       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                </div>
            </div>
            <div class="col-md-1">
                 <span class="text-muted pull-right">8:12 03/01/2019</span>
                 <?= $this->Html->link('<i class="fas fa-edit" style="font-size:18px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/tratamento/editar_observacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Observação']) ?>
            </div>
            <!-- /.comment-text -->
        </div>

        <div class="box-comment">
            <div class="col-md-11">
                <div class="comment-text">
                    <span class="username">Usuário: Usuário 1</span>
                    <span class="username">Unidade: Unidade 1</span>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </div>
            </div>
            <div class="col-md-1">
                 <span class="text-muted pull-right">16:21 05/01/2019</span>
                 <?= $this->Html->link('<i class="fas fa-edit" style="font-size:18px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/tratamento/editar_observacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Observação']) ?>
            </div>
            <!-- /.comment-text -->
        </div>

    </div>
    <!-- /.box-footer -->
    <div class="box-footer">
        <form action="#" method="post">
          <div class="row">
            <div class="col-md-1">
                <i class="fas fa-comment-medical" style="font-size:400%"></i>
            </div>
            <div class="col-md-9">
                <span class="username"><b>Usuário:</b> Usuário 1</span><br>
                <span class="username"><b>Unidade:</b> Unidade 1</span>
                <?= $this->Form->input('Nova observação', ['type' => 'textarea']); ?>
            </div>
            <div class="col-md-1 col-md-offset-1">
              <br>
              <span class="text-muted pull-right"><?=date('h:i d/m/Y')?></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-md-offset-9">
              <button type="button" class="btn btn-block btn btn-primary">
                  <b>Adicionar Observação</b>
              </button>
            </div>
          </div>
        </form>
    </div>
    <!-- /.box-footer -->
</div>
