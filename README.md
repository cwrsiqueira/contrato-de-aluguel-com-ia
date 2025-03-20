# 🏠 Gerador de Contrato de Aluguel com PHP + OpenAI

Projeto no Github: https://github.com/cwrsiqueira/contrato-de-aluguel-com-ia.git

Este é um projeto simples de um **gerador de contratos de aluguel**, feito com **HTML**, **Bootstrap 5** no frontend e **PHP** no backend. Ele utiliza a **API da OpenAI (GPT-4)** para gerar um contrato personalizado de forma automática, com base nos dados fornecidos pelo usuário.

## ✅ Funcionalidades
- Formulário de preenchimento com campos básicos para geração do contrato.
- Integração com a OpenAI para criação do texto do contrato.
- Exibição do contrato em uma interface limpa e responsiva (Bootstrap 5).
- Estrutura simples de 3 páginas:
  - `index.php`: Formulário para preencher os dados.
  - `gerar-contrato.php`: Processa os dados e chama a API.
  - `resultado.php`: Exibe o contrato gerado.

---

## 🚀 Como rodar o projeto

### 1. Pré-requisitos
- PHP 7.4 ou superior.
- Servidor local (Apache/Nginx) ou `php -S localhost:8000`.
- Conta na [OpenAI](https://platform.openai.com) com acesso à API.
- Chave da API da OpenAI válida.

### 2. Estrutura de Pastas
```plaintext
/seu_projeto
│
├── index.php
├── gerar-contrato.php
├── resultado.php
└── README.md
```

### 3. Configuração da API OpenAI
No arquivo `gerar-contrato.php`, adicione sua chave da OpenAI na variável:

```php
$api_key = 'SUA_API_KEY_AQUI';
```

---

## ▶️ Executando Localmente

1. Clone ou baixe o repositório.
2. Coloque em seu ambiente local (ex: `htdocs` do XAMPP ou `www` do WAMP).
3. Abra o terminal e navegue até a pasta do projeto.
4. Se estiver usando PHP nativo, rode o servidor embutido:
```sh
php -S localhost:8000
```
5. Acesse no navegador:
```
http://localhost:8000/index.php
```

---

## 🔐 Requisitos Legais
> **Atenção:**  
> Este projeto é uma ferramenta educacional/protótipo.  
> Para uso profissional:  
> - Revise os contratos com um advogado especializado.  
> - Garanta conformidade com a **Lei do Inquilinato (Lei 8.245/91)**.  

---

## 📄 Licença
Este projeto é livre para uso e modificação.

---

Feito com ❤️ para facilitar a geração de contratos!
