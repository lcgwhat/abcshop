<?php
/**
 * @author: liuchg
 *
 */

namespace App\Services\gift;


use App\Models\Order;
use App\Services\gift\rule\AmountGiftRule;
use App\Services\gift\rule\GiftRuleInterface;
use App\Services\gift\rule\PayTimeGiftRule;

class GiftService
{
    /**
     * @var $order Order
     */
   private $order;

    /**
     * @var $factory GiftRuleInterface
     */
   private $factory;
   public function __construct(Order $order)
   {
       $this->order = $order;
       $number = rand(10,20);
       //printf('%s\n', $number);
       if ($number>14) {
           $this->factory = new PayTimeGiftRule($this->order);
       }else{
           $this->factory = new AmountGiftRule($this->order);
       }
   }
   public function presenting(){
      return $this->factory->validate();
   }

}
