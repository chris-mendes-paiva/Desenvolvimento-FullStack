<?php
$nome_arquivo = 'lista_status_manutencao_veiculos_' . date("Y_m_d") . '.xlsx';

global $vars, $tela_mapa_bootstrap, $bd;

if ($vars['cliente']) {
    $vars['cliente'] = explode(',', $vars['cliente']);
}

header('Content-disposition: attachment; filename=' . $nome_arquivo);
header('Content-type: text/plain');

$vet_header = array();
$vet_header[] = 'cliente';
$vet_header[] = utf8_encode('placa');
$vet_header[] = 'Status';
$vet_header[] = 'km_manutencao_programada';
$vet_header[] = 'km_atual';
$vet_header[] = 'Vkm_excedente';
$vet_header[] = 'km_ate_proxima_manutencao';
$vet_header[] = 'data_ultima_locomocao';
$vet_header[] = utf8_encode('localizacao_atual');
//echo implode(';', $vet_header);


$teste = array(
            array('Alan Walker', 'Singer'),  
            array('Cristiano Ronaldo', 'Jogador de futebol'),  
            array('Saina Nehwal', 'Jogador de Badminton'),  
            array('Arijit Singh', 'Singer'),  
            array('Terence Lewis', 'Dançarino'),
            array('Rafel Desis', 'Estag'),
            array('Terence Lewis', 'Dev'),
            array('Terence Lewis', 'Dev'),
            array('Rodrigo Lewis', 'Dev')
    );

echo json_encode($teste);

/*
 * 
 * csvFileData  = [  
                    ['Alan Walker', 'Singer'],  
                    ['Cristiano Ronaldo', 'Jogador de futebol'],  
                    ['Saina Nehwal', 'Jogador de Badminton'],  
                    ['Arijit Singh', 'Singer'],  
                    ['Terence Lewis', 'Dançarino']  
                 ];  
 */
