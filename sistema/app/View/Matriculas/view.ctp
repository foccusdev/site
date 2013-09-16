<a href="javascript:history.back(-1)" class="seta-voltar float-left" title="Clique aqui para voltar para a listagem."></a> 
<h1>Dados da Matrícula</h1>

<form>
  
  <div class="dado-form">
    <label>Nome:</label>
    <span><?= $matricula['Matricula']['nome'] ?></span>
  </div>

  <div class="dado-form">
    <label>Email:</label>
    <span><?= $matricula['Matricula']['email'] ?></span>
  </div>
  
  <div class="dado-form">
    <label>Senha:</label>
    <span><?= $matricula['Matricula']['senha'] ?></span>
  </div>
  
  <div class="dado-form">
    <label>CPF:</label>
    <span><?= $matricula['Matricula']['CPF'] ?></span>
  </div>
  
  <div class="dado-form">
    <label>Celular:</label>
    <span><?= $matricula['Matricula']['celular'] ?></span>
  </div>
  
  <div class="dado-form">
    <label>Telefone:</label>
    <span><?= $matricula['Matricula']['telefone'] ?></span>
  </div>  

  <div class="dado-form">
    <label>Estado:</label>
    <span><?= $estados['Estado']['Descricao'] ?></span>
  </div>  
  
  <div class="dado-form">
    <label>Cidade:</label>
    <span><?= $cidades['Cidade']['Descricao'] ?></span>
  </div>    
  
  <div class="dado-form">
    <label>Bairro:</label>
    <span><?= $bairros['Bairro']['Descricao'] ?></span>
  </div>      
  
  <div class="dado-form">
    <label>Endereço:</label>
    <span><?= $matricula['Matricula']['endereco'] ?></span>
  </div> 
  
  <div class="dado-form">
    <label>Telefone:</label>
    <span><?= $matricula['Matricula']['telefone'] ?></span>
  </div> 
  
  <div class="dado-form">
    <label>CEP:</label>
    <span><?= $matricula['Matricula']['CEP'] ?></span>
  </div> 
  
  <div class="dado-form">
    <label>Data de Nascimento:</label>
    <span><?= $matricula['Matricula']['data_nascimento'] ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Sexo:</label>
    <span><?= $matricula['Matricula']['sexo'] ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Profissão:</label>
    <span><?= $matricula['Matricula']['profissao'] ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Como Conheceu:</label>
    <span><?= $matricula['Matricula']['como_conheceu'] ?></span>
  </div>   
  
  <div class="dado-form">
    <label>OBS:</label>
    <span><?= $matricula['Matricula']['obs'] ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Data e Hora da Matrícula:</label>
    <span><?= date('d/m/Y - H:i:s', strtotime($matricula['Matricula']['created'])) ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Próximo Vencimento:</label>
    <span><?= date('d/m/Y', strtotime($matricula['Matricula']['proximo_vencimento'])) ?></span>
  </div>   
  
  <div class="dado-form">
    <label>Plano escolhido:</label>
    <span><?= $planos['Plano']['nome'] ?></span>
  </div>   
  
  
</form>
