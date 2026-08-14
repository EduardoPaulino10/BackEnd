<?php
declare(strict_types=1);
$senhaSistema = "SenhaSegura123";
$cargoUsuario = "Gerente";
if ($cargoUsuario === "Gerente" && $senhaSistema === "SenhaSegura123") {
    echo "Acesso Permitido";
} else {
    echo "Acesso Negado";
}
?>