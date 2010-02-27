<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseideaFollowup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('idea_followup');
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('child_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
    $this->hasOne('ideaItem as Parent', array(
             'local' => 'parent_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ideaItem as Followup', array(
             'local' => 'child_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}