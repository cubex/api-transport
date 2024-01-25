<?php
namespace Cubex\ApiTransport\Responses;

use Cubex\ApiTransport\Exceptions\GenericApiException;

interface ApiResponse
{
  /**
   * @param object $response
   *
   * @return $this
   */
  public function hydrate(object $response): static;

  /**
   * @param string   $property
   * @param callable $func
   *
   * @return $this
   * @throws GenericApiException
   */
  public function filterClone(string $property, callable $func): static;
}
