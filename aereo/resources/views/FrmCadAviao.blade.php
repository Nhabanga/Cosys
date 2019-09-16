<form align= 'center'action="cadaviao.php" method="POST">
			             <h1>Cadastrar Aviao</h1>
                        <label> Codigo:</label><br>
                    <select name="cod_aviao">
                         <option value=""></option>
                         <option value="111">111</option>
                         <option value="222">222</option>
                         <option value="333">333</option>
                         <option value="444">444</option>
                         <option value="555">555</option>
                         <option value="666">666</option>
                    </select><br>
                 
                        <label>Nome do Fabricante:</label><br>
                        <input type="text" name="nome_fabricante" /><br>
						<label>Numero de assentos:</label><br>
                   <select name="assentos">
                         <option value=""></option>
                         <option value="60">60</option>
						 <option value="55">55</option>
                   </select><br><br>
                                          
                        <input type="submit" value="Salvar" class="submit" name="submit" id="submit" />
                        <br><br><br>
                        <input type="button" value="Voltar" onClick="history.go(-1)"> 
                        <input type="button" value="Avancar" onCLick="history.forward()"> 
                        <input type="button" value="Atualizar" onClick="history.go(0)">
				
            </form>