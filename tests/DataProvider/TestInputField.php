<?php
/**
 * Date: 13.05.16
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\Tests\DataProvider;


use Youshido\GraphQL\Field\AbstractInputField;
use Youshido\GraphQL\Type\InputTypeInterface;
use Youshido\GraphQL\Type\Scalar\IntType;

class TestInputField extends AbstractInputField
{

    /**
     * @return InputTypeInterface
     */
    #[\Override]
    public function getType()
    {
        return new IntType();
    }

    #[\Override]
    public function getDescription()
    {
        return 'description';
    }

    #[\Override]
    public function getDefaultValue()
    {
        return 'default';
    }
}