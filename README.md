# Cronos - CRM Simples

Um sistema de CRM (Customer Relationship Management) simples desenvolvido como parte do Trabalho de Conclusão de Curso (TCC). O Cronos utiliza Laravel no backend e Vue.js no frontend para oferecer funcionalidades básicas de gerenciamento de clientes, a ideia se baseou em construir um sistema de fácil usabilidade e garantir a segurança dos usuários

## Capturas de Tela

## Tela Inicial

![Tela Inicial](resources/images/tela%20inicial.png)

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


## Autor

- Marco Antonio
- Contato: marcoacostaantonio@gmail.com
- Linkedin: https://www.linkedin.com/in/marco-acosta-a446b7177/



