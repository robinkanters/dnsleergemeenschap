<?php

/**
 * BaseleerlijnSleutelinzichtLeerjaar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $leerjaar_id
 * @property integer $sleutelinzicht_id
 * @property leerlijnLeerjaar $leerlijnLeerjaar
 * @property leerlijnSleutelinzicht $leerlijnSleutelinzicht
 * 
 * @method integer                        getLeerjaarId()             Returns the current record's "leerjaar_id" value
 * @method integer                        getSleutelinzichtId()       Returns the current record's "sleutelinzicht_id" value
 * @method leerlijnLeerjaar               getLeerlijnLeerjaar()       Returns the current record's "leerlijnLeerjaar" value
 * @method leerlijnSleutelinzicht         getLeerlijnSleutelinzicht() Returns the current record's "leerlijnSleutelinzicht" value
 * @method leerlijnSleutelinzichtLeerjaar setLeerjaarId()             Sets the current record's "leerjaar_id" value
 * @method leerlijnSleutelinzichtLeerjaar setSleutelinzichtId()       Sets the current record's "sleutelinzicht_id" value
 * @method leerlijnSleutelinzichtLeerjaar setLeerlijnLeerjaar()       Sets the current record's "leerlijnLeerjaar" value
 * @method leerlijnSleutelinzichtLeerjaar setLeerlijnSleutelinzicht() Sets the current record's "leerlijnSleutelinzicht" value
 * 
 * @package    leerling
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseleerlijnSleutelinzichtLeerjaar extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('leerlijn_sleutelinzicht_leerjaar');
        $this->hasColumn('leerjaar_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('sleutelinzicht_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('leerlijnLeerjaar', array(
             'local' => 'leerjaar_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('leerlijnSleutelinzicht', array(
             'local' => 'sleutelinzicht_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}