<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Exceptions;

/**
 * Thrown when the bridge cannot connect to or authenticate with the gateway.
 *
 * Common causes: gateway unreachable, invalid token, protocol mismatch,
 * nonce challenge timeout.
 */
class ConnectionException extends OcBridgeException {}
