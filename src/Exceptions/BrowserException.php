<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Exceptions;

/**
 * Thrown when a browser/CDP operation fails.
 *
 * Common causes: Chrome not running, WebSocket handshake failed,
 * CDP command error, screenshot failure, no open tab.
 */
class BrowserException extends OcBridgeException {}
