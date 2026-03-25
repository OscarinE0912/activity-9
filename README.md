# Activity-9 — Laravel 12 Security

## Descripción
Aplicación web desarrollada con Laravel 12 que implementa un sistema de 
autenticación completo con vistas diferenciadas para usuarios guest y autenticados.

## Características
- Sistema de autenticación con Laravel Breeze
- Landing Page pública para usuarios no registrados
- Dashboard privado solo para usuarios autenticados
- Navbar condicional según el estado de sesión
- Email de bienvenida al registrarse
- Email de alerta al iniciar sesión

## Tecnologías
- Laravel 12
- Laravel Breeze (autenticación)
- Blade + Tailwind CSS
- MySQL

## Instalación
```bash
git clone 
cd activity-9
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
# Configurar DB en .env
php artisan migrate
php artisan serve
```