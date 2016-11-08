<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */

namespace Webjump\BraspagPagador\Model\Source;


use Magento\Payment\Model\Source\Cctype;

class BilletTypes extends Cctype
{
    /**
     * @return array
     */
    public function getAllowedTypes()
    {
        return [
            'Simulado',
            'Bradesco',
            'BancoDoBrasil',
            'CitiBank',
            'Itau',
            'Brb',
            'Caixa',
            'Santander',
            'HSBC'
        ];
    }
}
