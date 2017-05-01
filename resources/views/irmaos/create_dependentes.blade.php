
  
  <div class="x_title">  Dependente  1 
    
  </div>
    
  
    {{-- Nome --}}
    <div class="form-group">
      <label class="col-md-1 control-label" for="de-nome">Nome</label>
      <div class="col-md-11">
        <input {{-- id="de-nome" --}} name="de-nome" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
      </div>
    </div>
  
    {{-- Data de Nascimento, Sexo, Deficiente --}}
    <div class="form-group">

    {{-- Data de Nascimento --}}
    <label class="col-md-1 control-label" for="de-nascimento">Nascimento</label>  
    <div class="col-md-2">
      <input {{-- id="de-nascimento" --}} name="de-nascimento" type="date" placeholder="01/01/2000" class="form-control input-md global-data" required="">
    </div>

    {{-- Sexo   --}}
    <label class="col-md-1 control-label" for="de-sexo">Sexo</label>
    <div class="col-md-2">
      <select name="de-sexo" type="text" placeholder="Sexo" class="form-control input-md" required="">
        <option value="" disabled selected style="display: none;">   </option>
        <option value="m">Masculino</option>
        <option value="f">Femino</option>
      </select>
    </div>

    {{-- Deficiente --}}
    <label class="col-md-1 control-label" for="de-deficiente">Deficiente</label>
    <div class="col-md-2">
      <select name="de-deficiente" type="text" placeholder="de-deficiente" class="form-control input-md" required="">
        <option value=""disabled selected style="display: none;">   </option>
        <option value="s">Sim</option>
        <option value="n">Não</option>
      </select>
    </div>

      


    <button name="submit" value="clonar" class="btn btn-xs btn-primary clonar "> Adicionar mais um</button>

  </div> {{-- FIM panel_dependentes --}}

 