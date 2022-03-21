link: https://forum.casadodesenvolvedor.com.br/topic/44060-acompanhar-cota%C3%A7%C3%A3o-de-a%C3%A7%C3%B5es-utilizando-googlesheets-b%C3%A1sico/#comment-45265

Para quem investe em ações e gosta de montar sua planilha, acho válido citar a função GOOGLEFINANCE do editor de GoogleSheets (editor de planilhas da empresa Google). Trata-se de uma função fácil de utilizar.

Como exemplo, montei uma planilha pra acompanhar ações  identificadas por:

NUBR33 
BBSD11

Sintaxe básica:  =GOOGLEFINANCE( [célula] ; " [parâmetro] ")   

 Passos:

apenas inseri os códigos das ações e fiz na primeira linha (NUBR33)
obter o preço atual: inseri na célula   =GOOGLEFINANCE($G8;"price")  onde $G8 corresponde a célula do código e "price" ao valor(parâmetro) que quero obter
do restante eu alterei apenas o parâmetro 
para preço de abertura:  =GOOGLEFINANCE($G8;"priceopen")
para alta do dia :   =GOOGLEFINANCE($G8;"high")
para baixa do dia:  =GOOGLEFINANCE($G8;"low")
alta em 52 semanas:   =GOOGLEFINANCE($G8;"high52")
para linha de baixo(BBSD11), apenas arrastei para completar. O que altera é apenas a linha ( onde tem $G8 muda para $G9 ). Cabe citar que o $ junto com a letra que representa a coluna, é apenas pra fixar a coluna ao fazer o efeito de "arrastar".

 

Segue o link  da documentação em Português apenas para entender,  mas os parâmetros são aceitáveis em inglês conforme esta documentação.

Estou à disposição, caso eu possa auxiliar.

 
