<form action="action.php" method="post" id="form_novo_fluxo" autocomplete="off">
    <div id="nome_fluxo">
        <h2>Nome do fluxo: </h2>
        <input type="text" name="nome_fluxo"></br>
    </div>
        <div id="form_header">
            <h3>Nome da coluna</h3>
            <h3>Setor Responsável</h3>
        </div>

        <div class="coluna_fluxo">
            <input type="text" name="nome_coluna[]" id="1">
            
            <select name="setor_responsavel[]" id="setor_responsavel">
                <option value="financeiro">Financeiro</option>
                <option value="administrativo">Administrativo</option>
                <option value="diretoria">Diretoria</option>
            </select>
            
        </div>

        <div class="coluna_fluxo">
            <input type="text" name="nome_coluna[]" id="1">
            
            <select name="setor_responsavel[]" id="setor_responsavel">
                <option value="financeiro">Financeiro</option>
                <option value="administrativo">Administrativo</option>
                <option value="diretoria">Diretoria</option>
            </select>
            
        </div>

        <div class="coluna_fluxo">
            <input type="text" name="nome_coluna[]" id="1">
            
            <select name="setor_responsavel[]" id="setor_responsavel">
                <option value="financeiro">Financeiro</option>
                <option value="administrativo">Administrativo</option>
                <option value="diretoria">Diretoria</option>
            </select>
            
        </div>


    </form>

    <div class="button_roxo" id="adicionar_campo">
        <img src="./img/sis/plus.png" alt="" srcset="">    
        Novo campo
    </div>
        
    <button form="form_novo_fluxo" class="button_roxo" id="criar_fluxo" type="submit">
        Criar 
    </button>