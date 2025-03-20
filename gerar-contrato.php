<?php
session_start();

$dados = filter_input_array(INPUT_POST);

foreach ($dados as $dado) {
    if (empty($dado)) {
        $_SESSION['msg'] = "<p class='alert alert-danger'>Todos os dados devem ser preenchidos.</p>";
        header("Location: index.php");
        exit;
    }
}

$dados_locador = $dados['dados_locador'];
$dados_locatario = $dados['dados_locatario'];
$dados_imovel = $dados['dados_imovel'];
$valor_aluguel = $dados['valor_aluguel'];
$prazo_locacao = $dados['prazo_locacao'];
$data_inicio = $dados['data_inicio'];

$apiKey = 'OPENAI_API_KEY'; // Substitua com sua chave API real
$data = [
    'model' => 'gpt-4o',
    'messages' => [
        [
            'role' => 'user',
            'content' => "Você como um advogado especialista em contratos de aluguel, crie um contrato de aluguel residencial conforme a legislação brasileira, utilizando os seguintes dados recebidos nas seguintes variáveis:

            $dados_locador: Informações completas do locador (nome, CPF, endereço, etc.)
            $dados_locatario: Informações completas do locatário (nome, CPF, endereço, etc.)
            $dados_imovel: Descrição detalhada do imóvel (endereço, tipo, características, etc.)
            $valor_aluguel: Valor mensal do aluguel
            $prazo_locacao: Prazo total do contrato (em meses ou anos)
            $data_inicio: Data de início da locação
            O contrato deve conter todas as cláusulas padrão encontradas nos modelos atuais, incluindo, mas não limitado a: objeto do contrato, valor, forma de pagamento, obrigações das partes, garantia, condições de rescisão, multas, foro, entre outras.

            Formate o contrato com HTML e Bootstrap 5, garantindo uma apresentação clara e profissional. Retorne apenas o código HTML completo, pronto para exibição ao usuário. Não adicione comentários ou qualquer outro texto adicional.
            Importante: Não inclua caracteres antes de depois do código como ```html e ```.
            "
        ]
    ]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Erro cURL: ' . curl_error($ch);
}

curl_close($ch);

$res = json_decode($response);

$_SESSION['contrato'] = $res->choices[0]->message->content;
header("Location: contrato.php");
exit;
