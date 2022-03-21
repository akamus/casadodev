
link : https://forum.casadodesenvolvedor.com.br/topic/44077-altera%C3%A7%C3%A3o-de-estrutura-javascript-emiss%C3%A3o-de-etiquetas-codbar/#comment-45293

Olá @sergiovtp, não domino javascript. Conheço mais de PHP. Recomendo "misturar" linguagens somente se não houver outra possibilidade de recursos.( apenas sugestão).

 

Fiz algumas alterações e acrescentei jquery. Espero que eu tenha entendido sua demanda.

 


<html>
<head>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body bgcolor="#fff" onload="submitForm()">


<script language="javascript">
    
    //aqui recebe o valor de GET
    var title = 'teste';

//adiciona svg para cada código de barras gerado
// o index é o valor que altera a id do svg
 function addSVG(index){    
          $("body").append('<svg id="codBarras'+index+'"></svg>');
       }

    for (var i = 1; i <= 70; i++) {
        //adiciona o svg
         addSVG(i);
         //insere o codigo de barras
         JsBarcode('#codBarras'+i, title+i);           

    }          

   </script>    
   

</body>
</html>
Parece que cada código gerado estava sobrepondo o anterior no mesmo lugar (id="codBarras"), por isso resolvi colocar alterando o id.

Espero ter ajudado.

 
