<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Contracts;

use Brunocfalcao\OCBridge\Data\GatewayResponse;

/**
 * OpenClaw AI gateway contract.
 *
 * Defines the public API for communicating with an OpenClaw agent.
 * Supports both synchronous (send and wait) and streaming (event-driven)
 * message delivery, with optional memory continuity across calls.
 */
interface Gateway
{
    /**
     * Send a message and wait for the complete response.
     *
     * @param  string       $message   The prompt to send to the agent.
     * @param  string|null  $memoryId  UUID for memory continuity — all calls sharing the
     *                                 same ID connect to the same agent session.
     * @param  string|null  $agentId   Route to a specific agent (null = default from config).
     */
    public function sendMessage(string $message, ?string $memoryId = null, ?string $agentId = null): GatewayResponse;

    /**
     * Stream a message response via event callbacks.
     *
     * Events are dispatched to $onEvent as they arrive from the gateway:
     *   - StreamEvent::Delta    → ['delta' => string, 'text' => string]
     *   - StreamEvent::Complete → ['text' => string, 'session_key' => string]
     *   - StreamEvent::Error    → ['message' => string]
     *
     * @param  string        $message   The prompt to send to the agent.
     * @param  string|null   $memoryId  UUID for memory continuity.
     * @param  callable      $onEvent   Receives (StreamEvent $type, array $data).
     * @param  callable|null $onIdle    Called periodically during wait (keepalive/heartbeat).
     * @param  string|null   $agentId   Route to a specific agent (null = default from config).
     */
    public function streamMessage(
        string $message,
        ?string $memoryId,
        callable $onEvent,
        ?callable $onIdle = null,
        ?string $agentId = null,
    ): void;
}
