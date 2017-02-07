
<?php
if ($certificados == null) {
    echo '<div class="alert alert-danger" role="alert">Certificado INVÁLIDO</div>';
    echo '<div class="alert alert-danger" role="alert">Não foi encontrado o registro desse certificado verifique se o mesmo foi digitado corretamente</div>';
}
foreach ($certificados as $c) {
    $data= date(('d/m/Y'), strtotime($c->data));
    echo '<div class="alert alert-success" role="alert">Certificado Válido</div>';
    echo '<table class="table">';
    echo '<tr>';
    echo '<td><b> Código do Certificado </td>';
    echo '<td><b> Aluno </td>';
    echo '<td><b> Curso / Palestras </td>';
    echo '<td><b> Data </td>';
    echo '<td><b> Carga Horária </td>';
    echo '<td><b> Professor / Palestrante </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<tr>';
    echo '<td>' . $c->codigo . '</td>';
    echo '<td>' . $c->nome_aluno . '</td>';
    echo '<td>' . $c->nome_curso . '</td>';
    echo '<td>' . $data . '</td>';
    echo '<td>' . $c->carga_horaria . ' horas</td>';
    echo '<td>' . $c->professor . '</td>';

    echo '</tr>';
    echo '</table>';
    echo '<br> <div class="alert alert-success" role="alert">Este certificado foi encontrado em nossos registros</div>';
    
    
}
?>    
