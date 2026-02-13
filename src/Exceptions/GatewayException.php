<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Exceptions;

/**
 * Thrown when a gateway request fails after a successful connection.
 *
 * Common causes: agent returned an error, response timeout,
 * chat.send rejected, malformed response.
 */
class GatewayException extends OcBridgeException {}
