## Donwload

Clone Projek

```bash
  git clone https://github.com/EkaYahya/rental-mobil-podarent.git nama_projek
```

Masuk ke folder dengan perintah

```bash
  cd nama_projek
```

-   Copy .env.example menjadi .env kemudian edit databasenya

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login

-   email = admin@admin.com
-   password = 123
