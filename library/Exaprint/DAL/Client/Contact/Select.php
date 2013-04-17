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

class Select extends \RBM\SqlQuery\Select
{

    public function __construct($cols = array(Column::ALL))
    {
        parent::__construct("TBL_CLIENT_CONTACT", $cols);
    }

    public function client()
    {
        return $this->join('TBL_CLIENT', 'IDClient', 'IDClient', [], '\RBM\DAL\Client\Select');
    }
}
