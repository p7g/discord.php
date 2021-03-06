<?php
namespace p7g\discord\Token;

interface TokenInterface extends \JsonSerializable {
  /**
   * Make an instance of the token from a string
   *
   * @param string $token The token, without any prefix
   */
  public function __construct(string $token);

  /**
   * Allow a Token object to be used as a string
   *
   * @return string The string representation of the token, with the relevant
   * prefix
   */
  public function __toString(): string;

  public function getRawToken(): string;
}
