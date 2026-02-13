<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Data;

/**
 * Immutable response from an OpenClaw agent.
 *
 * Returned by Gateway::sendMessage() — contains the agent's
 * complete text response and the session key used for the call.
 */
final readonly class GatewayResponse
{
    public function __construct(
        /** The agent's complete text response. */
        public string $text,

        /** The session key used for this call (useful for logging/debugging). */
        public string $sessionKey,
    ) {}
}
