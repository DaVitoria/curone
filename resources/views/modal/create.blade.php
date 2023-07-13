 {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> --}}
 <form method="post" action="{{route('candidate.store')}}">
 @csrf
 <div id="myModal" class="modal fade active" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <h3 id="myModalLabelstyle=" style="color: crimson"><strong>ÁREA DE CANDIDATURA</strong></h3>
      <div class="modal-body" id="myWizard">
      
       <div class="navbar">
          <div class="navbar-inner">
                <ul class="nav nav-pills">
                   <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Start</a></li>
                   <li><a href="#step2" data-toggle="tab" data-step="2"></a></li>
                </ul>
          </div>
       </div>
       <div class="tab-content">
          <div class="tab-pane fade in active" id="step1">
             
            <div class="well"> 
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nome:</label>
                <input type="text" class="form-control" name="first_name" id="recipient-name" placeholder="Primeiro nome">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Apelido:</label>
              <input type="text" class="form-control" name="last_name" id="recipient-name" placeholder="Apelido">
          </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Data de nascimento:</label>
              <input type="date" class="form-control" name="date" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="vacancie_id" class="col-form-label">Concurso:</label>
              <select class="form-control input-lg" name="vacancie_id" id="vacancie_id">
                <option value="Docência">Docência</option>
                <option value="Agente do Serviço">Agente do Serviço</option>
                <option value="Técnico do Serviço">Técnico do Serviço</option>
              </select>
            </div>
            </div>
            <div class="navbar-inner">
              <ul class="nav nav-pills">
                 <li><a  class="btn btn-primary next my-3" href="#step2" data-toggle="tab" data-step="1">Próximo</a></li>
              </ul>
            </div>
          </div>
          <div class="tab-pane fade" id="step2">
             <div class="well">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="recipient-name" placeholder="Digite o e-mail">
              </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Proviniência:</label>
                <input type="text" class="form-control" name="adress" id="recipient-name" placeholder="Digite o local de residência">
              </div> 
              
              <div class="col my-4">
                <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>

              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Categoria:</label>
                <select class="form-control input-lg" name="category">
                  <option value="Docência">DN4</option>
                  <option value="Agente do Serviço">DN3</option>
                  <option value="Técnico do Serviço">DN1</option>
                  <option value="Técnico do Serviço">Tec.Inst N1</option>
                  <option value="Técnico do Serviço">Auxiliar</option>
                </select>
              </div>
             </div>
             <div class="navbar-inner">
              <ul class="nav nav-pills">
                 <li><a  class="btn btn-primary next my-3" href="#step1" data-toggle="tab" data-step="1">Voltar</a></li>
              </ul>
            </div>
             <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              <button class="btn btn-primary">Submeter</button>
            </div>
          </div>
       </div>
      </div>
      
    </div>
  </div>
</div>
</form>