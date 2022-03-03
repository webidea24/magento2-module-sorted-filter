<?php

namespace Webidea24\SortedFilter\Plugin;

use Magento\Catalog\Model\Layer\Filter\FilterInterface;

class SortFilter
{
    /**
     * @param FilterInterface $subject
     * @param array $result
     * @return array
     */
    public function afterGetItems(FilterInterface $subject, array $result): array
    {
        $return = [];

        foreach ($result as $filterItem) {
            $return[(string)$filterItem->getLabel()] = $filterItem;
        }

        ksort($return);

        return $return;
    }
}
