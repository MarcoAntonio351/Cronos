# Cronos - CRM Simples

Um sistema de CRM (Customer Relationship Management) simples desenvolvido como parte do Trabalho de Conclusão de Curso (TCC). O Cronos utiliza Laravel no backend e Vue.js no frontend para oferecer funcionalidades básicas de gerenciamento de clientes.

## Instalação

Certifique-se de ter o ambiente Laravel/Vue.js configurado.

1. Clone o repositório:
    ```bash
    git clone https://github.com/seu-usuario/cronos.git
    ```

2. Instale as dependências do Composer:
    ```bash
    composer install
    ```

3. Copie o arquivo de configuração `.env`:
    ```bash
    cp .env.example .env
    ```

4. Configure seu banco de dados no arquivo `.env`.

5. Execute as migrações e os seeders:
    ```bash
    php artisan migrate --seed
    ```

6. Inicie o servidor:
    ```bash
    php artisan serve
    ```

## Funcionalidades Principais

- **Gerenciamento de Clientes:** Adicionar, visualizar, editar e remover informações de clientes.
- **Integração Vue.js/Laravel:** Uso de Vue.js para interações dinâmicas no frontend e Laravel para o backend robusto.
- **Autenticação de Usuários:** Módulo de autenticação de usuário para acessar o sistema.

## Estrutura do Projeto

A estrutura do projeto é dividida em pastas para melhor organização:

- **`/backend`:** Contém o código Laravel para o backend.
- **`/frontend`:** Contém o código Vue.js para o frontend.

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou enviar pull requests.

## Autor

- Seu nome
- Contato: seuemail@example.com

## Licença

Este projeto está licenciado sob a Licença [Nome da Licença]. Consulte o arquivo LICENSE para mais detalhes.

