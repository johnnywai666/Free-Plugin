<?php

namespace Johnny;

use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Enabled Plugin");
        $this->getLogger()->info("Author: Johnnywai12345");
        $this->getServer()->getPluginManager()->registerEvents(new EventsListener(), $this);
        $this->getPlugin($this->getName());
    }

    public function getPlugin(string $string) {
        if($string == "FreePlugin") {
            $this->getLogger()->info("Plugin is Gooooood");
        }
    }
}