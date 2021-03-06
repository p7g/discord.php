<?php
namespace p7g\Discord\Token;

final class BotToken implements TokenInterface {
  private $token;

  /**
   * BotToken constructor
   *
   * @param string $token The token, without any prefix
   */
  public function __construct(string $token) {
    $this->token = $token;
  }

  /**
   * Allow BotToken to be used as string
   *
   * @return string
   */
  public function __toString(): string {
    return "Bot {$this->token}";
  }

  public function getRawToken(): string {
    return $this->token;
  }

  public function jsonSerialize(): string {
    return $this->__toString();
  }
}
