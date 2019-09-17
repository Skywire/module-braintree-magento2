<?php
declare(strict_types=1);

namespace Magento\Braintree\Plugin;

use \Magento\Framework\View\Asset\Minification;

/**
 * Class ExcludeFromMinification
 */
class ExcludeFromMinification
{
    /**
     * @param Minification $subject
     * @param array $result
     * @param $contentType
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetExcludes(Minification $subject, array $result, $contentType): array
    {
        if ('js' === $contentType) {
            $result[] = 'https://pay.google.com/gp/p/js/pay.js';
        }
        return $result;
    }
}
