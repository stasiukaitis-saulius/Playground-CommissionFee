<?php

namespace CommissionFee\CommisssionFeeCalculateStrategy;

use CommissionFee\Operation\Operation;

class CacheInCommissionFeeStrategy extends CommissionFeeStrategy
{
    const MAX_COMMISSION = 5.0;

    public function calculate(Operation $operation): float
    {
        $fee = parent::calculate($operation);

        if ($fee > static::MAX_COMMISSION) {
            $fee = static::MAX_COMMISSION;
        }

        return $fee;
    }
}
