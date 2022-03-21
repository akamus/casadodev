Olá @D_Neto,  vejo que esta linha Celsius = input ("Digite os graus em Celsius: ") , está lendo o Celsius como string. Sendo assim o cálculo não está sendo feito.

Sugiro inserir a função que converte para float, dessa forma Celsius = float(input ("Digite os graus em Celsius: "))   


@D_Neto, a questão de entrada dos valores. Recebe string e precisa converter. Inseri float, caso seja entrada de número com ponto flutuante.

 

altura_retangulo = float(input ("Entre com a altura do retângulo"))
largura_retangulo = float(input ("Entre com a largura do retangulo"))
area_retangulo = (altura_retangulo * altura_retangulo)
print(area_retangulo)
