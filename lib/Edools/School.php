<?php

class Edools_School extends APIResource {

  // public static function create($attributes=Array()) { return self::createAPI($attributes); }
  public static function fetch($key)                  { return self::fetchAPI($key); }
  // public        function save()                      { return $this->saveAPI(); }
  // public        function delete()                    { return $this->deleteAPI(); }
  //
  // public        function refresh()                   { return $this->refreshAPI(); }



}


class Edools_SchoolWizard extends APIResource {

  public static function create($attributes=Array()) { return self::createAPI($attributes); }
  // public static function fetch($key)                  { return self::fetchAPI($key); }
  // public        function save()                      { return $this->saveAPI(); }
  // public        function delete()                    { return $this->deleteAPI(); }
  //
  // public        function refresh()                   { return $this->refreshAPI(); }



}
