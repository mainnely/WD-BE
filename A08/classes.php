<?php 

class personalityIsland
{
    public $islandName;
    public $shortDesc;
    public $longDesc;
    public $image;
    public $islandID;

    public function __construct($islandName, $shortDesc, $longDesc, $image, $islandID)
    {
        $this->islandName = $islandName;
        $this->shortDesc = $shortDesc;
        $this->longDesc = $longDesc;
        $this->image = $image;
        $this->islandID = $islandID;
    }

    public function buildIsland()
    {
        return
        '
        <div class="w3-quarter pt-2">
        <a href="view.php?id='. $this->islandID .'">
          <img src="img/' . $this->image .'" alt="Boss" style="width:75%" class="rounded w3-hover-opacity">
          <h3 class="py-2">' . $this->islandName .'</h3>
          <p class="px-5">
            '. $this->shortDesc .'
          </p>
        </a>
      </div>';
    }
}

class islandcontents
{
    public $islandOfPersonalityID;
    public $image;
    public $content;
    public $islandName;
    public $longDesc;
    public $color;


    public function __construct($islandOfPersonalityID, $image, $content, $islandName, $longDesc, $color){
    
    $this->image = $image;
    $this->content = $content;
    $this->islandOfPersonalityID = $islandOfPersonalityID;
    $this->islandName = $islandName;
    $this->longDesc = $longDesc;
    $this->color = $color;
    }
    public function buildMemory()
    {
        return
        '
        <div class="container-fluid mt-5 p-0">
    <div class="row py-5">
      <div class="img-fluid d-flex justify-content-center">
        <img src="img/' . $this->image .'" style="width: 100%; height: auto;">
      </div>
    </div>
 
    <div class="row py-5">
      <div class="col">
        <div class="card p-3">
          <div class="h4 p-4" style="font-style:normal;">
           ' . $this->content .'
          </div>
        </div>
      </div>
    </div>
  </div>';
    }
}


?>