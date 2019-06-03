<?php

namespace App\Libraries\HelperTraits;

trait UdemyTrait {

  public static function udemy_backend() {
    "udemy-backend  udemy-frontend  udemy-others ";
    $prefix = '/udemy/udemy-backend/';
    $folders = [
      [ 'Introduction to Docker', [39,] ],
      [ '[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples', [16,] ],
      [ 'Udemy - Automate the Boring Stuff with Python Programming (2015)', [6,] ],
      [ 'Udemy-become-a-wordpress-developer-php-javascript', [16,] ],
      [ 'udemy-complete-linux-training-course-to-get-your-dream-it-job-2019', [12,] ],
      [ 'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops', [39, ] ],
      [ 'udemy_wp_development_themes_and_plugin', [16,] ],
      [ 'Wordpress Security - From Beginner to .htaccess', [13,] ],
    ];
    $folders = self::set_main_id($folders, [20]);
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_frontend() {
    $prefix = '/udemy/udemy-frontend/';
    $folders = [
      [ '[FreeCourseSite.com] Udemy - React 16 – The Complete Guide (incl. React Router 4 & Redux)', [10,] ],
      [ '[ FreeCourseWeb ] Udemy - The Serverless Framework with Node.js & AWS', [8, 43,] ],
      [ '[FreeTutorials.us] complete-react-js-course', [10,] ],
      [ '[FreeTutorials.Us] full-stack-universal-react-with-redux-express-and-mongodb', [10, 8, 44,] ],
      [ '[FreeTutorials.us] graphql-with-react-course', [10, 40, ] ],
      [ '[FreeTutorials.us] node-with-react-fullstack-web-development', [10, 8,] ],
      [ 'Intro-To-MySQL With Node.js - Learn To Use MySQL with Node', [8, 5, 14, ] ],
      [ 'Master NodeJS  The Complete Front-End Developer Course', [8] ],
      [ 'The Node.js Master Class – No Frameworks, No NPM _ Node V8.X', [8] ],
      [ 'udemy - Learn Nodejs by building 10 projects', [8] ],
      [ 'udemy-mern-stack-front-to-back-full-stack-react,-redux-node.js', [10, 8,] ],
      [ 'udemy-mevp-stack-vue-js-2-course-mysql-express.js-vue.js-php', [8, 5, 11,] ],
      [ 'udemy-node.js,-express-mongodb-dev-to-deployment', [8, 44,] ],
      [ 'udemy-nodejs-the-complete-guide', [8] ],
      [ 'udemy_nuxt.js_vue.js_on_steroids', [11, 8,] ],
      [ 'Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)', [11] ],
    ];
    $folders = self::set_main_id($folders, [20]);
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_others() {
    $prefix = '/udemy/udemy-others/';
    $folders = [
      [ 'How to Learn and Memorize the Vocabulary of Any Language', [28,], ],
      [ 'Mastering IELTS Writing Task 2', [28,], ],
      [ 'Memory Manipulation How to Train Your Brain to Think Faster, Concentrate More, and Remember Anything by T. Whitmore', [45,], ],
      [ 'Morning Routines The Ultimate Morning Routine Guide', [46,], ],
      [ 'udemy-blog-for-a-living-complete-blogging-training-level-1,-2-3', [46, 29,], ],
      [ 'udemy_crash_course_on_office_management', [29,], ],
      [ 'UDEMY_IMPROVE_YOUR_ENGLISH_VOCABULARY_WITH_OVER_70_TRICKY_WORDS', [28, ], ],
      [ 'udemy_passive_income_7_ways_to_make_passive_income_online_18', [29, 46,], ],
      [ 'Writing Tips to Instantly Improve Your Writing', [28,], ],
    ];
    $folders = self::set_main_id($folders, [20]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function udemy_aws() {
    $prefix = '/udemy/udemy-aws/';
    $folders = [
      [ 'Amazon Web Services (AWS) Certified 2019 - 4 Certifications!', [43,], ],
      [ 'Amazon Web Services - Web Hosting & Cloud Computing With AWS', [43,], ],
      [ 'Learn Amazon Web Services easily to become Architect', [43,], ],

    ];
    $folders = self::set_main_id($folders, [20]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function udemy_linux() {
    $prefix = '/udemy/udemy-aws/';
    $folders = [
      [ 'Complete Linux Bash Shell Scripting with Real Life Examples', [12,] ],
      [ 'Learn Linux Shell Scripting – Fundamentals of Bash 4.4', [12,] ],
      [ 'Linux Command Line Interface and BASH Scripting', [12,] ],
    ];
    $folders = self::set_main_id($folders, [20]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function udemy()
  {
    return array_merge(
      self::udemy_backend(),
      self::udemy_frontend(),
      self::udemy_others(),
      self::udemy_aws(),
      self::udemy_linux()
    );
  }
}
