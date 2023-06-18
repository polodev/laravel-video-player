## Laravel Video Player 
Personal video player in your localhost (for developer people). You definitely will leave vlc, kmp, wmp forever...


## How to run this project

Its a laravel project. So you need composer as your dependency manager. can be download composer from
official website [https://getcomposer.org/](https://getcomposer.org/)

First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/polodev/laravel-video-player
cd laravel-video-player
cp .env.example .env
~~~

copy `.env.example` file to `.env` and give your database credential 

~~~bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_video_player
DB_USERNAME=root
DB_PASSWORD=
~~~
in my case database name in `laravel_video_player`.

## website container class and default video width update 
you can change website container class and default video width from `.env` file

~~~bash
CONTAINER_CLASS=container
VIDEO_WIDTH=1200
~~~



### Downloading composer package and dumping for autoload
~~~php
composer install
~~~


### Configure project

You need to add `php` in your environment path to tinkering with laravel artisan command

~~~bash 
php artisan cache:clear
php artisan config:cache
php artisan key:generate
~~~

you can Serving laravel project from `xampp`, `wamp`, `laragon`, `valet` or basic php server.     


Basic php server  using `artisan`

~~~bash
php artisan serve
~~~
P
Once you serving, step will be followed for a series

* create a topic 
* create a series add attached to topic 
* go to that topic and generate videos
* start watching 


# About this Project
This project build with laravel, vuejs & videojs for personal use. I find its very helpful who try to be organize 
his/her media. 


Video Player features 

--------------------

* You can make a topic for series. (eg topic: `Php`, `Entertainment`, `Telegu movies`)

* You can add a series under a topic 

a series have 2 fields. `title` and folder `url`. `Url` will be absolute path of a media folder. 

# A `url` look like following
~~~
/Users/polodev/tuts/udemy/Udemy-become-a-wordpress-developer-php-javascript
~~~

* You can search all series (globally)

* You can search topics (only in topic listing page)

* You can keep some series hidden (in edit section) which  listed on `series-hidden` slug ( :) Privacy in mind ). you have to type those slug in address bar manually

* You can increase video speed which will be stored in local storage. 

* Having next and previous video link beneath the video player . 

* Next video will automatically loaded


## Todo / or Contribution ?

[x] adding seeking option for video player


## Technology

### frontend: 
* Bootstrap 5
* Vue js 2.*
* videojs

#### Backend:
* Laravel 10


