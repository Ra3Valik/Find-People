#!/bin/sh
set -e

# Wait for PostgreSQL to be ready
echo "Waiting for PostgreSQL..."
while ! nc -z postgres 5432; do
  sleep 1
done
echo "PostgreSQL is up - executing command"

# Generate Laravel app key if missing
if [ ! -f /var/www/.env ]; then
  echo "Copying .env.example to .env"
  cp /var/www/.env.example /var/www/.env
fi

if ! grep -q "APP_KEY=base64:" /var/www/.env; then
  echo "Generating Laravel APP_KEY..."
  cd /var/www
  php artisan key:generate
fi

# Run original php-fpm command
exec "$@"
