$('#assunto').change(function(){
  
  if ($(this).val()=='Envio de Currículo')
    $('#arquivoUpload').show('slow'); 
  else
    $('#arquivoUpload').hide(); 
  
  
});


$('#form-contato').submit(function(){
  
  $('.erro').hide();
  var erro = false;
  
  // Valida nome
  if ($('#nome').val().length<3){
    $('#nome').next().show();
    erro = true;
  }
  
  
  // Valida email
  var email	= $("#email").val();
  var emailFilter=/^.+@.+\..{2,}$/;
  var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/
  if(!(emailFilter.test(email))||email.match(illegalChars)){  
    $('#email').next().show();
    erro = true;
  } 
  
  // Valida assunto
  if ($('#assunto').val()==''){
    $('#assunto').next().show();
    erro = true;
  }  
  
  // Valida mensagem
  if ($('#msg').val()==''){
    $('#msg').next().show();
    erro = true;
  }   
  
  // Verifica se ocorreu algum erro
  if (erro){
    alert("O formulário não foi preenchido corretamente.");
    return false;
  }else{
    return true;
  }
    
  
  
});
