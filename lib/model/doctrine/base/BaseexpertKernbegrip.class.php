<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseexpertKernbegrip extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('expert_kernbegrip');
        $this->hasColumn('expert_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('kernbegrip_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('expert', array(
             'local' => 'expert_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('leerlijnKernbegrip', array(
             'local' => 'kernbegrip_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}