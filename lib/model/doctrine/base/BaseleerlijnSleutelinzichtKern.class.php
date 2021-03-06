<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseleerlijnSleutelinzichtKern extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('leerlijn_sleutelinzicht_kern');
        $this->hasColumn('sleutelinzicht_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('kern_id', 'integer', null, array(
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

        $this->hasOne('leerlijnKern', array(
             'local' => 'kern_id',
             'foreign' => 'id'));
    }
}