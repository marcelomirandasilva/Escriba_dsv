
  
  <div class="x_title">  Dependente  1 
    
  </div>
    
    <div class="form-group">
      <label class="control-label col-md-1 " for="ic_parentesco">Parentesco*</label>
      <div class="col-md-2 ">
          <select   name="ic_parentesco" 
                    id="ic_parentesco" 
                    class="form-control col-md-2" 
                    required="required"  >
            <option value=""  selected style="color: #ccc;"> --- </option>
            @foreach($grau_parentesco as $ic_parentesco)
                <option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
            @endforeach
          </select>
      </div>


      <label class="col-md-1 control-label" for="de-nome">Nome</label>
      <div class="col-md-6">
        <input {{-- id="de-nome" --}} name="de-nome" type="text" placeholder="Informe o nome" class="form-control input-md" required="">
      </div>
    </div>
  
    <div class="form-group">
      <label class="col-md-1 control-label" for="de-nascimento">Nascimento</label>  
      <div class="col-md-2">
        <input {{-- id="de-nascimento" --}} name="de-nascimento" type="date" placeholder="01/01/2000" class="form-control input-md datas_input" required="">
      </div>
    </div>



    <button name="submit" value="clonar" class="btn btn-xs btn-primary clonar "> Adicionar mais um</button>

  </div> {{-- FIM panel_dependentes --}}

 