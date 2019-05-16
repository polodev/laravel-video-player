<?php

namespace App\Libraries\HelperTraits;

trait LyndaTrait {

  public static function lynda_backend()
  {
    $prefix = '/lynda/lynda-backend/';
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
    $folders = self::set_main_id($folders, [17,]);

    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_node_js()
  {
    $prefix = '/lynda/lynda-node-js/';
    $folders = [
      [ 'Building RESTful Web APIs with Node.js and Express', [8,] ],
      [ 'Databases for Node.js Developers', [8,] ],
      [ '[FreeCoursesOnline.Us] Lynda - Databases-Node-js-Developers', [8,] ],
      [ 'GraphQL_ Data Fetching with Relay', [40, 8, ] ],
      [ 'Learning Apollo', [40, 8,] ],
      [ 'Learning Full-Stack javascript Development_ MongoDB, Node and React', [8, 10, ] ],
      [ 'learning nodejs', [8, ] ],
      [ 'Lynda – Building a Website with Node.js and Express.js', [8,] ],
      [ 'Lynda - Building Complex Express Sites with Redis and Socket.IO', [8, ] ],
      [ 'Lynda - Learning Redux', [10, ] ],
      [ 'Lynda - React Components Context and Accessibility', [10, ] ],
      [ 'Lynda - React Recipes', [10, ] ],
      [ 'Lynda -  Webpack for React Applications', [10,] ],
      [ 'Node.js_ Build Your First Microservice', [8,] ],
      [ 'Node.js_ Testing and Code Quality', [8, ] ],
      [ 'Up and Running with NoSQL Databases', [14, 8,] ],

    ];
    $folders = self::set_main_id($folders, [17]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_php_mysql()
  {
    $prefix = '/lynda/lynda-php-with-mysql/';
    $folders = [
      [ 'Advanced PHP', [] ],
      [ 'Building APIs in PHP Using the Silex Micro Framework', [31,] ],
      [ 'Consuming RESTful APIs in PHP with Guzzle', [] ],
      [ 'Learning CakePHP 3', [31,] ],
      [ 'Learning CodeIgniter 3', [31,] ],
      [ 'Learning Symfony 3', [31,] ],
      [ 'Lynda.com - Object-Oriented Programming with PHP', [] ],
      [ 'Lynda.com - PHP with MySQL Essential Training 2013', [14,] ],
      [ 'Lynda - Design Patterns in PHP', [] ],
      [ 'Lynda-MySQL Essential Training', [14,] ],
      [ 'Lynda - Unit Testing with PHPUnit', [] ],
      [ 'Lynda - Up and Running with Linux for PHP Developers', [12,] ],
      [ 'Lynda. Up and Running with PHP CodeIgniter', [31,] ],
      [ 'Magento Community Edition 2 Essential Training', [32,] ],
      [ 'PHP Test-Driven Development with PHPUnit with Justin Yost', [] ],
      [ 'PHP.with.MySQL.Beyond.the.Basics', [14,] ],

    ];
    $folders = self::set_main_id($folders, [17, 4]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_frontend()
  {
    $prefix = '/lynda/lynda-frontend/';
    $folders = [
      [ 'CSS Shorts Weekly-dec-10', [2,] ],
      [ 'Lynda.com - HTML5 Features (7 short courses)', [1,] ],
      [ 'Lynda - CSS_Animation', [2,] ],
      [ 'Lynda - Learning SVG', [2, 3,] ],
      [ 'Lynda - The DOM in JavaScript, jQuery, AngularJS, and React', [3, 9, 10, 41,] ],
    ];
    $folders = self::set_main_id($folders, [17,]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_others()
  {
    $prefix = '/lynda/lynda-others/';
    $folders = [
      [ 'Grammar Fundamentals', [34, 28, ] ],
      [ 'Lynda.com - Project Management Essentials', [34, 29, ] ],
      [ 'Lynda - GIMP Essential Training (Updated Sep 04, 2014) - E_M_A', [34, 42, ] ],
      [ 'Lynda - Improving Your Memory', [34, 45,] ],
      [ 'lynda -  Speed Reading Fundamentals', [34, 45, ] ],
      [ 'Management Fundamentals', [34, 29,] ],
      [ 'Photoshop CC for Web Design with Justin Seeley', [34, 42, ] ],
      [ 'Sales Fundamentals with Jeff Bloomfield', [34, 29,] ],
      [ 'Screencasting Fundamentals', [34, 23,] ],

    ];
    $folders = self::set_main_id($folders, [17,]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_wordpress()
  {
    $prefix = '/lynda/lynda-wordpress/';
    $folders = [
      [ 'Advanced WordPress_ Action and Filter Hooks', [] ],
      [ 'Lynda - WordPress and Internationalization', [] ],
      [ 'Lynda - WordPress Plugin Development', [] ],
      [ 'Lynda - WordPress Quick Tips Migration and Database Reset', [] ],
      [ 'Lynda - WordPress REST API (WP-API) - First Look', [] ],
      [ 'WordPress_ Plugin Development', [] ],
      [ 'WordPress REST API_ Authentication', [] ],
      [ 'WordPress REST API_ Building an Interactive Web App', [] ],

    ];
    $folders = self::set_main_id($folders, [17, 16]);
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
