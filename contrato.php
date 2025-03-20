<?php session_start() ?>
<div class="container">
    <a href="index.php" class="btn btn-sm btn-info">Página Inicial</a>
    <?= $_SESSION['contrato'] ?? "Contrato não encontrado." ?>
</div>