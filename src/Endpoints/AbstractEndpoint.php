<?php
namespace Cubex\ApiTransport\Endpoints;

use Cubex\ApiTransport\Permissions\ApiPermission;

abstract class AbstractEndpoint implements ApiEndpoint
{
  /**
   * Permissions that are required to make a request to this endpoint
   *
   * @return ApiPermission[]
   */
  public function getRequiredPermissions(): array
  {
    return [];
  }

  /**
   * Permissions that may be used within the endpoint to provide functionality
   *
   * @return ApiPermission[]
   */
  public function getPermissions(): array
  {
    return [];
  }

  public function requiresAuthentication(): bool
  {
    return true;
  }
}
