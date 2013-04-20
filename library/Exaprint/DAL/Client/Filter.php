<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbessuges
 * Date: 18/08/12
 * Time: 13:04
 * To change this template use File | Settings | File Templates.
 */
namespace Exaprint\DAL\Client;

class Filter extends \Exaprint\DAL\Filter
{
    public function idPays()
    {

    }

    public function idVille($IDVille)
    {
        $this->equals('IDVille', $IDVille);
    }

    public function codePostal($cp)
    {

    }

    public function ville($ville)
    {

    }
}
