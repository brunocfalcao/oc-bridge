<?php

declare(strict_types=1);

namespace Brunocfalcao\OCBridge\Contracts;

/**
 * Headless browser contract for CDP-based operations.
 *
 * Provides an interface for browser automation via Chrome DevTools Protocol:
 * opening pages, navigating, taking screenshots, and managing tabs.
 */
interface Browser
{
    /**
     * Open a URL in a browser tab (reuses existing tabs on the same domain).
     *
     * @return string The browser tab/target ID.
     */
    public function open(string $url): string;

    /** Navigate to a URL in the current tab. */
    public function navigate(string $url): void;

    /**
     * Take a screenshot of the current page.
     *
     * @param  string|null $path      File path to save the PNG. Null returns base64 data.
     * @param  bool        $fullPage  Capture the full scrollable page (true) or viewport only (false).
     * @return string File path if $path was given, otherwise base64-encoded PNG data.
     */
    public function screenshot(?string $path = null, bool $fullPage = true): string;

    /** Test whether headless Chrome is running and reachable. */
    public function testConnection(): bool;

    /** Close the current browser tab and clean up resources. */
    public function close(): void;
}
