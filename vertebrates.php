<?php
class Vertebrate{
  public function __construct(){
    $this->getVertebrate();
  }
  protected function getVertebrate(){
    echo "I'm a Vertebrate animal.\n";
  }
}
class WarmBlooded extends Vertebrate{
    public function __construct(){
        parent::__construct();
        $this->getWarmBlooded();
    }
    protected function getWarmBlooded(){
        echo "I'm a Warm-Blooded animal.\n";
      }
}
class Mammal extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->getMammal();
    }
    protected function getMammal(){
        echo "Mammal noise.\n";
      }
}
class Bird extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->getBird();
    }
    protected function getBird(){
        echo "Bird noise.\n";
      }
}
class ColdBlooded extends Vertebrate{
  public function __construct(){
      parent::__construct();
      $this->getColdBlooded();
  }
  protected function getColdBlooded(){
      echo "I'm a Cold-Blooded animal.\n";
    }
  }
class Fish extends ColdBlooded{
  public function __construct(){
      parent::__construct();
      $this->getFish();
  }
  protected function getFish(){
      echo "Splash!\n";
    }
  }
class Reptile extends ColdBlooded{
  public function __construct(){
      parent::__construct();
      $this->getReptile();
  }
  protected function getReptile(){
      echo "Reptile noise.\n";
    }
  }
class Amphibian extends ColdBlooded{
  public function __construct(){
      parent::__construct();
      $this->getAmphibian();
  }
  protected function getAmphibian(){
      echo "Amphibian noise.\n";
    }
  }

