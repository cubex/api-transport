<?php
namespace Cubex\ApiTransport\Responses;

use Cubex\ApiTransport\Exceptions\GenericApiException;
use Packaged\Helpers\Objects;
use function array_filter;
use function is_array;

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

  /**
   * @param string   $property
   * @param callable $func
   *
   * @return $this
   * @throws GenericApiException
   */
  public function filterClone(string $property, callable $func): static
  {
    if (!isset($this->$property) || !is_array($this->$property))
    {
      throw new GenericApiException();
    }

    $resp = clone $this;
    $resp->$property = array_filter($this->$property, $func);
    return $resp;
  }
}
