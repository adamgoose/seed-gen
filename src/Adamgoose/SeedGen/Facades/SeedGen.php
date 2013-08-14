<?php namespace Adamgoose\SeedGen\Facades;

use Illuminate\Support\Facades\Facade;

class SeedGen extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'seedgen'; }

}
