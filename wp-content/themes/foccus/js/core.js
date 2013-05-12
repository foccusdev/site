
$('#assunto').change(function(){
  
  if ($(this).val()=='4')
    $('#arquivoUpload').show('slow'); 
  else
    $('#arquivoUpload').hide(); 
  
  
});

