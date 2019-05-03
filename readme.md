## Personal Video Player 

This project build with laravel and vuejs for personal use. I find its very helpful who try to be organize 
his/her media. 

Video Player features 

--------------------

* you can make a topic for series. (eg topic: `wordpress`, `php`, `entertainment`, `telegu movie`)
* you can add a series under a topic 

a series have 2 fields. `title` and `url`. `Url` will be absolute path of a media folder. 


~~~
eg.

title: Advanced WordPress_ Action and Filter Hooks
url: /Users/polodev/Documents/tuts_video/lyn/paid/Advanced WordPress_ Action and Filter Hooks

~~~

* you can search all series (globally)

* you can search topics (only in topic listing page)

* you can keep some series hidden which  listed on `series-hidden` slug ( :) Negativity in mind ). you have to type those slug in address bar manually


## todo 

[] adding seeking option for video player




## Technology

frontend: 

* Bootstrap 4
* Vue js 2.*
* videojs

Backend:

* Laravel 5.5

## How to run this project

Its a laravel project. So you need composer as your dependency manager. can be download composer from [official website)(https://getcomposer.org/)

First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/polodev/personal-video-player
cd personal-video-player
~~~

copy `.env.example` file to `.env` and give your database credential 

~~~bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=video_player
DB_USERNAME=root
DB_PASSWORD=
~~~
in my case database name in `video_player`.

optionally you can change app from environment file (`.env` file) 

~~~bash
APP_NAME="Dev-Player"
~~~

### Downloading composer package and dumping for autoload
~~~php
composer install

composer dump-autoload

~~~

* Downloading npm packages (optional)
~~~bash
npm install
npm run prod
~~~

### Configure project

You need to add `php` in your environment path to tinkering with laravel artisan command

~~~bash 
php artisan cache:clear
php artisan config:cache
php artisan key:generate
~~~

you can Serving laravel project from `xampp`, `wamp`, `laragon`, `valet` or basic php server.     


basic php server  using `artisan`

~~~bash
php artisan serve
~~~



