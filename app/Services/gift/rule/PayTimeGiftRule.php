<?php
/**
 * @author: liuchg
 * 准点支付
 */

namespace App\Services\gift\rule;


use App\Models\Order;

class PayTimeGiftRule implements GiftRuleInterface
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
        echo "准点支付有好礼";
        return true;
    }
}
