<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbessuges
 * Date: 12/09/12
 * Time: 19:52
 * To change this template use File | Settings | File Templates.
 */
namespace Exaprint\DAL\Client\Contact;

use RBM\SqlQuery\Column;

class Select extends \Exaprint\DAL\Select
{


    public function client()
    {
        return $this->join('TBL_CLIENT', 'IDClient');
    }
}
