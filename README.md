<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Laravel Task Manager (Blade + Authentication)

## Overview
A simple Task Manager web application built with **Laravel Blade** and **Laravel Breeze authentication**. Users can register, login, and manage their own tasks with CRUD functionality. The design uses Blade layouts and includes flash messages for success/error.


## Features Implemented

### 1. Authentication (Laravel Breeze)
- User registration (`/register`)
- User login (`/login`)
- User logout (`/logout`)
- Auth middleware protects all task-related routes

### 2. Pages (Blade Views)
| Page | URL | Description |
|------|-----|------------|
| Dashboard | /dashboard | Welcome page after login |
| Task List | /tasks | List of user's tasks |
| Create Task | /tasks/create | Form to add a new task |
| Edit Task | /tasks/{id}/edit | Form to edit an existing task |

### 3. Task Management (CRUD)
- **Fields:** `id`, `user_id`, `title` (required, min 3 chars), `description` (optional), `is_completed` (default false), `timestamps`
- Users can only view/edit/delete **their own tasks**
- Validation errors displayed in Blade views

### 4. Design & UI
- Blade layouts (`layouts/app.blade.php`) used for consistent structure
- Success/error flash messages implemented
- Responsive forms for create/edit tasks
- Task completion indicated with checkbox/button



## Setup Instructions

1. **Download / copy project**  
   - Download the repository ZIP from GitHub or clone it:
   ```bash
   git clone https://github.com/JaveriaKhan56/laravel-task.git
   cd <laravel-task>

