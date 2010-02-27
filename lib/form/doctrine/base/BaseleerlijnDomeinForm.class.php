<?php

/**
 * leerlijnDomein form base class.
 *
 * @package    form
 * @subpackage leerlijn_domein
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseleerlijnDomeinForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInput(),
      'summary'     => new sfWidgetFormInput(),
      'description' => new sfWidgetFormTextarea(),
      'image'       => new sfWidgetFormInput(),
      'vak_id'      => new sfWidgetFormDoctrineChoice(array('model' => 'leerlijnVak', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => 'leerlijnDomein', 'column' => 'id', 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'summary'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'image'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vak_id'      => new sfValidatorDoctrineChoice(array('model' => 'leerlijnVak')),
    ));

    $this->widgetSchema->setNameFormat('leerlijn_domein[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'leerlijnDomein';
  }

}
