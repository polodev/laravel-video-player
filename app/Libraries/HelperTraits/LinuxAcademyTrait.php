<?php

namespace App\Libraries\HelperTraits;

trait LinuxAcademyTrait {
  public static function linux_academy_linux() {
    $prefix = '/linux-academy/';
    $folders = [
      [ 'Linux Academy Nginx And The LEMP Stack', [] ],
      [ 'Linux Academy - NGINX Web Server Deep Dive', [] ],
      [ 'Linux Academy Red Hat Certified Systems Administrator Prep Course', [] ],
      [ 'Linux Academy - Using the EC2 Container Service', [] ],
      [ 'Linux Academy - Mastering The Linux Command Line', [], ],
    ];
    $folders = self::set_main_id($folders, [12, 47]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function linux_academy()
  {
    return array_merge(
      self::linux_academy_linux()
    );
  }
}
