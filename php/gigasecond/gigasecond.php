<?php
/**
 * @param DateTime $date
 * @return DateTime + 1Gs
 */
function from($date){
  return  $date->modify('+1000000000 second');
}
