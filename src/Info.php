<?php
/**
 * @link https://github.com/engine-core/error-handler
 * @copyright Copyright (c) 2021 engine-core
 * @license BSD 3-Clause License
 */

declare(strict_types=1);

namespace EngineCore\errors\handler;

use EngineCore\extension\repository\info\ConfigInfo;

class Info extends ConfigInfo
{

    protected $id = 'error';

    /**
     * @inheritdoc
     */
    public function getConfig(): array
    {
        return [
            'components' => [
                'errorHandler' => [
                    'errorAction' => "site/{$this->getId()}",
                ],
            ],
            'controllerMap' => [
                'site' => [
                    'dispatchMap' => [
                        'error' => [
                            'class' => 'EngineCore\themes\Basic\ErrorDispatch',
                            'view' => '@extensions/engine-core/theme-basic/src/views/error.php'
                        ],
                    ]
                ]
            ]
        ];
    }

}