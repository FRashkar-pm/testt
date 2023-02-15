<?php

namespace waterfill;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\entity\Entity;

use pocketmine\level\Level;

use pocketmine\math\Vector3;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\block\Block;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class Main extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Plugin Enabled!");
    }
}

