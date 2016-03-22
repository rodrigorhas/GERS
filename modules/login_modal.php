<div class="modal fade" id="login-overlay">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fechar</span></button>
              <h4 class="modal-title" id="myModalLabel">Login</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">E-mail</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Digite seu e-mail" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Senha</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Digite sua senha">
                                  <span class="help-block"></span>
                              </div>
                              <?php 
                                if(Session::exists('login')){
                              ?>
                              <div id="loginErrorMsg" class="alert alert-error hide"><?php echo Session::flash('login');?></div>
                              <?php
                                }
                              ?>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Mantenha-me conectado
                                  </label>
                                  <p class="help-block">(Se esse for um computador pessoal)</p>
                              </div>
                              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                              <button type="submit" class="btn btn-success btn-md">Entrar</button>
                              <a href="/forgot/" class="">Não estou conseguindo entrar!</a>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</div>
