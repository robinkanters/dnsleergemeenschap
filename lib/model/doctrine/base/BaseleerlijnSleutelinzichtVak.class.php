<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseleerlijnSleutelinzichtVak extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('leerlijn_sleutelinzicht_vak');
        $this->hasColumn('sleutelinzicht_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('vak_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('leerlijnSleutelinzicht', array(
             'local' => 'sleutelinzicht_id',
             'foreign' => 'id'));

        $this->hasOne('leerlijnVak', array(
             'local' => 'vak_id',
             'foreign' => 'id'));
    }
}