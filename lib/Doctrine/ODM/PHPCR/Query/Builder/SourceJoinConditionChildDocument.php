<?php

namespace Doctrine\ODM\PHPCR\Query\Builder;

class SourceJoinConditionChildDocument extends AbstractLeafNode
{
    protected $childSelectorName;
    protected $parentSelectorName;

    public function __construct($parent, $childSelectorName, $parentSelectorName)
    {
        $this->childSelectorName = (string) $childSelectorName;
        $this->parentSelectorName = (string) $parentSelectorName;
        parent::__construct($parent);
    }

    public function getNodeType()
    {
        return self::NT_SOURCE_JOIN_CONDITION;
    }

    public function getChildSelectorName() 
    {
        return $this->childSelectorName;
    }

    public function getParentSelectorName() 
    {
        return $this->parentSelectorName;
    }
}
