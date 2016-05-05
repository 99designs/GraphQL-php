<?php
/**
 * ContentBlockInterface.php
 */

namespace Examples\Blog\Schema;


use Youshido\GraphQL\Type\Config\TypeConfigInterface;
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractInterfaceType;
use Youshido\GraphQL\Type\Scalar\StringType;

class ContentBlockInterface extends AbstractInterfaceType
{

    public function build(TypeConfigInterface $config)
    {
        $config->addField('title', new NonNullType(new StringType()));
        $config->addField('summary', new StringType());
    }

}