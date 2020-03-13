<?php
namespace Cubex\ApiTransport\Payloads;

use Packaged\Context\Context;
use Packaged\Helpers\Objects;
use Packaged\Helpers\ValueAs;

abstract class AbstractPayload implements ApiPayload
{
  public function isValid(): bool
  {
    return $this->_validate();
  }

  protected function _validate(): bool
  {
    return true;
  }

  public static function i()
  {
    return new static();
  }

  /**
   * @param Context $c
   *
   * @return static
   * @throws \Exception
   */
  public function fromContext(Context $c)
  {
    $json = ValueAs::obj(json_decode($c->request()->getContent()), new \stdClass());
    Objects::hydrate($this, $json);
    return $this;
  }
}
