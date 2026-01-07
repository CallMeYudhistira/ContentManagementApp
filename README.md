# Content Management App (Laravel 11) 📱

A web-based **Content Management Application** built using **Laravel 11** and **MySQL**.  
This application is inspired by social media platforms but intentionally restricted to **content viewing only**.

Users can browse and read posts without interacting with other users.  
There are **no chat, comment, like, or profile-viewing features**.  
The application focuses purely on **content presentation**.

## Core Principle

> *Focus on the content, not the user.*

## Features

- Public post feed
- View text and image-based posts
- No chat or messaging
- No comments or reactions
- No user profile pages
- Clean and distraction-free interface
- Secure backend with Laravel best practices

## Tech Stack

- **Laravel 11**
- **PHP 8.2+**
- **MySQL**
- **Blade Template Engine**
- **Eloquent ORM**
- **Bootstrap**

## Application Scope

| Feature            | Available |
|-------------------|-----------|
| View Posts        | Yes       |
| User Profiles     | No        |
| Comments          | No        |
| Likes / Reactions | No        |
| Chat / Messaging  | No        |

## Installation Guide

1. Clone the repository:
   `git clone https://github.com/your-username/ContentManagementApp.git`
2. Enter the project directory:
   `cd ContentManagementApp`
3. Install dependencies:
   `composer install`
4. Create environment file:
   `cp .env.example .env`
5. Generate app key:
   `php artisan key:generate`
6. Run migrations:
   `php artisan migrate`
7. Start server:
   `php artisan serve`

## Usage

- Access the homepage to view all posts.
- Users can only consume content.
- No interaction between users is available.

## Future Enhancements

- Content categories & tags
- Search and filter posts
- Admin moderation panel

## License

- MIT License

## Author

**Yudhistira**
Student
