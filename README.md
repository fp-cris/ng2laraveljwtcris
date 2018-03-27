# API Backend Laravel5 frontend Angular2


## Composer
  Añadir a composer.json
```js
    "barryvdh/laravel-cors": "^0.11.0",
    "tymon/jwt-auth": "0.5.*",
    "dingo/api": "2.0.0-alpha1"
```
      
  Ejecutar `composer update`
        
## jwt-auth

[Documentation](https://github.com/tymondesigns/jwt-auth/wiki)
  
  
#### Configuración de Providers 
     
 app/config/app.php  
 
 `providers[]` Application Service Providers...
```php
    Tymon\JWTAuth\Providers\JWTAuthServiceProvider::class, // colocar antes de AppServiceProvider
    App\Providers\AppServiceProvider::class,
```

 `aliases[]` 
```php
    'JWTAuth' => Tymon\JWTAuth\Facades\JWTAuth::class,
    'JWTFactory' => Tymon\JWTAuth\Facades\JWTFactory::class
```

#### Modificar el comando de generar pasword de jwt 

   app/vendor/tymon/jwt-auth/src/Commands/JWTGenerateCommand.php
```php
    /**
     * 
     * Añadir esta funcion para que funcione el comando php artisan jwt:generate.
     * 
     */
     
    public function handle() {
        $this->fire();
    }
```

## Laravel CORS 
   [Documentation](https://github.com/barryvdh/laravel-cors)
   
## Dingo API
   [Documentation](https://github.com/dingo/api/wiki)
