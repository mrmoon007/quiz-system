# Quiz System

[![Status](https://img.shields.io/badge/status-active-success.svg)]()

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

## Overview

This quiz system allows users to participate in quizzes, view their results, and compete on leaderboards.

## Database Schema

![image](https://github.com/kareemaladawy/laravel-quiz-system/assets/62149929/0f00b4e8-)

## Features

#### Admin Features

-   Manage other admins
-   Manage quizzes
-   Manage questions and options
-   View all the tests taken on the system

#### User Features

-   Log in and register
-   Participate in quizzes as a guest or registered user
-   View a specific quiz's results and leaderboard
-   View the overall leaderboard, which ranks all users based on their test results

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

#### Prerequisites

-   Composer dependency manager
-   PHP 8+
-   Laravel 10.18+

#### Installation

1- Clone the project

```
git clone https://github.com/mrmoon007/quiz-system.git
```

2- Install the dependencies

```
composer install
```

3- Configure the environment:

```
cp .env.example .env
```

4- Generate the application key:

```
php artisan key:generate
```

5- Migrate the database:

```
php artisan migrate --seed
```

6- Start the development server:

```
php artisan serve
```

## Screenshots

<a href="https://github.com/kareemaladawy/laravel-quiz-system/issues/1">Admin Screenshots</a> <br>
<a href="https://github.com/kareemaladawy/laravel-quiz-system/issues/2">User Screenshots</a>

## Authors

-   [@mostafijur](https://github.com/mrmoon007)

## Contributing

Contributions are always welcome!
