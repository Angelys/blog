<?php

/**
 * BasePost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $title
 * @property string $post
 * 
 * @method string getTitle() Returns the current record's "title" value
 * @method string getPost()  Returns the current record's "post" value
 * @method Post   setTitle() Sets the current record's "title" value
 * @method Post   setPost()  Sets the current record's "post" value
 * 
 * @package    blog
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePost extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('post');
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('post', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}