 <form align= 'center' action="" method="POST" enctype="multipart/form-data">
     <div class="form-group col-md-6">
          <div class="input-group">
            <label for="bi">BI nr. :</label><br>
                <input type="text" name="bi" id="bi" required/><br><br>
                <label for="name">Nome :</label><br>
                <input type="text" name="nome" id="nome" required/><br><br>
                <label for="apelido">Apelido :</label><br>
                <input type="text" name="apelido" id="apelido" required/><br><br>
                <label for="Sexo">Sexo:</label>
                <input type="radio" name="sexo" value="M" checked>
                <label for="masculino">Masculino</label>
                <span class="check"></span>
                <input type="radio" name="sexo" value="F" checked>
                <label for="feminino">Feminino</label><br><br>
                <span class="check"></span>
                <label for="address">Telefone:</label><br>
                <input type="text" name="telefone1" value="" id="telefone1" required/> ou
                <input type="text" name="telefone2" value=""id="telefone2" required/><br><br>
                <label for="city">Cid/Prov:</label>
                   <select name="city" id="city">
                         <option value=""></option>
                         <option value="Maputo">Maputo</option>
                         <option value="Matola">Matola</option>
                   </select>

               <label for="bairro">Bairro :</label>
                   <select name="bairro" id="bairro">
                         <option value=""></option>
                         <option value="Djonasse">Djonasse</option>
                         <option value="Hulene">Hulene</option>
                   </select><br><br>
                <label>Destino:</label>
                    <select name="destino" id="destino">
                         <option value=""></option>
                         <option value="Gaza">Gaza</option>
                         <option value="Inhambane">Inhambane</option>
                         <option value="Tete">Tete</option>
                         <option value="Niassa">Niassa</option>
                         <option value="Nampula">Nampula</option>
                         <option value="Chimoio">Chimoio</option>
                    </select>
                <label for="quantidade">Bilhete Quant.:</label>
                <input type="text" name="bilhete_q" id="bilhete_q"><br><br>
                <label for="data_cad">Data:</label>
                <input type="date" name="data_cad" id="data_cad" /><br><br><br>
              
          </div>
      </div>
      
      <input type="submit" value="Cadastrar" class="submit" name="submit" id="submit" /><br><br><br>
                <input type="button" value="Voltar" onClick="history.go(-1)"> 
                <input type="button" value="Avancar" onCLick="history.forward()"> 
                <input type="button" value="Atualizar" onClick="history.go(0)">  
    </form>
    