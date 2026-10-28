# Invoice Management System

An invoice management system built with **Laravel 8**: create and track invoices by section and product, follow their payment status, attach files, archive, print and export them, and report on invoices and customers.

![Laravel](https://img.shields.io/badge/Laravel-8-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.3%2B%20%7C%208-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![Chart.js](https://img.shields.io/badge/Chart.js-FF6384?logo=chartdotjs&logoColor=white)

## Features

**Invoices**
- Create, edit and delete invoices linked to a section and product (dependent dropdown)
- Payment status: **paid**, **unpaid** and **partially paid**, each with its own list
- Payment status updates with a full history in invoice details
- File attachments per invoice: upload, view, download and delete
- Archive and restore invoices
- Print invoices
- Export invoices to **Excel** (Maatwebsite Excel)

**Reports & dashboard**
- Invoices report filtered by status and date range
- Customers report filtered by section and product
- Dashboard charts (Chart.js)

**Administration**
- Sections and products
- Users, roles and permissions (Spatie Laravel Permission)
- Notifications by email and in-app (database), with unread counter and *mark all as read*

## Tech Stack

| Layer | Tools |
|---|---|
| Back end | Laravel 8, PHP, MySQL |
| Front end | Blade, Bootstrap, jQuery, Laravel Mix |
| Packages | spatie/laravel-permission, maatwebsite/excel, fx3costa/laravelchartjs, laravelcollective/html, pusher/pusher-php-server |

## Getting Started

**Prerequisites:** PHP 7.3+ / 8, Composer, Node.js, MySQL

```bash
git clone https://github.com/mostfaswaisi93/invoice.git
cd invoice
composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate
# set DB_* and MAIL_* values in .env
php artisan migrate --seed
php artisan serve      # http://localhost:8000
```

## Author

**Mustafa T. Al-Swaisi** · [LinkedIn](https://www.linkedin.com/in/mostfaswaisi93/) · [GitHub](https://github.com/mostfaswaisi93)
