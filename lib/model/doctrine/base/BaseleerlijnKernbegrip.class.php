<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseleerlijnKernbegrip extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('leerlijn_kernbegrip');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '255',
             ));
        $this->hasColumn('summary', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'length' => '4000',
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('thema_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasMany('leerlijnKern as Kern', array(
             'refClass' => 'leerlijnKernbegripKern',
             'local' => 'kernbegrip_id',
             'foreign' => 'kern_id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('leerlijnEindterm as Eindterm', array(
             'refClass' => 'leerlijnKernbegripEindterm',
             'local' => 'kernbegrip_id',
             'foreign' => 'eindterm_id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('leerlijnThema as Thema', array(
             'refClass' => 'leerlijnKernbegripThema',
             'local' => 'kernbegrip_id',
             'foreign' => 'thema_id'));

        $this->hasMany('leerlijnSleutelinzicht as Sleutelinzicht', array(
             'local' => 'id',
             'foreign' => 'kernbegrip_id'));

        $this->hasMany('leerlijnKernbegripEindterm', array(
             'local' => 'id',
             'foreign' => 'kernbegrip_id'));

        $this->hasMany('leerlijnKernbegripKern', array(
             'local' => 'id',
             'foreign' => 'kernbegrip_id'));

        $this->hasMany('leerlijnKernbegripThema', array(
             'local' => 'id',
             'foreign' => 'kernbegrip_id'));

        $this->hasMany('expert as Expert', array(
             'refClass' => 'expertKernbegrip',
             'local' => 'kernbegrip_id',
             'foreign' => 'expert_id'));

        $this->hasMany('expertKernbegrip', array(
             'local' => 'id',
             'foreign' => 'kernbegrip_id'));
    }
}