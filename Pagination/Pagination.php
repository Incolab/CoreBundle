<?php

/**
 * File that contains Pagination utils
 * 
 * @author David Salbei <david@incolab.fr>
 * @copyright 2017 Incolab
 * @licence http://www.opensource.org/licenses/mit-license.html  MIT License
 * 
 */

namespace Incolab\CoreBundle\Pagination;

/**
 * Pagination
 *
 * @author David Salbei <david@incolab.fr>
 * @copyright 2017 Incolab
 * @licence http://www.opensource.org/licenses/mit-license.html  MIT License
 */
class Pagination
{
    public function getSimplePagination(int $total, int $current, int $nbByPage): array
    {
        $pageParam = [
            'prev' => false,
            'next' => false,
            'prevPage' => 0,
            'nextPage' => 0
        ];

        if (($current) > 1) {
            $pageParam['prevPage'] = $current - 1;
            $pageParam['prev'] = true;
        }

        $nextPage = $current + 1;

        if (($current * $nbByPage) < $total) {
            $pageParam['nextPage'] = $nextPage;
            $pageParam['next'] = true;
        }
        
        return $pageParam;
    }
}
