#!/bin/sh

# Wait for database to be ready
echo "Waiting for database..."
until pg_isready -h db -p 5432 -U bloguser; do
  sleep 2
done

# Install Node dependencies if missing
if [ ! -d "node_modules" ]; then
  npm install
fi

# Build frontend assets if missing
if [ ! -f "public/build/manifest.json" ]; then
  npm run build
fi

# Run migrations
php artisan migrate --force

# Start Laravel server
php -S 0.0.0.0:8000 -t public
