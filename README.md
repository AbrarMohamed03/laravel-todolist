
# Laravel TodoList

A simple and user-friendly todo list application built with Laravel, a PHP framework. This application allows users to create, view, update, and delete their todo items.



## Features


- Clean and responsive design
- User authentication and authorization
- CRUD functionality for todo items
- Due date for each todo item

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites

You will need to have [Composer](https://getcomposer.org/) installed on your machine in order to run this project. You can check if you have it installed by running the following command in your terminal:

```bash
  composer -v

```

## Installing

1. Clone the repository:
```bash
  git clone https://github.com/DexTer-9/laravel-todolist.git
```

2. Navigate to the project directory:
```bash
  cd laravel-todolist

```

3. Install the required packages:
```bash
  composer install

```

4. Copy the `.env.example` file to `.env` and configure your database settings:
```bash
  cp .env.example .env

```

5. Generate an application key:
```bash
  php artisan key:generate

```

6. Run the migrations:
```bash
  php artisan migrate
```

7. Start the development server:
```bash
  php artisan serve
```
This will start a local development server and you can view the project in your browser at `http://localhost:8000`.


## Built With


- [Laravel ](https://laravel.com/) : PHP framework
- [Bootstrap ](https://getbootstrap.com/) :  CSS framework for styling

## Authors

- [@Mohamed Abrar](https://www.github.com/DexTer-9)



