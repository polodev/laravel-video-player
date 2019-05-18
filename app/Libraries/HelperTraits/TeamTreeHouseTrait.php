<?php

namespace App\Libraries\HelperTraits;

trait TeamTreeHouseTrait {

  public static function teamtreehouse_backend() {
    $prefix = '/teamtreehouse/teamtreehouse-backend/';
    $folders = [
      [ 'Build a Todo List Application with Rails 4', [] ],
      [ 'Object-Oriented PHP Basics', [] ],
      [ 'teamtreehouse_full_stack_javascript', [] ],
      [ 'Treehouse PHP Testing', [] ],
      [ 'Treehouse - Scrum Basics', [] ],

    ];
    $folders = self::set_main_id($folders, [19,]);
    return self::generate_single_series($prefix, $folders);
  }

  public static function teamtreehouse_frontend() {
    $prefix = '/teamtreehouse/teamtreehouse-frontend/';
    $folders = [
      [ 'Advanced Sass [Sality]', [], ],
      [ 'Treehouse - Build a Blog with Jekyll and GitHub Pages', [], ],
      [ 'treehouse_building_applications_with_react_and_redux', [], ],
      [ 'treehouse_css_grid_layout', [], ],
    ];
    $folders = self::set_main_id($folders, [19,]);
    return self::generate_single_series($prefix, $folders);
  }

  public static function teamtreehouse_others() {
    $prefix = '/teamtreehouse/teamtreehouse-others/';
    $folders = [
      [ 'How to Run a Web Design Business', [], ],
      [ 'How to Start a Business', [], ],
      [ 'Illustrator Foundations', [], ],
      [ 'Photoshop Foundations', [], ],
      [ 'Soft Skills [sality]', [], ],
    ];
    $folders = self::set_main_id($folders, [19,]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function teamtreehouse_wp()
  {
    $prefix = '/teamtreehouse/teamtreehouse-wp/';
    $folders = [
      [ 'Ecommerce with WordPress and WooCommerce (720p-Sub) [TeamTreeHouse] [TonyStark]', [] ],
      [ 'How to Build an eCommerce Site Using WordPress & WooCommerce [Sality]', [] ],
      [ 'How to Build a WordPress Theme', [] ],
      [ 'Learn BuddyPress_ Social Networks with WordPress', [] ],
      [ 'One Page WordPress Site [Sality]', [] ],
      [ 'TEAMTREEHOUSE CUSTOM MENU DEVELOPMENT IN WORDPRESS TUTORIAL', [] ],
      [ 'Teamtreehouse - From Bootstrap to WordPress', [] ],
      [ 'teamtreehouse_how_to_build_a_wordpress_plugin_with_number', [] ],
      [ 'TeamTreeHouse - Modern WordPress Workflow [TearKey]', [] ],
      [ 'TeamTreehouse - WordPress Hooks - Actions and Filters', [] ],
      [ 'The WordPress Codex[Sality]', [] ],
      [ 'treehouse_woocommerce_theme_development', [] ],
      [ 'WordPress Custom Loops with WP_Query[Sality]', [] ],
      [ 'WordPress Theme Development_new', [] ],
    ];
    $folders = self::set_main_id($folders, [19,]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function teamtreehouse_python()
  {
    $prefix = '/teamtreehouse/teamtreehouse-python/';
    $folders = [
      [ 'Build a Social Network with Flask', [], ],
      [ 'Dates and Times in Python', [], ],
      [ 'Object-Oriented Python [Sality]', [], ],
      [ 'Python Basics[Sality]', [], ],
      [ 'Regular Expressions in Python', [], ],
      [ 'Setting Up a Local Python Environment', [], ],
      [ 'TeamTreeHouse - Django Basics {TechieAce}', [], ],
      [ 'TeamTreeHouse - Flask Basics[TeamTreeHouse-Exclusive]', [], ],
      [ 'TeamTreeHouse - Local Development Environments {TechieAce}', [], ],
      [ 'TeamTreeHouse - Python Decorators {TechieAce}.mp4', [], ],
      [ 'TeamTreehouse - Python Testing [NepsterJay]', [], ],
      [ 'Using Databases in Python', [], ],
      [ 'Write Better Python [Sality]', [], ],
    ];
    $folders = self::set_main_id($folders, [19,]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function teamtreehouse()
  {
    return array_merge(
      self::teamtreehouse_backend(),
      self::teamtreehouse_frontend(),
      self::teamtreehouse_others(),
      self::teamtreehouse_wp(),
      self::teamtreehouse_python(),
    );
  }
}
