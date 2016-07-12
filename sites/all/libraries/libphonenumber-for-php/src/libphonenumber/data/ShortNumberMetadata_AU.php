<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          [027]\\d{2}|
          1\\d{2,7}
        ',
    'PossibleNumberPattern' => '\\d{3,8}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          [027]\\d{2}|
          1\\d{2,7}
        ',
    'PossibleNumberPattern' => '\\d{3,8}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          [027]\\d{2}|
          1\\d{2,7}
        ',
    'PossibleNumberPattern' => '\\d{3,8}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            258885|
            555
          )|
          733
        ',
    'PossibleNumberPattern' => '\\d{3,7}',
    'ExampleNumber' => '733',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            2(?:
              34|
              456
            )|
            9\\d{4,6}
          )
        ',
    'PossibleNumberPattern' => '\\d{4,8}',
    'ExampleNumber' => '191123',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '
          000|
          1(?:
            06|
            12
          )
        ',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '112',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          000|
          1(?:
            06|
            1(?:
              00|
              2|
              9[46]
            )|
            2(?:
              [23]\\d|
              4\\d{2,3}|
              5\\d{3,4}|
              8(?:
                2|
                [013-9]\\d
              )
            )|
            555|
            9(?:
              [13-5]\\d{3}|
              [679]\\d{5}
            )
          )|
          225|
          7(?:
            33|
            67
          )
        ',
    'PossibleNumberPattern' => '\\d{3,8}',
    'ExampleNumber' => '112',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            1\\d{2}|
            24733
          )|
          225|
          767
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '225',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            258885|
            555
          )
        ',
    'PossibleNumberPattern' => '\\d{4,7}',
    'ExampleNumber' => '1555',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'AU',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
