# Oasis Piercing - Laravel

## 📌 Índice

* [Español](#espanol)
* [English](#english)

---

<a id="espanol"></a>

## 📌 Español

### ✨ Descripción

Este es el repositorio del backend para **Oasis Piercing**, una tienda de venta de piercings. Desarrollado con **Laravel**, este proyecto sigue la arquitectura **Full Stack** e incluye una interfaz responsiva utilizando **Bootstrap**.

### 🚀 Características principales

* Gestión de inventario y catálogo de piercings.
* Sistema de autenticación y roles de usuario.
* Integración con WhatsApp para mensajes automáticos desde la tienda.
* Interfaz responsiva con Bootstrap.
* Arquitectura Full Stack con Laravel.

### 🛠 Tecnologías utilizadas

* Laravel
* MySQL/PostgreSQL
* Bootstrap
* API RESTful

### 📌 Requisitos e Instalación

Antes de comenzar, asegúrate de tener instalado **Composer** y **Node.js** con NPM.

```bash
# Instalar dependencias de PHP
composer install
# Instalar dependencias de JavaScript
npm install
# Copiar y configurar el archivo de entorno
copy .env.example .env
# Generar la clave de aplicación
php artisan key:generate
# Crear enlace simbólico para almacenamiento
php artisan storage:link
```

#### Desarrollo local:

```bash
npm run dev
php artisan serve
```

#### Producción:

```bash
npm run prod
php artisan serve --env=production
```

### ⚙️ Configuración de PHP GD

En tu archivo **php.ini**, elimina el punto y coma (;) antes de la extensión GD para habilitarla:

```ini
;extension=gd    ← elimina el ";" para que quede:
extension=gd
```

### 📌 Notas

Este proyecto está en desarrollo y su objetivo es optimizar la experiencia de compra en línea para **Oasis Piercing**.

---

<a id="english"></a>

## 📌 English

### ✨ Description

This is the backend repository for **Oasis Piercing**, a piercing store. Developed with **Laravel**, this project follows a **Full Stack** architecture and includes a responsive interface using **Bootstrap**.

### 🚀 Main Features

* Inventory and piercing catalog management.
* Authentication system and user roles.
* WhatsApp integration for automatic store messages.
* Responsive interface with Bootstrap.
* Full Stack architecture with Laravel.

### 🛠 Technologies Used

* Laravel
* MySQL/PostgreSQL
* Bootstrap
* RESTful API

### 📌 Requirements & Installation

Before you begin, make sure you have **Composer** and **Node.js** with NPM installed.

```bash
# Install PHP dependencies
composer install
# Install JavaScript dependencies
npm install
# Copy and configure the environment file
copy .env.example .env
# Generate application key
php artisan key:generate
# Create storage symbolic link
php artisan storage:link
```

#### Local development:

```bash
npm run dev
php artisan serve
```

#### Production:

```bash
npm run prod
php artisan serve --env=production
```

### ⚙️ PHP GD Configuration

In your **php.ini** file, remove the semicolon (;) before the GD extension to enable it:

```ini
;extension=gd    ← remove the ";" so it becomes:
extension=gd
```

### 📌 Notes

This project is under development and aims to optimize the online shopping experience for **Oasis Piercing**.

---

📌 **Autor:** Oasis Piercing
📧 Contact: \[[relativitydev3@gmail.com](mailto:relativitydev3@gmail.com)]
