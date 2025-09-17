# フリマ開発計画

## 環境構築

### Docker ビルド
1. git@github.com:aika1123/mock-case-1.git
2. DockerDesktop を立ち上げる
3. docker-compose up -d --build

### Laravel 環境構築

1. docker-compose exec php bash
2. composer install
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.env ファイルを作成
4. .env に以下を追加
``` text
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

5. アプリケーションキーの作成
``` bash
php artisan key:generate
```

6. マイグレーションの実行
``` bash
php artisan migrate
```

7. シーディングの実行
``` bash
php artisan db:seed
```

## 使用技術

PHP8.4.6
Lalavel8.83.29
MySQL8.0.43

## ER 図


## URL

- 環境開発 : http://localhost/
- phpMyAdmin : http://localhost:8080/
