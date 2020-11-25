<?php

namespace VDARK;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{CommandSender, Command};
use pocketmine\network\mcpe\protocol\OnScreenTextureAnimationPacket;

class OnScreenTextureAnimationPacket extends PluginBase{

    public function onEnable(): void{
        $this->getServer()->getCommandMap()->register("te", new TotemCommand($this));
    }
}

class TotemCommand extends Command{

    public function __construct(){
        parent::__construct("te", "effect test");
    }

    public function execute(CommandSender $player, $alias, array $args): bool{
        $pk = new OnScreenTextureAnimationPacket();
		/*speed 1
		  lowness 2
		  haste 3
		  mining_fatigue 4
		  strength 5
		  instant_health 6
		  instant_damage 7
		  jump_boost 8
		  nausea 9
		  regeneration 10
		  resistance 11
		  fire_resistance 12
		  water_breathing 13
		  invisibility 14
		  blindness 15
		  night_vision 16
		  hunger 17
		  weakness 18
		  poison 19
		  wither 20
		  health_boost 21
		  absorption 22
		  saturation 23
		  glowing 24
		  levitation 25
		  luck 26
		  unluck 27
		  slow_falling 28
		  conduit_power 29
		  dolphins_grace 30
		  bad_omen 31
		  hero_of_the_village 32
		*/
        $pk->effectId = 5; //strength
        $player->dataPacket($pk);
        return true;
    }
}

?>