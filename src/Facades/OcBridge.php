<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Facades;

use Brunocfalcao\OCBridge\Contracts\Gateway;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Brunocfalcao\OCBridge\Data\GatewayResponse sendMessage(string $message, ?string $memoryId = null, ?string $agentId = null)
 * @method static void streamMessage(string $message, ?string $memoryId, callable $onEvent, ?callable $onIdle = null, ?string $agentId = null)
 *
 * @see \Brunocfalcao\OCBridge\Services\OpenClawGateway
 * @see \Brunocfalcao\OCBridge\Contracts\Gateway
 */
class OcBridge extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Gateway::class;
    }
}
