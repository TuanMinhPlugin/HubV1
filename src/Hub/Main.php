<?php

namespace Hub;
use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
class Main extends PluginBase{
	
	public function onEnable(){
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			case "hub":
			 $this->getServer()->dispatchCommand(new ConsoleCommandSender(), "mw tp hub " . $sender->getName() . "");
             return true;
            } else {
                $sender->sendMessage("bạn đã dịch chuyển về hub");
				}
			}
			return true;
		}
	}
}	