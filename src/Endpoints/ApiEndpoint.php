<?php
namespace Cubex\ApiTransport\Endpoints;

use Cubex\ApiTransport\Permissions\ApiPermission;

interface ApiEndpoint
{
  const VERB_HEAD = 'HEAD';
  const VERB_GET = 'GET';
  const VERB_POST = 'POST';
  const VERB_PUT = 'PUT';
  const VERB_PATCH = 'PATCH';
  const VERB_DELETE = 'DELETE';
  const VERB_PURGE = 'PURGE';
  const VERB_OPTIONS = 'OPTIONS';
  const VERB_TRACE = 'TRACE';
  const VERB_CONNECT = 'CONNECT';

  /**
   * @return string HTTP Verb e.g. GET, POST, DELETE, PATCH
   */
  public function getVerb(): string;

  /**
   * @return string Path the endpoint can be located
   */
  public function getPath(): string;

  /**
   * Payload Class
   *
   * @return null|string
   */
  public function getPayloadClass(): ?string;

  /**
   * Response Class
   *
   * @return string
   */
  public function getResponseClass(): string;

  /**
   * Permissions that are required to make a request to this endpoint
   *
   * @return ApiPermission[]
   */
  public function getRequiredPermissions(): array;

  /**
   * Permissions that may be used within the endpoint to provide functionality
   *
   * @return ApiPermission[]
   */
  public function getPermissions(): array;

  /**
   * @return bool
   */
  public function requiresAuthentication(): bool;
}
