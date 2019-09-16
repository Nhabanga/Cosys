<form align= 'center' method="POST" action="cadvoo.php" >
			             <h1>Cadastrar de Voo</h1>
                        <label> Codigo:</label><br>
						<input type="text" name="cod_voo" value=""  required/><br>
						<label>BI nr:</label><br>
						<input type="text" name="bi" value=""  required/><br>
						<label> Aviao numero:</label><br>
                    <select name="cod_aviao">
                         <option value=""></option>
                         <option value="111">111</option>
                         <option value="222">222</option>
                         <option value="333">333</option>
                         <option value="444">444</option>
                         <option value="555">555</option>
                         <option value="666">666</option>
                    </select ><br>
                        <label>Hora de Partida:</label><br>
						<input type= "time" name="hora_partida" value=""><br>
						<label>Hora de Chegada:</label><br>
						<input type= "time" name="hora_chegada" value=""><br>
                        <label>Destino:</label><br>
                    <select name="destino" id="destino">
                         <option value=""></option>
                         <option value="Gaza">Gaza</option>
                         <option value="inhambane">Inhambane</option>
                         <option value="tete">Tete</option>
                         <option value="niassa">Niassa</option>
                         <option value="nampula">Nampula</option>
                         <option value="chimoio">Chimoio</option>
                    </select><br>
                 
                        <label>Data da Partida:</label><br>
                        <input type="date" name="data_p" /><br><br>
                                          
                        <input type="submit" value="Cadastrar" class="submit" name="submit" id="submit" />
                        <br><br><br>
                        <input type="button" value="Voltar" onClick="history.go(-1)"> 
                        <input type="button" value="Avancar" onCLick="history.forward()"> 
                         <input type="button" value="Atualizar" onClick="history.go(0)">

                    
            </form>