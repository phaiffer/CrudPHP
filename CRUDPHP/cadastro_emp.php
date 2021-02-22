<?php include("Includes/Header.php"); ?>
 
    <div class="Content">
        <div class="Resultado"></div>
        
        <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">
            <div class="Formulario">
                <h1 class="Center">Cadastro</h1>

                <div class="FormularioInput">
                    Nome Empresa: <br>
                    <input type="text" id="Nome" name="Nome">
                </div>

                <div class="FormularioInput">
                    CNPJ: <br>
                    <input type="text" id="Cnpj" name="Cnpj">
                </div>

                <div class="FormularioInput">
                    UF: <br>
                    <input type="text" id="Uf" name="Uf">
                </div>

                <div class="FormularioInput FormularioInput100 Center">
                    <input type="submit" value="Cadastrar">
                </div>
            </form>
        
        </div>
    </div>

<?php include("Includes/Footer.php"); ?>