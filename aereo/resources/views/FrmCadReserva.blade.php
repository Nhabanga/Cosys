<form align='center' method="POST" action="cadreserva.php">
			             <h1>Cadastrar Reserva</h1>
                        <label> Codigo:</label><br>
						<input type="text" name="cod_reserva" value=""  required/><br>
						<label>BI nr:</label><br>
						<input type="text" name="bi" value=""  required/><br>
                        <label>Ponto de Partida:</label><br>
                   <select name="partida" id="partida">
                         <option value=""></option>
                         <option value="Maputo">Maputo</option>
                   </select><br>
        
                        <label>Destino:</label><br>
                    <select name="destino" id="destino">
                         <option value=""></option>
                         <option value="Gaza">Gaza</option>
                         <option value="Inhambane">Inhambane</option>
                         <option value="Tete">Tete</option>
                         <option value="Niassa">Niassa</option>
                         <option value="Nampula">Nampula</option>
                         <option value="Nhimoio">Chimoio</option>
                    </select><br>
                 
                        <label for="data_reserva">Data:</label><br>
                        <input type="date" name="data_reserva" /><br>
                        <label for="reserva_q">Reservas Quant:</label><br>
                        <input type="text" name="reserva_q" id="reserva_q"><br><br>
                                          
                        <input type="submit" value="Cadastrar" class="submit" name="submit" id="submit" />
                    <br><br><br>
                        <input type="button" value="Voltar" onClick="history.go(-1)"> 
                        <input type="button" value="Avancar" onCLick="history.forward()"> 
                        <input type="button" value="Atualizar" onClick="history.go(0)">
				
                    
            </form>