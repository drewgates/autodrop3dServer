cp ".env.example" ".env"

mysql -u root -e "CREATE DATABASE homestead" 

cmd /c npm install




php artisan key:generate

php artisan migrate

php artisan db:seed

