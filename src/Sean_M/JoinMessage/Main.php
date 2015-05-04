<?php
namespace Sean_M\JoinMessage;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
      
class Main extends PluginBase implements Listener{

     public function onEnable(){
     $this->getServer()->getPluginManager->registerEvents($this);
     $this->getLogger()->info("JoinMessage enabled!");
     }

       public function onPlayerJoin(PlayerJoinEvent $event){
       $p = $event->getPlayer();
       $p->sendMessage("Welcome to my server!");
       }
}
