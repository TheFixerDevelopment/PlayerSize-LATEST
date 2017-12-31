<?php

namespace emanuele0204\PlayerSize;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};
use pocketmine\entity\Entity;
use pocketmine\{Server, Player};

class Main extends PluginBase{
    
    public $b = array();
    public function onEnable(){
        $this->getLogger()->info("§8» §ePlayerSize active, loaded.");
        $this->getServer()->getCommandMap()->register("size", new pSize($this));
    }
    
    public function respawn(PlayerRespawnEvent $e){
        $o = $e->getPlayer();
        if(!empty($this->b[$o->getName()])){
            $nomep = $this->b[$o->getName()];
            $o->setDataProperty(Entity::DATA_SCALE, Entity::DATA_TYPE_FLOAT, $nomep);
        }
    }
}

      }
   }
}
