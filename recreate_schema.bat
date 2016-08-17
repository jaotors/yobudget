mysql -u root -e "DROP SCHEMA yobudget"
mysql -u root -e "CREATE SCHEMA yobudget"
php artisan migrate
php artisan db:seed