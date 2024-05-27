<?php
class SuperHero{
    //Propiedades y metodos
    /* public $name;
    public $powers;
    public $plane */

    //Promoted properties
    // readonly sirve para que nadie pueda modificarlo
    public function __construct(
    public string $name, 
    public array $powers, 
    public string $planet)
    {
        /* $this->name=$name;
        $this-> powers = $powers;
        $this-> planet = $planet; */

    }

    public function attack(){
        return "¡$this->name ataca con sus poderes";
    }

    public function description(){
        //El implode convierte arrays en cadenas de texto
        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de 
        $this-> planet y tiene los siguientes poderes: $powers";
    }

    public static function ramdom(){
        $names = ["Thor", "Spiderman", "Wolverine", "IronMan", "Hulk"];
        $powers = [
            "Thor" => ["Thunder Control", "Super Strength", "Flight"],
            "Spiderman" => ["Wall-Crawling", "Spider-Sense", "Super Agility"],
            "Wolverine" => ["Regeneration", "Enhanced Senses", "Adamantium Claws"],
            "IronMan" => ["Genius Intellect", "Powered Armor Suit", "Advanced Weaponry"],
            "Hulk" => ["Super Strength", "Invulnerability", "Regeneration"]
        ];
        $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

        $name= $names[array_rand($names)];
        $power= $powers[array_rand($powers)];
        $planet= $planets[array_rand($planets)];


       /*  echo "El superheroe elegido es $name que viene de $planet y tiene los siguientes superpoderes: " . implode(", ", $power); */

       return new self($name, $power, $planet);
    }
}

$hero = SuperHero::ramdom();
echo $hero->description();



/* $hero = new SuperHero("Superman",["Superfuerza", "super calzones rojos", "rayos laser"],"Krypton");


echo $hero->description(); */





?>