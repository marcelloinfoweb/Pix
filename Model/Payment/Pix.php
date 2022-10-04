<?php
/**
 * Copyright © Marcelo Caetano All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Funarbe\Pix\Model\Payment;

class Pix extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "pix";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ): bool
    {
        return parent::isAvailable($quote);
    }
}

