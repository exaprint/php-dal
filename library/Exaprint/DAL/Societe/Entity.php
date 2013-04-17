<?php
/**
 * Created by JetBrains PhpStorm.
 * User: rbessuges
 * Date: 18/08/12
 * Time: 14:52
 * To change this template use File | Settings | File Templates.
 */
class Societe_Entity extends Sql_Entity
{
    public function getList()
    {
        $select = $this->select()->cols('IDSociete', 'LibelleSociete', 'Code', 'IDPays');
        $select->filter()->addBitClause('EstSupp', false);
        return $this->query($select)->fetchAll(PDO::FETCH_OBJ);
    }
}
