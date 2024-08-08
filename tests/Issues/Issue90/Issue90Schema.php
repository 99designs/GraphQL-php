<?php
namespace Youshido\Tests\Issues\Issue90;

use Youshido\GraphQL\Config\Schema\SchemaConfig;
use Youshido\GraphQL\Schema\AbstractSchema;
use Youshido\GraphQL\Type\Object\ObjectType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;

class Issue90Schema extends AbstractSchema
{

    #[\Override]
    public function build(SchemaConfig $config)
    {
        $config->setQuery(
            new ObjectType([
                'name'   => 'QueryType',
                'fields' => [
                    'echo' => [
                        'type'    => new DateTimeType('Y-m-d H:ia'),
                        'args'    => [
                            'date' => new DateTimeType('Y-m-d H:ia')
                        ],
                        'resolve' => fn($value, $args, $info) => $args['date'] ?? null
                    ]
                ]
            ])
        );

        $config->setMutation(
            new ObjectType([
                'name'   => 'MutationType',
                'fields' => [
                    'echo' => [
                        'type'    => new DateTimeType('Y-m-d H:ia'),
                        'args'    => [
                            'date' => new DateTimeType('Y-m-d H:ia')
                        ],
                        'resolve' => fn($value, $args, $info) => $args['date'] ?? null
                    ]
                ]
            ])
        );
    }

}