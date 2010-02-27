<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseleerlijnDomein extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('leerlijn_domein');
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
        $this->hasColumn('vak_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('leerlijnVak as Vak', array(
             'local' => 'vak_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('leerlijnEindterm as Eindterm', array(
             'local' => 'id',
             'foreign' => 'domein_id'));
    }
}