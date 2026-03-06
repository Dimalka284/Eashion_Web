#!/usr/bin/env bash
set -e

php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Run migrations (optional — only if you want auto-migrate on deploy)
# php artisan migrate --force || true

# Start PHP-FPM in background
php-fpm -D

# Start Nginx in foreground
nginx -g "daemon off;"
