<?php
/**
 * Date: 13.05.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\Tests\DataProvider;


use Youshido\GraphQL\Type\Union\AbstractUnionType;

class TestUnionType extends AbstractUnionType
{

    #[\Override]
    public function getTypes()
    {
        return [
            new TestObjectType()
        ];
    }

    #[\Override]
    public function resolveType($object)
    {
        return $object;
    }

    #[\Override]
    public function getDescription()
    {
        return 'Union collect cars types';
    }


}
