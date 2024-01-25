<?php
namespace Cubex\ApiTransport\Responses;

interface ApiResponse
{
  /**
   * @param object $response
   *
   * @return $this
   */
  public function hydrate(object $response): static;
}
