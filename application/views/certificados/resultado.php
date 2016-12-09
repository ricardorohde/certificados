                <table>
                        <tr>
                            <td>Código</td>
                        </tr>
                    <tbody>
                        <?php
                        if($certificados == null){
                            echo '<tr><td colspan="4">Nenhum certificado enconstrado</td></tr>';
                        }
                        foreach ($certificados as $c) {
                            echo '<tr>';
                            echo '<td>' . $c->id_certificado . '</td>';
                             echo '<td>' . $c->nome_aluno . '</td>';
                              echo '<td>' . $c->nome_curso . '</td>';
                            echo '</tr>';
                        } ?>
                        
                    </tbody>
                </table>


