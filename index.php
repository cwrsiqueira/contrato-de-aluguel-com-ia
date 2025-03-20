<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerador de Contrato de Aluguel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Gerador de Contrato de Aluguel</h1>

        <?php
        if (!empty($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

        <form action="gerar-contrato.php" method="POST" class="card p-4 shadow">
            <div class="row">
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="dados_locador" class="form-label">Dados do locador (nome, cpf/cnpj, endereço etc.)</label>
                        <input type="text" class="form-control" id="dados_locador" name="dados_locador" required value="Imobiliária Aluga Rápido">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="dados_locatario" class="form-label">Dados do locatário (nome, cpf/cnpj, endereço etc.)</label>
                        <input type="text" class="form-control" id="dados_locatario" name="dados_locatario" required value="Carlos Wagner">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="dados_imovel" class="form-label">Dados do imóvel (endereço, características, outras informações etc.)</label>
                <textarea class="form-control" id="dados_imovel" name="dados_imovel" required>Imóvel com 2 quartos, localizado na Rua X, 123, Centro</textarea>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="valor_aluguel" class="form-label">Valor do Aluguel (R$)</label>
                        <input type="text" class="form-control" id="valor_aluguel" name="valor_aluguel" required value="1.000,00">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="prazo_locacao" class="form-label">Prazo de Locação (meses)</label>
                        <input type="number" class="form-control" id="prazo_locacao" name="prazo_locacao" required value="12">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="data_inicio" class="form-label">Data de Início</label>
                        <input type="date" class="form-control" id="data_inicio" name="data_inicio" required value="2025-04-01">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Gerar Contrato</button>
        </form>
    </div>

</body>

</html>