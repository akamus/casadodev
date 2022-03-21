
<?php 
/**
 * Áureo Souto
 * aureosouto@gmail.com
 * akamus.souto@gmail.com
 * https://forum.casadodesenvolvedor.com.br/topic/44035-disponibilizar-arquivos-pdf-anualmente/#comment-45235
 * 
 */

$ano = '';
/** nome do arquivo é o CPF */
$cpf = '';
$anos = [];
$pdfs = [];
/** 
 * a partir de 2018 até o ano atual 
 *  função date('Y') retorna o ano atual
*/
for ($i = 2018; $i <= date('Y'); $i++) {
    //array_push insere um item no array
    array_push($anos, $i);
}

$pasta_arquivos = '/var/www/projeto/arquivos' ;

/** percorre as pastas de cada ano em busca dos arquivos */
foreach ($anos as $ano) {

        $pdf = $pasta_arquivos . '/' . $ano . '/' . $cpf . '.pdf';

    // se encontrar, armazena com índice do ano
        if (file_exists($pdf)) {
            $pdfs[$ano] = base64_encode($pdf);
        }
    }

?>


<?php  foreach ($pdfs as $ano => $pdf) {  ?>
    
  <a href="/download.php?file=<?=base64_decode($pdf)?>?nome=novo_nome" target="_blank">Download</a>
  
 <?php  } ?> 


<?php 

/** conteúdo do arquivo download.php */
 
        $arquivo = $_GET['file'];
        $nome = $_GET['nome'];

        if (isset($arquivo) && file_exists($arquivo)) {
            // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
            switch (strtolower(substr(strrchr(basename($arquivo), "."), 1))) {
            // verifica a extensão do arquivo para pegar o tipo
                case "pdf": $tipo = "application/pdf";
                    break;
               default:
               break;
            }
            header("Content-Type: " . $tipo);
            // informa o tipo do arquivo ao navegador
            header("Content-Length: " . filesize($arquivo));
            // informa o tamanho do arquivo ao navegador
            header("Content-Disposition: attachment; filename=" . $nome . basename($arquivo));
            // informa ao navegador que é tipo anexo e faz abrir a janela de download,
            //tambem informa o nome do arquivo
            readfile($arquivo); // lê o arquivo
            //   exit; // aborta pós-ações
        }
    
    
