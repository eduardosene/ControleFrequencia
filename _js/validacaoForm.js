
 function validarSenha(){

        NovaSenha = document.cadastroProfessor.tSenhaProfessor.value;
        CNovaSenha = document.cadastroProfessor.tRedigitarProfessor.value;
        if (NovaSenha != CNovaSenha){ 
             alert("SENHAS INCORRETAS! \nFAVOR DIGITAR SENHAS IGUAIS");
             return false;
        }
        return true;
 }
