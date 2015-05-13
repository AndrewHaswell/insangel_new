<?php

namespace App\Libraries;

class Navigation
{

  public static function navigation()
  {

    $cms_path = 'cms/';

    $navigation = ['Gig Guide' => url('/'),
                   'Artists'   => url('/test'),];

    $navigation['CMS'] = action('GigsController@index');

    $pages = glob($cms_path . '*.txt');
    $pages = array_map(function ($value) { return basename($value); }, $pages);

    $files = [];

    if (!empty($pages) && is_array($pages)) {

      foreach ($pages as $page) {
        $fullpage = strtolower($page);
        $page = explode('--', $page);

        if (empty($page[1])) {
          // We're top level, just use the file
          $name = ucwords(strtolower(str_replace('_', ' ', basename($page[0], '.txt'))));
          $url = 'pages/' . basename($fullpage, '.txt');
          $files[$name] = $url;
        } else {
          // We're sub level
          $directory = ucwords(strtolower(str_replace('_', ' ', basename($page[1], '.txt'))));
          $name = ucwords(strtolower(str_replace('_', ' ', basename($page[0], '.txt'))));
          $url = 'pages/' . basename($fullpage, '.txt');
          $files[$directory][$name] = $url;
        }
      }
    }

    if (!empty($files)) {
      $navigation += $files;
    }

    return $navigation;
  }
}
