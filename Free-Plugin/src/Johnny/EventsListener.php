<?php

namespace Johnny;

use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\player\Player;

class EventsListener implements Listener {

    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();

        $event->setJoinMessage("§a(+) " . $player->getName());
    }

    public function onQuit(PlayerQuitEvent $event) {
        $player = $event->getPlayer();

        $event->setQuitMessage("§c(-) " . $player->getName());
    }

    public function onDamage(EntityDamageEvent $event) {
        $entity = $event->getEntity();

        if($entity instanceof Player) {
            $event->cancel();
        }
    }
}