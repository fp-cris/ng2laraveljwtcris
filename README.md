# ng2laraveljwtcris


### añadir a composer.json
      "barryvdh/laravel-cors": "^0.11.0",
      "tymon/jwt-auth": "0.5.*",
      "dingo/api": "2.0.0-alpha1"
      
### ejecutar composer update
        
## jwt-auth

  https://github.com/tymondesigns/jwt-auth/wiki
  
** en config/app

  Tymon\JWTAuth\Providers\JWTAuthServiceProvider::class, // colocar antes de AppServiceProvider
  App\Providers\AppServiceProvider::class,

** modificar el comando de generar pasword de jwt 

en /Users/cristina/Sites/ng2laraveljwtcris/app-laravel5/vendor/tymon/jwt-auth/src/Commands/JWTGenerateCommand.php

    /**
     * 
     * Añadir esta funcion para que funcione el comando php artisan jwt:generate.
     * 
     */
    public function handle() {
        $this->fire();
    }
    
