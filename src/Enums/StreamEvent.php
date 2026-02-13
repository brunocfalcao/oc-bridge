<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Enums;

/**
 * Event types emitted during a streaming gateway response.
 *
 * Used as the first argument to the $onEvent callback in
 * Gateway::streamMessage() — replaces raw magic strings
 * with type-safe, auto-completable enum cases.
 */
enum StreamEvent: string
{
    /** A new token/chunk arrived from the agent. */
    case Delta = 'delta';

    /** The agent finished responding — full text is available. */
    case Complete = 'complete';

    /** An error occurred during streaming. */
    case Error = 'error';
}
