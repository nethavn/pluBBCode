<?php
namespace wcf\system\bbcode;
use wcf\util\StringUtil;
use wcf\system\WCF;


/**
 * pluBBCode 
 *
 * @author    alexp@nethavn.com
 * @copyright (c) 2023 by nethavn A/S
 * @license   nethavn free offerings license
 * @package   com.nethavn.wsc.pluBBCode
 * @category  pageLastUpdated
 */
class pluBBCode extends AbstractBBCode 
{
    public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser)
    {
		$page = WCF::getActivePage();

        if (!is_null($page->lastUpdateTime)) 
        {
           return "Updated on " . date('F d, Y', $page->lastUpdateTime);
        }
    }
}