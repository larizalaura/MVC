<?php $this->layout = 'prototipo/public' ?>


<div class="row">
    <div class="col-sm-offset-2 col-md-8">

        <form class="form-horizontal">
            <div class="panel panel-primary">

                <div class="panel-heading">Contato</div>

                <div class="panel-body">
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Nome:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Nome">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="formGroupInputSmall">Assunto:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Assunto">
                        </div>
                    </div>                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="formGroupInputSmall">Mensagem:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>   
                    <div class="form-group ">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default ">Enviar</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>            
</div> 
