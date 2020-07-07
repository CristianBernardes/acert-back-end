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

**INFORMAÇÂO IMPORTANTE**
Mesmo após varios testes na api de login, a mesma bloqueava qualquer endereço por causa da politica de CORS(Cross-Origin Resource Sharing) e para solucionar este problema existe algumas formas.
As mais utilizadas são as seguintes em PHP laravel:
1. Criar um arquivo .htaccess na raiz da aplicação com o seguinte conteúdo
```
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
    Header set Access-Control-Allow-Methods: "OPTIONS,GET,POST,DELETE,PUT"
</IfModule>
```
2. Instalar pacotes de terceiros via composer (**MAIS UTILIZADA POR DESENVOLVEDORES**). 
composer require fruitcake/laravel-cors
Exemplo: https://github.com/fruitcake/laravel-cors

3. Criando um Middleware para poder liberar o acesso a api.
Exemplo de código de um Middleware:
```php
<?php
    namespace App\Http\Middleware;
    use Closure;
    class CorsMiddleware
    {
        public function handle($request, Closure $next)
        {
            $headers = [
                'Access-Control-Allow-Origin'      => 'https://algumdominio.com',
                'Access-Control-Allow-Methods'     => 'GET/POST/PUT/DELETE',
                'Access-Control-Allow-Credentials' => 'false',
                'Access-Control-Max-Age'           => '86400',
                'Access-Control-Allow-Headers'     => 'origin, x-requested-with',
                'Access-Control-Expose-Headers'    => 'Content-Length'
            ];
            if ($request->isMethod('OPTIONS')) {
                return response()->json('{"method":"OPTIONS"}', 200, $headers);
            }
            $response = $next($request);
            foreach ($headers as $key => $value) {
                $response->header($key, $value);
            }
            return $response;
        }
    }
```
- Antes de testar o sistema, faça os seguintes comandos, pois pode apresentar alguns erros por causa de cache de aplicação.
**php artisan config:clear**
**php artisan cache:clear**
**php artisan config:cache**