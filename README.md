### Sobre
![](https://cursos.genioz.com.br/assets/images/acert.gif)

- Sistema criado com o novo Laravel 7.

- Para instalar o projeto basta seguir os seguintes passos:
1.  git clone git@github.com:meuProjeto
2. acesse a pasta do projeto com o seguinte comando: **cd /meuProjeto**
3. Instale as dependências e o framework com o seguinte comando:  **composer install**
4. Copie o arquivo .env.example com o seguinte comando: **cp .env.example .env**
5.  Inicie a aplicação com o comando: ** php artisan serve**

- Utilizado **fetch** para comunicação com as Apis solicitadas e toda sua lógica se encontra no arquivo public/assets/js/app.js.

- Foi criado duas rotas no arquivo api.php dentro da pasta routes. As rotas apontam para os arquivos: **GitHubApiController** e **AcertApiController** ambos dentro da pasta **App\Http\Controllers\api**

- Toda lógica das apis esta dentro do arquivo **ApiServiceProvider** que se encontra dentro da pasta **App\Providers**.

- Antes de testar o sistema, faça os seguintes comandos, pois pode apresentar alguns erros por causa de cache de aplicação.
**php artisan config:clear**
**php artisan cache:clear**
**php artisan config:cache**