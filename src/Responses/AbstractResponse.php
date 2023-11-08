<?php
namespace Cubex\ApiTransport\Responses;

use Packaged\Helpers\Objects;

abstract class AbstractResponse implements ApiResponse
{
  /**
   * @param object $response
   *
   * @return $this
   */
  public function hydrate(object $response): static
  {
    Objects::hydrate($this, $response);

    return $this;
  }
}
