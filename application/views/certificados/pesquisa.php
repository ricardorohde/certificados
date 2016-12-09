<center>
<h3><b>Autenticação do Certificado</b></h3>
<h5>O objetivo desta página é validar se o certificado que você possui em mãos foi emitido pela Fatec Itapira. Digite o Código de Autenticidade (impresso no certificado, do lado inferior direito).</h5>
<h5>**LEMBRE-SE QUE CADA CERTIFICADO EMITIDO POSSUI UM CÓDIGO VERIFICADOR**</h5><br><br>

<form action="<?php echo base_url()?>index.php/Certificados/pesquisar" class="form-inline">
  <div class="form-group">
    <input type="text" name="termo" class="form-control" id="codigo" placeholder="Código do Certificado">
  </div>
  <button type="submit" class="btn btn-default">Validar</button>
</form>
</center>
</br></br></br> </br>
