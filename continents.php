<?php
class Continent { 
  public function __construct(public $continent){}
  public function getMyCurrentLocation(){
    return "i'm in $this->continent.\n";
  }
}
class Country extends Continent{ 
  public function __construct(public $continent, public $country){
    parent::__construct($continent,$country);
  }
  public function getMyCurrentLocation(){
    return "i'm in $this->continent, $this->country.\n";
  }
}
class Region extends Country{ 
  public function __construct(public $continent, public $country, public $region){
    parent::__construct($continent,$country,$region);
  }
  public function getMyCurrentLocation(){
    return "i'm in $this->continent, $this->country, $this->region.\n";
  }
}
class Province extends Region{ 
  public function __construct(public $continent, public $country, public $region, public $province){
    parent::__construct($continent,$country,$region,$province);
  }
  public function getMyCurrentLocation(){
    return "i'm in $this->continent, $this->country, $this->region, $this->province.\n";
  }
}
class City extends Province{ 
  public function __construct(public $continent, public $country, public $region, public $province, public $city){
    parent::__construct($continent,$country,$region,$province,$city);
  }
  public function getMyCurrentLocation(){
    return "i'm in $this->continent, $this->country, $this->region, $this->province, $this->city.\n";
  }
}
class Street extends City{ 
  public function __construct(public $continent, public $country, public $region, public $province, public $city, public $street){
    parent::__construct($continent,$country,$region,$province,$city,$street);
  }
  public function getMyCurrentLocation(){
    return "i'm in $this->continent, $this->country, $this->region, $this->province, $this->city, $this->street.\n";
  }
}
$myLocation = new Street("Europe", "Italy", "Friuli Venezia Giulia", "TS", "Triest", "Giuseppe Verdi 65/A");

