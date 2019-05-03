## Personal Video Player 

Personal video player in your localhost (for developer people). You definitely will leave vlc, kmp, wmp forever...

This project build with laravel, vuejs & videojs for personal use. I find its very helpful who try to be organize 
his/her media. 


Video Player features 

--------------------

* You can make a topic for series. (eg topic: `wordpress`, `php`, `entertainment`, `telegu movie`)
* You can add a series under a topic 

a series have 2 fields. `title` and `url`. `Url` will be absolute path of a media folder. 


~~~
eg.

title: Advanced WordPress_ Action and Filter Hooks
url: /Users/polodev/Documents/tuts_video/lyn/paid/Advanced WordPress_ Action and Filter Hooks

~~~

* You can search all series (globally)

* You can search topics (only in topic listing page)

* You can keep some series hidden (in edit section) which  listed on `series-hidden` slug ( :) Privacy in mind ). you have to type those slug in address bar manually

* You can increase video speed which will be stored in local storage. 

* Having next and previous video link beneath the video player . 

* Next video will automatically loaded


## todo / or contribution ?

[x] adding seeking option for video player




## Technology

frontend: 

* Bootstrap 4
* Vue js 2.*
* videojs

Backend:

* Laravel 5.8

## How to run this project

Its a laravel project. So you need composer as your dependency manager. can be download composer from
official website [https://getcomposer.org/](https://getcomposer.org/)

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


Once you serving, step will be followed for a series

* create a topic 
* create a series add attached to topic 
* go to that topic and generate videos
* start watching 

**Beware, I have only used in linux machine.**



