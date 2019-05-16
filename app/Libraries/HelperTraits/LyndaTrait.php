<?php

namespace App\Libraries\HelperTraits;

trait LyndaTrait {

  public static function lynda_backend()
  {
    $prefix = 'lynda-backend/';
    $folders = [
      ['Deploying Docker to AWS', [17], ],
      ['Learning Docker', [17], ],
      ['Lynda - Amazon Web Services Essential Training (Aug 22, 2014)', [17], ],
      ['lynda.com - Practical Apache Web Server Administration', [17], ],
      ['Lynda.com - Python 3 Essential Training', [17], ],
      ['Lynda - Learning NGINX', [17], ],
      ['Lynda - Relational Database Fundamentals', [17], ],
      ['Lynda - Up and Running with Python and Django', [17], ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_node_js()
  {
    $prefix = 'lynda-node-js/';
    $folders = [
      [ 'Building RESTful Web APIs with Node.js and Express', [17, ] ],
      [ 'Databases for Node.js Developers', [17, ] ],
      [ '[FreeCoursesOnline.Us] Lynda - Databases-Node-js-Developers', [17, ] ],
      [ 'GraphQL_ Data Fetching with Relay', [17, ] ],
      [ 'Learning Apollo', [17, ] ],
      [ 'Learning Full-Stack javascript Development_ MongoDB, Node and React', [17, ] ],
      [ 'learning nodejs', [17, ] ],
      [ 'list.txt', [17, ] ],
      [ 'Lynda – Building a Website with Node.js and Express.js', [17, ] ],
      [ 'Lynda - Building Complex Express Sites with Redis and Socket.IO', [17, ] ],
      [ 'Lynda - Learning Redux', [17, ] ],
      [ 'Lynda - React Components Context and Accessibility', [17, ] ],
      [ 'Lynda - React Recipes', [17, ] ],
      [ 'Lynda -  Webpack for React Applications', [17, ] ],
      [ 'Node.js_ Build Your First Microservice', [17, ] ],
      [ 'Node.js_ Testing and Code Quality', [17, ] ],
      [ 'Up and Running with NoSQL Databases', [17, ] ],

    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_php_mysql()
  {
    $prefix = 'lynda-php-with-mysql/';
    $folders = [
      [ 'Advanced PHP', [17,] ],
      [ 'Building APIs in PHP Using the Silex Micro Framework', [17,] ],
      [ 'Consuming RESTful APIs in PHP with Guzzle', [17,] ],
      [ 'Learning CakePHP 3', [17,] ],
      [ 'Learning CodeIgniter 3', [17,] ],
      [ 'Learning Symfony 3', [17,] ],
      [ 'list.js', [17,] ],
      [ 'Lynda.com - Object-Oriented Programming with PHP', [17,] ],
      [ 'Lynda.com - PHP with MySQL Essential Training 2013', [17,] ],
      [ 'Lynda - Design Patterns in PHP', [17,] ],
      [ 'Lynda-MySQL Essential Training', [17,] ],
      [ 'Lynda - Unit Testing with PHPUnit', [17,] ],
      [ 'Lynda - Up and Running with Linux for PHP Developers', [17,] ],
      [ 'Lynda. Up and Running with PHP CodeIgniter', [17,] ],
      [ 'Magento Community Edition 2 Essential Training', [17,] ],
      [ 'PHP Test-Driven Development with PHPUnit with Justin Yost', [17,] ],
      [ 'PHP.with.MySQL.Beyond.the.Basics', [17,] ],

    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_frontend()
  {
    $prefix = 'lynda-frontend/';
    $folders = [
      [ 'CSS Shorts Weekly-dec-10', [17,] ],
      [ 'list.js', [17,] ],
      [ 'Lynda.com - HTML5 Features (7 short courses)', [17,] ],
      [ 'Lynda - CSS_Animation', [17,] ],
      [ 'Lynda - Learning SVG', [17,] ],
      [ 'Lynda - The DOM in JavaScript, jQuery, AngularJS, and React', [17,] ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_others()
  {
    $prefix = 'lynda-others/';
    $folders = [
      [ 'Grammar Fundamentals', [17,] ],
      [ 'list.js', [17,] ],
      [ 'Lynda.com - Project Management Essentials', [17,] ],
      [ 'Lynda - GIMP Essential Training (Updated Sep 04, 2014) - E_M_A', [17,] ],
      [ 'Lynda - Improving Your Memory', [17,] ],
      [ 'lynda -  Speed Reading Fundamentals', [17,] ],
      [ 'Management Fundamentals', [17,] ],
      [ 'Photoshop CC for Web Design with Justin Seeley', [17,] ],
      [ 'Sales Fundamentals with Jeff Bloomfield', [17,] ],
      [ 'Screencasting Fundamentals', [17,] ],

    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_wordpress()
  {
    $prefix = 'lynda-wordpress/';
    $folders = [
      [ 'Advanced WordPress_ Action and Filter Hooks', [17,] ],
      [ 'list.js', [17,] ],
      [ 'Lynda - WordPress and Internationalization', [17,] ],
      [ 'Lynda - WordPress Plugin Development', [17,] ],
      [ 'Lynda - WordPress Quick Tips Migration and Database Reset', [17,] ],
      [ 'Lynda - WordPress REST API (WP-API) - First Look', [17,] ],
      [ 'WordPress_ Plugin Development', [17,] ],
      [ 'WordPress REST API_ Authentication', [17,] ],
      [ 'WordPress REST API_ Building an Interactive Web App', [17,] ],

    ];
    return self::generate_single_series($prefix, $folders);
  }


  public static function lynda() {
    return array_merge(
      self::lynda_backend(),
      self::lynda_node_js(),
      self::lynda_php_mysql(),
      self::lynda_frontend(),
      self::lynda_others(),
      self::lynda_wordpress()
    );
  }
}
