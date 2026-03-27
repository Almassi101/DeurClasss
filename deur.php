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
        if ($richting == "links") { // check the key if turned left
            $this->opSlot = false; // unlock the door
            return "Deur is ontgrendeld"; 
        } else { 
            $this->opSlot = true; // keep the door locked
            return $this->deurNaam . " is nog op slot"; 
        }
    }

    public function deurOpenen(): string { 
        if ($this->opSlot) { // check if the door is locked
            return "Deur is nog op slot en kan niet open"; 
        }
        $this->deuropening = true; // set the door opening to true
        return "Deur is geopend!"; 
    }

    public function doorDeurLopen(): string { 
        if (!$this->opSlot && $this->deuropening) { // check if the door is unlocked and open
            return "Je bent in je huiskamer!"; 
        } else {
            return "Je stoot tegen de " . $this->deurNaam . "!"; 
        }
    }
}
