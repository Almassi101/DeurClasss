<?php

class Deur { 
    private bool $opSlot;    // is the door locked?
    private bool $deuropening; // is the door open
    public string $deurNaam;   // name of the door

    public function __construct(string $deurNaam) {
        $this->opSlot = true;  // door starts locked
        $this->deuropening = false; //door starts closed
        $this->deurNaam = $deurNaam; // set door name
    }

    public function sleutelGebruiken(string $richting): string { 
        if ($richting == "links") { // check they key if turned left
            $this->opSlot = false; // unlock the door
            return "Deur is ontgrendeld"; // return message
        } else { 
            $this->opSlot = true; // keep the door locked
            return $this->deurNaam . " is nog op slot"; // return message
        }
    }

    public function deurOpenen(): string { // methode to open the door 
        if ($this->opSlot) { // check if the door is locked
            return "Deur is nog op slot en kan niet open"; // return message if the door is locked
        }
        $this->deuropening = true; // set the door opening to true
        return "Deur is geopend!"; // return message if the door is opened
    }

    public function doorDeurLopen(): string { //methode to walk through the door
        if (!$this->opSlot && $this->deuropening) { // check if the door is unlocked and open
            return "Je bent in je huiskamer!"; // return message if the door is unlocked and open
        } else {
            return "Je stoot tegen de " . $this->deurNaam . "!"; // return message if the door is locked or closed
        }
    }
}
