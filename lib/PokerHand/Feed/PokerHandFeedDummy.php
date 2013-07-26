<?php
/**
 * @file
 * PokerHandFeedDummy.php
 */

namespace PokerHand\Feed;

use PokerHand\Feed\PokerHandFeedInterface;

/**
 * Provide a static data hand to test with.
 */
class PokerHandFeedDummy implements PokerHandFeedInterface {

  static public $url = '';

  public function getUrl() {
    return self::$url;
  }

  public function getData($url) {
    return '[{"name":1,"hand":[{"card":"9S","suite":"Spades","suite_abbr":"S","value":"Nine","value_abbr":9},{"card":"KC","suite":"Clubs","suite_abbr":"C","value":"King","value_abbr":"K"},{"card":"5S","suite":"Spades","suite_abbr":"S","value":"Five","value_abbr":5},{"card":"8C","suite":"Clubs","suite_abbr":"C","value":"Eight","value_abbr":8},{"card":"2H","suite":"Hearts","suite_abbr":"H","value":"Two","value_abbr":2}]},{"name":2,"hand":[{"card":"4C","suite":"Clubs","suite_abbr":"C","value":"Four","value_abbr":4},{"card":"AS","suite":"Spades","suite_abbr":"S","value":"Ace","value_abbr":"A"},{"card":"3S","suite":"Spades","suite_abbr":"S","value":"Three","value_abbr":3},{"card":"JH","suite":"Hearts","suite_abbr":"H","value":"Jack","value_abbr":"J"},{"card":"TD","suite":"Diamonds","suite_abbr":"D","value":"Ten","value_abbr":"T"}]}]';
  }

  public function parseData($data) {
    $info = array();

    try {
      $info = json_decode($data);
    }
    catch (Exception $e) {
      print $e->getMessage();
    }

    return $info;
  }

}