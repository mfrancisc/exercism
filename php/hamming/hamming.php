<?php
/**
 * Calculates the hamming distance between two stings
 *
 * @param $firstDna string
 * @param $secondDna string
 * @return $distance int number of differents nucleotides 
 */
function distance($firstDna, $secondDna)
{
  //assert same number of nucleotides
  if(differentStrandsLength($firstDna, $secondDna)){
    throw new InvalidArgumentException("DNA strands must be of equal length.");
  }

  return countHammingDistance($firstDna, $secondDna);
}

/**
 * Returns true if strands length are different , false if same length
 *
 * @param $firstDna string
 * @param $secondDna string
 * @return $different bool  true if different dna length/false if same dna length
 */
function differentStrandsLength($firstDna, $secondDna)
{
  return strlen($firstDna) !== strlen($secondDna);
}

/**
 * Counts Hamming distance
 *
 * @param $firstDna string
 * @param $secondDna string
 * @return $hammingDistance int 
 */
function countHammingDistance($firstDna, $secondDna)
{
  $hammingDistance = 0;

  for ($i=0; $i < strlen($firstDna); $i++){

    if($firstDna[$i] !== $secondDna[$i]){
      $hammingDistance++;
    }

  }

  return $hammingDistance;
}
