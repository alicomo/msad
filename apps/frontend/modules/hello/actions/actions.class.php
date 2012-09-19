<?php

/**
 * hello actions.
 *
 * @package    msad
 * @subpackage hello
 * @author     Muhammadali Shaduli <shaduli.vanimal@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class helloActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->name = $request->getParameter('name');
  }
  
  public function executeArticle(sfWebRequest $request)
  {
      $this->articles = Doctrine::getTable('Article')->findAll();
      
  }
  
  public function executeBest_article(sfWebRequest $request)
  {
      $this->articles = Doctrine::getTable('Article')->findByIsBest(true);
      
  }
}
