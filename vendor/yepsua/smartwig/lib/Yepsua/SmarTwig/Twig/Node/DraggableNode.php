<?php

namespace Yepsua\SmarTwig\Twig\Node;

/**
 * 
 */
class DraggableNode extends SimpleNode {    
    
  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setOnlyJsS(true);
  }

  public function configureCallableMethods(){
    return array(
      'for' => array('method' => 'in'),
    );
  }

  public function getWidgetName(){
    return 'draggable';
  }
}