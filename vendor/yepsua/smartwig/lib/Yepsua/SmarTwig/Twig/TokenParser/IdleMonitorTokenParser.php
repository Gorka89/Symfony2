<?php

namespace Yepsua\SmarTwig\Twig\TokenParser;

use Yepsua\SmarTwig\Twig\Node\IdleMonitorNode;

class IdleMonitorTokenParser extends CommonTokenParser {
  
  public function __construct() {
    parent::__construct();
    $this->setHasContent(false);
  }
  
  public function getNodeInstance(\Twig_Token $token){
    return new IdleMonitorNode($this->getNames(), new \Twig_Node($this->getValues()), $token->getLine(), $this->getTag());
  }

  /**
   * Gets the tag name associated with this token parser.
   *
   * @param string The tag name
   */
  public function getTag() {
    return 'ui_idleMonitor';
  }
}