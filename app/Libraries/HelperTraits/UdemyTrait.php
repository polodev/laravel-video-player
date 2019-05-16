<?php

namespace App\Libraries\HelperTraits;

trait UdemyTrait {

  public static function udemy_backend() {
    "udemy-backend  udemy-frontend  udemy-others ";
    $prefix = '/udemy/udemy-backend/';
    $folders = [
      [ 'Introduction to Docker', [20,] ],
      [ '[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples', [20,] ],
      [ 'Udemy - Automate the Boring Stuff with Python Programming (2015)', [20,] ],
      [ 'Udemy-become-a-wordpress-developer-php-javascript', [20,] ],
      [ 'udemy-complete-linux-training-course-to-get-your-dream-it-job-2019', [20,] ],
      [ 'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops', [20,] ],
      [ 'udemy_wp_development_themes_and_plugin', [20,] ],
      [ 'Wordpress Security - From Beginner to .htaccess', [20,] ],
    ];
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_frontend() {
    $prefix = '/udemy/udemy-frontend/';
    $folders = [
      [ '[FreeCourseSite.com] Udemy - React 16 – The Complete Guide (incl. React Router 4 & Redux)', [20,] ],
      [ '[ FreeCourseWeb ] Udemy - The Serverless Framework with Node.js & AWS', [20,] ],
      [ '[FreeTutorials.us] complete-react-js-course', [20,] ],
      [ '[FreeTutorials.Us] full-stack-universal-react-with-redux-express-and-mongodb', [20,] ],
      [ '[FreeTutorials.us] graphql-with-react-course', [20,] ],
      [ '[FreeTutorials.us] node-with-react-fullstack-web-development', [20,] ],
      [ 'Intro-To-MySQL With Node.js - Learn To Use MySQL with Node', [20,] ],
      [ 'Master NodeJS  The Complete Front-End Developer Course', [20,] ],
      [ 'The Node.js Master Class – No Frameworks, No NPM _ Node V8.X', [20,] ],
      [ 'udemy - Learn Nodejs by building 10 projects', [20,] ],
      [ 'udemy-mern-stack-front-to-back-full-stack-react,-redux-node.js', [20,] ],
      [ 'udemy-mevp-stack-vue-js-2-course-mysql-express.js-vue.js-php', [20,] ],
      [ 'udemy-node.js,-express-mongodb-dev-to-deployment', [20,] ],
      [ 'udemy-nodejs-the-complete-guide', [20,] ],
      [ 'udemy_nuxt.js_vue.js_on_steroids', [20,] ],
      [ 'Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)', [20,] ],
    ];
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_others() {
    $prefix = '/udemy/udemy-others/';
    $folders = [
      [ 'How to Learn and Memorize the Vocabulary of Any Language', [20], ],
      [ 'list.js', [20], ],
      [ 'Mastering IELTS Writing Task 2', [20], ],
      [ 'Memory Manipulation How to Train Your Brain to Think Faster, Concentrate More, and Remember Anything by T. Whitmore', [20], ],
      [ 'Morning Routines The Ultimate Morning Routine Guide', [20], ],
      [ 'udemy-blog-for-a-living-complete-blogging-training-level-1,-2-3', [20], ],
      [ 'udemy_crash_course_on_office_management', [20], ],
      [ 'UDEMY_IMPROVE_YOUR_ENGLISH_VOCABULARY_WITH_OVER_70_TRICKY_WORDS', [20], ],
      [ 'udemy_passive_income_7_ways_to_make_passive_income_online_2018', [20], ],
      [ 'Writing Tips to Instantly Improve Your Writing', [20], ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function udemy()
  {
    return array_merge(
      self::udemy_backend(),
      self::udemy_frontend(),
      self::udemy_others(),
    );
  }
}
