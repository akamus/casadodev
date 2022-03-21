link: https://forum.casadodesenvolvedor.com.br/topic/44040-java-estou-com-dificuldade-para-validar-a-quantidade-de-paresn%C3%A3o-num%C3%A9ricos-em-compara%C3%A7%C3%A3o-ao-valor-de-x-segue-o-enunciado/#comment-45292

Olá @LearningDev,

espero que eu tenha entendido a questão, mesmo não conhecendo tanto de java:

public class Main {
    public static void main(String args[]) {      
      
      int x=2;
      int[] vetor = {1,5,3,4,2};
      //primeiro valor 
      int teste1 = 0;
      //valor a ser testado o primeiro valor
      int teste2 = 0;
    //contar quantos pares encontrados
      int contador = 0;
      
      for (int i = 0; i < vetor.length; i++) {
     
       teste1 = vetor[i];
        
      for (int j = 0; j < vetor.length; j++) {
     
      teste2 = vetor[j];
            
       
            if(teste1 != teste2){
                
                
                if(teste1 - teste2 == x ){ 
                
                 System.out.println("["+teste1+","+teste2+"]");
                
                  contador ++;
                
                    
              }else{
                  
                }
                
            }else{
                 //     System.out.println("valores iguais");
            
            }
          
            
}
            
}
      
      

      System.out.println("Pares encontrados: " + contador);
    }
}
Para testar, basta colar o código aqui e executar.

Estou à disposição, na dúvida. Valeu!
