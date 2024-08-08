<?php
/**
 * Date: 07.12.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\Tests\StarWars\Schema;


use Youshido\GraphQL\Type\TypeMap;

class DroidType extends HumanType
{

    /**
     * @return String type name
     */
    #[\Override]
    public function getName()
    {
        return 'Droid';
    }

    #[\Override]
    public function build($config)
    {
        parent::build($config);

        $config->getField('friends')->getConfig()->set('resolve', fn($droid) => StarWarsData::getFriends($droid));

        $config
            ->addField('primaryFunction', TypeMap::TYPE_STRING);
    }

    #[\Override]
    public function getInterfaces()
    {
        return [new CharacterInterface()];
    }
}
