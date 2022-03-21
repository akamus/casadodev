
link : https://forum.casadodesenvolvedor.com.br/topic/44048-como-recuperar-dados-de-uma-tabela-para-serem-mostrados-no-layout-seguinte-estou-usando-laravel-8x/#comment-45251
Tudo bem @Lucas Torres,

Não conheço do Laravel e não deu pra entender se você está:

recebendo dados de um formulário :
          neste caso você receber no método indexModerarVagas(Request $request) e seguir como neste exemplo, com os campos (name) do formulário de onde partiu o submit (envio)

 

ou apenas passando o user->id como parâmetro.
//algo assim, não conheço da sintaxe do laravel 
Route::get('/moderar/{id}', [JobsController::class, 'indexModerarVagas']);
mas pode consultar a documentação aqui

neste caso, percebi que não está recebendo o parâmetro por rota definida. Você deve definir a rota de sua action ( método), recebendo o parâmetro e depois, usar o $id recebido para realizar suas consultas.

 

Espero ter ajudado e estou à disposição.
