<?php
require_once("pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->vek();
$pessoa->setNome("Vek Histories");
$pessoa->setEndereco("Vekland");
$pessoa->setBairro("VekLocal");
$pessoa->setCep("08485-200");
$pessoa->setCidade("Vek City");
$pessoa->setEstado("Vek Min");

?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td style="border: 1px solid; background-color: blue"><?php echo $pessoa->getNome(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: red"><?php echo $pessoa->getEndereco(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: pink"><?php echo $pessoa->getBairro(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: purple"><?php echo $pessoa->getCep(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: yellow"><?php echo $pessoa->getCidade(); ?></td>
            </tr>
            <tr>
                <td style="border: 1px solid; background-color: green"><?php echo $pessoa->getEstado(); ?></td>
            </tr>
        </table>        
    </body>
</html>        