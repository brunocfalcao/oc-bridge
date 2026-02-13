<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Exceptions;

use RuntimeException;

/**
 * Base exception for all OpenClaw Bridge errors.
 *
 * Catch this to handle any package-level error in a single block:
 *
 *     try {
 *         OcBridge::sendMessage(...);
 *     } catch (OcBridgeException $e) {
 *         // Any gateway, connection, or browser error
 *     }
 */
class OcBridgeException extends RuntimeException {}
