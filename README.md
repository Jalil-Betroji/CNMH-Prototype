# Prototype project and tasks

## travail à faire

Créez une application web construite avec Laravel pour gérer des projets et des tâches. Elle utilise également le package Maatwebsite Excel pour exporter et importer des données. Elle est conçue avec l'authentification Laravel UI et AdminLTE, gérant les permissions utilisateur avec Spatie Laravel Permission, ainsi que des fonctionnalités de recherche, de pagination, et de filtrage, et des tests unitaires pour les contrôleurs de projets et de tâches

### Critères de validation

- Gestion des projets
- Gestion des tâches
- Utilisant le modèle de conception Repositories
- Utilisant l'héritage
- Utilisant l'authentification Laravel UI et AdminLTE
- Gérant les permissions utilisateur avec Spatie Laravel Permission
- Utilisant Maatwebsite Excel
- Recherche, pagination et filtrage en utilisant AJAX
- Tests unitaires

#### Commands

- Create laravel project 
```bash
composer create-project laravel/laravel=10 .
```

- Install AdmineLte 
```bash
npm install admin-lte --save-dev 
```

- Install JavaScript dependencies

```bash
npm install && npm run build && npm run dev
```

- Configure your .env file and set up the database
```bash
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```
- Install package excel
```bash
 composer require maatwebsite/excel:*
```

- Run commande
```bash
composer update
```

- Configure your file config/app.php
```bash
'providers' => ServiceProvider::defaultProviders()->merge([
    Maatwebsite\Excel\ExcelServiceProvider::class,
]);

'aliases' => Facade::defaultAliases()->merge([
    'Excel' =>Maatwebsite\Excel\Facades\Excel::class,
])->toArray(),
```
- Run commande
```bash
composer dump-autoload
```

- Run commande 
```bash
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
```

- Install permission package
```bash
composer require spatie/laravel-permission
```

- Run commande
```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

- Run commande
```bash
php artisan migrate:fresh
```

- Run commande
```bash
php artisan db:seed
```