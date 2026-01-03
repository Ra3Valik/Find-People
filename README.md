# Find-People
Find-People is a web app that helps people find compatible roommates by matching preferences, lifestyle, and budget in a specific city or area. Secure profiles and smart filters make co-living safer and easier.

---

## Requirements

- Docker + Docker Compose

> You **don’t need** to install PHP, Composer, Node.js, or npm locally.  
> Everything runs inside containers.

---

## Quick start (Development)

1) Create `.env` (if missing):
```bash
cp .env.example .env
```
2) Build and start containers:
```bash
docker compose -f compose.dev.yaml up --build -d
```
3) Run migrations:
```bash
docker compose -f compose.dev.yaml exec workspace php artisan migrate
```
Open the app:

http://localhost

---

## Working with dependencies (Composer / npm)

All project commands should be executed **inside the _workspace_ container**, because the project directory is mounted into the container (./ -> /var/www) and changes will be written to your host filesystem (so Git will see them).

### Add a PHP package (Composer)

Example:
```bash
docker compose -f compose.dev.yaml exec workspace composer require vendor/package
```

This will update (and should be committed to Git):
* composer.json
* composer.lock
* vendor/ is usually not committed.

### Add a JS package (npm)

Example:
```bash
docker compose -f compose.dev.yaml exec workspace npm install some-package
```

This will update (and should be committed to Git):
* package.json
* package-lock.json (or your lockfile)
* node_modules/ is usually not committed.

---

## Useful Laravel commands
```bash
docker compose -f compose.dev.yaml exec workspace php artisan optimize:clear # Update all app cache
docker compose -f compose.dev.yaml exec workspace php artisan tinker # php console
```

---

## Notes

The workspace container contains PHP + Composer + Node.js + npm, so you can work without installing them locally.

If you switch branches or pull changes and dependency lockfiles change, just run **composer install / npm install** again in the workspace container.
