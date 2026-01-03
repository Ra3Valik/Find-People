#!/bin/sh
set -e

cd /var/www

# --- Composer: run if vendor missing OR composer.lock changed ---
if [ -f composer.json ]; then
  if [ ! -f vendor/autoload.php ]; then
    echo "vendor/ not found -> composer install"
    composer install
  else
    if [ -f composer.lock ]; then
      LOCK_HASH="$(sha1sum composer.lock | awk '{print $1}')"
      MARKER_FILE="vendor/.composer.lock.sha1"
      OLD_HASH="$(cat "$MARKER_FILE" 2>/dev/null || true)"

      if [ "$LOCK_HASH" != "$OLD_HASH" ]; then
        echo "composer.lock changed -> composer install"
        composer install
      fi
    fi
  fi

  # update marker
  if [ -f composer.lock ]; then
    sha1sum composer.lock | awk '{print $1}' > vendor/.composer.lock.sha1
  fi
fi

# --- NPM: run if node_modules missing OR package-lock changed ---
if [ -f package.json ]; then
  if [ ! -d node_modules ]; then
    echo "node_modules/ not found -> npm install"
    npm install
  else
    # prefer package-lock.json if present
    if [ -f package-lock.json ]; then
      LOCK_HASH="$(sha1sum package-lock.json | awk '{print $1}')"
      MARKER_FILE="node_modules/.package-lock.sha1"
      OLD_HASH="$(cat "$MARKER_FILE" 2>/dev/null || true)"

      if [ "$LOCK_HASH" != "$OLD_HASH" ]; then
        echo "package-lock.json changed -> npm install"
        npm ci
      fi

      sha1sum package-lock.json | awk '{print $1}' > node_modules/.package-lock.sha1
    fi
  fi
fi

exec "$@"
