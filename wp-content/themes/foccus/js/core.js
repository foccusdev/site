
$('#assunto').change(function(){
  
  if ($(this).val()=='Envio de Currículo')
    $('#arquivoUpload').show('slow'); 
  else
    $('#arquivoUpload').hide(); 
  
  
});

