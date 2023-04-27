<?php
/**
 * @author: liuchg
 *
 */

namespace App\Services\gift\rule;


use App\Models\Order;


class AmountGiftRule implements GiftRuleInterface
{
    /**
     * @var $order Order
     */
    private $order;
    public function __construct($order)
    {
        $this->order = $order;
    }

    function validate(): bool
    {
        echo "支付满金额，有好礼";
        switch ($this->order->total_amount){
            case $this->order->total_amount>100:

        }
        if ($this->order->total_amount > 1000) {
            return true;
        }
       return true;
    }

}
