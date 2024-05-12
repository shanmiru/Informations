<?php 
error_reporting(1);
date_default_timezone_set('Korea');
$main_url = $_SERVER['HTTP_HOST'];
$api_ver = "6.9";

$country = $_GET['country'];

if (empty($country) || strtolower($country) === 'us') {
   include("./x/index.php");
   exit;
}
if (empty($country) || strtolower($country) === 'gb') {
   include("./x/index.php");
   exit;
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/1.2/?nat=$country");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$randomuser = curl_exec($ch);
curl_close($ch);

if(!file_exists('count.txt')) {
    $fh = fopen('count.txt', 'w');
    fwrite($fh, '0');
    fclose($fh);
}



$decode = json_decode($randomuser, true);
$results = $decode['results'];
$result = $results[0];
$name = $result['name'];
$location = $result['location'];

$email = $result['email'];
$first = $name['first'];
$last = $name['last'];
$street = $location['street'];
$city = $location['city'];
$zip = $location['postcode'];
$full_state = $location['state'];
$phone = $result['phone'];
$country = $result['nat'];

$domain_mail = array("gmail.com","outlook.com","yahoo.com");
$rand_mail  = $domain_mail[mt_rand(0, count($domain_mail) - 1)];
$email= str_replace("example.com", $rand_mail, $email);
$email2 = "$first.$last.1121@$rand_mail";


$array = array (
  0 => 
  array (
    'code' => 'AF',
    'name' => 'Afghanistan',
    'regions' => 
    array (
    ),
  ),
  1 => 
  array (
    'code' => 'AL',
    'name' => 'Albania',
    'regions' => 
    array (
    ),
  ),
  2 => 
  array (
    'code' => 'DZ',
    'name' => 'Algeria',
    'regions' => 
    array (
    ),
  ),
  3 => 
  array (
    'code' => 'AS',
    'name' => 'American Samoa',
    'regions' => 
    array (
    ),
  ),
  4 => 
  array (
    'code' => 'AD',
    'name' => 'Andorra',
    'regions' => 
    array (
    ),
  ),
  5 => 
  array (
    'code' => 'AO',
    'name' => 'Angola',
    'regions' => 
    array (
    ),
  ),
  6 => 
  array (
    'code' => 'AI',
    'name' => 'Anguilla',
    'regions' => 
    array (
    ),
  ),
  7 => 
  array (
    'code' => 'AQ',
    'name' => 'Antarctica',
    'regions' => 
    array (
    ),
  ),
  8 => 
  array (
    'code' => 'AG',
    'name' => 'Antigua & Barbuda',
    'regions' => 
    array (
    ),
  ),
  9 => 
  array (
    'code' => 'AR',
    'name' => 'Argentina',
    'regions' => 
    array (
    ),
  ),
  10 => 
  array (
    'code' => 'AM',
    'name' => 'Armenia',
    'regions' => 
    array (
    ),
  ),
  11 => 
  array (
    'code' => 'AW',
    'name' => 'Aruba',
    'regions' => 
    array (
    ),
  ),
  12 => 
   array (
    'code' => 'AU',
    'name' => 'Australia',
    'regions' => 
    array (
        0 => 
        array (
          'id' => 569,
          'code' => 'ACT',
          'name' => 'Australian Capital Territory',
        ),
        1 => 
        array (
          'id' => 570,
          'code' => 'NSW',
          'name' => 'New South Wales',
        ),
        2 => 
        array (
          'id' => 576,
          'code' => 'NT',
          'name' => 'Northern Territory',
        ),
        3 => 
        array (
          'id' => 572,
          'code' => 'QLD',
          'name' => 'Queensland',
        ),
        4 => 
        array (
          'id' => 573,
          'code' => 'SA',
          'name' => 'South Australia',
        ),
        5 => 
        array (
          'id' => 574,
          'code' => 'TAS',
          'name' => 'Tasmania',
        ),
        6 => 
        array (
          'id' => 571,
          'code' => 'VIC',
          'name' => 'Victoria',
        ),
        7 => 
        array (
          'id' => 575,
          'code' => 'WA',
          'name' => 'Western Australia',
        ),
      ),
    ),
  13 => 
  array (
    'code' => 'AT',
    'name' => 'Austria',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 95,
        'code' => 'WI',
        'name' => 'Wien',
      ),
      1 => 
      array (
        'id' => 96,
        'code' => 'NO',
        'name' => 'Niederösterreich',
      ),
      2 => 
      array (
        'id' => 97,
        'code' => 'OO',
        'name' => 'Oberösterreich',
      ),
      3 => 
      array (
        'id' => 98,
        'code' => 'SB',
        'name' => 'Salzburg',
      ),
      4 => 
      array (
        'id' => 99,
        'code' => 'KN',
        'name' => 'Kärnten',
      ),
      5 => 
      array (
        'id' => 100,
        'code' => 'ST',
        'name' => 'Steiermark',
      ),
      6 => 
      array (
        'id' => 101,
        'code' => 'TI',
        'name' => 'Tirol',
      ),
      7 => 
      array (
        'id' => 102,
        'code' => 'BL',
        'name' => 'Burgenland',
      ),
      8 => 
      array (
        'id' => 103,
        'code' => 'VB',
        'name' => 'Vorarlberg',
      ),
    ),
  ),
  14 => 
  array (
    'code' => 'AZ',
    'name' => 'Azerbaijan',
    'regions' => 
    array (
    ),
  ),
  15 => 
  array (
    'code' => 'BS',
    'name' => 'Bahamas',
    'regions' => 
    array (
    ),
  ),
  16 => 
  array (
    'code' => 'BH',
    'name' => 'Bahrain',
    'regions' => 
    array (
    ),
  ),
  17 => 
  array (
    'code' => 'BD',
    'name' => 'Bangladesh',
    'regions' => 
    array (
    ),
  ),
  18 => 
  array (
    'code' => 'BB',
    'name' => 'Barbados',
    'regions' => 
    array (
    ),
  ),
  19 => 
  array (
    'code' => 'BY',
    'name' => 'Belarus',
    'regions' => 
    array (
    ),
  ),
  20 => 
  array (
    'code' => 'BE',
    'name' => 'Belgium',
    'regions' => 
    array (
    ),
  ),
  21 => 
  array (
    'code' => 'BZ',
    'name' => 'Belize',
    'regions' => 
    array (
    ),
  ),
  22 => 
  array (
    'code' => 'BJ',
    'name' => 'Benin',
    'regions' => 
    array (
    ),
  ),
  23 => 
  array (
    'code' => 'BM',
    'name' => 'Bermuda',
    'regions' => 
    array (
    ),
  ),
  24 => 
  array (
    'code' => 'BT',
    'name' => 'Bhutan',
    'regions' => 
    array (
    ),
  ),
  25 => 
  array (
    'code' => 'BO',
    'name' => 'Bolivia',
    'regions' => 
    array (
    ),
  ),
  26 => 
  array (
    'code' => 'BA',
    'name' => 'Bosnia & Herzegovina',
    'regions' => 
    array (
    ),
  ),
  27 => 
  array (
    'code' => 'BW',
    'name' => 'Botswana',
    'regions' => 
    array (
    ),
  ),
  28 => 
  array (
    'code' => 'BV',
    'name' => 'Bouvet Island',
    'regions' => 
    array (
    ),
  ),
  29 => 
  array (
    'code' => 'BR',
    'name' => 'Brazil',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 485,
        'code' => 'AC',
        'name' => 'Acre',
      ),
      1 => 
      array (
        'id' => 486,
        'code' => 'AL',
        'name' => 'Alagoas',
      ),
      2 => 
      array (
        'id' => 487,
        'code' => 'AP',
        'name' => 'Amapá',
      ),
      3 => 
      array (
        'id' => 488,
        'code' => 'AM',
        'name' => 'Amazonas',
      ),
      4 => 
      array (
        'id' => 489,
        'code' => 'BA',
        'name' => 'Bahia',
      ),
      5 => 
      array (
        'id' => 490,
        'code' => 'CE',
        'name' => 'Ceará',
      ),
      6 => 
      array (
        'id' => 491,
        'code' => 'ES',
        'name' => 'Espírito Santo',
      ),
      7 => 
      array (
        'id' => 492,
        'code' => 'GO',
        'name' => 'Goiás',
      ),
      8 => 
      array (
        'id' => 493,
        'code' => 'MA',
        'name' => 'Maranhão',
      ),
      9 => 
      array (
        'id' => 494,
        'code' => 'MT',
        'name' => 'Mato Grosso',
      ),
      10 => 
      array (
        'id' => 495,
        'code' => 'MS',
        'name' => 'Mato Grosso do Sul',
      ),
      11 => 
      array (
        'id' => 496,
        'code' => 'MG',
        'name' => 'Minas Gerais',
      ),
      12 => 
      array (
        'id' => 497,
        'code' => 'PA',
        'name' => 'Pará',
      ),
      13 => 
      array (
        'id' => 498,
        'code' => 'PB',
        'name' => 'Paraíba',
      ),
      14 => 
      array (
        'id' => 499,
        'code' => 'PR',
        'name' => 'Paraná',
      ),
      15 => 
      array (
        'id' => 500,
        'code' => 'PE',
        'name' => 'Pernambuco',
      ),
      16 => 
      array (
        'id' => 501,
        'code' => 'PI',
        'name' => 'Piauí',
      ),
      17 => 
      array (
        'id' => 502,
        'code' => 'RJ',
        'name' => 'Rio de Janeiro',
      ),
      18 => 
      array (
        'id' => 503,
        'code' => 'RN',
        'name' => 'Rio Grande do Norte',
      ),
      19 => 
      array (
        'id' => 504,
        'code' => 'RS',
        'name' => 'Rio Grande do Sul',
      ),
      20 => 
      array (
        'id' => 505,
        'code' => 'RO',
        'name' => 'Rondônia',
      ),
      21 => 
      array (
        'id' => 506,
        'code' => 'RR',
        'name' => 'Roraima',
      ),
      22 => 
      array (
        'id' => 507,
        'code' => 'SC',
        'name' => 'Santa Catarina',
      ),
      23 => 
      array (
        'id' => 508,
        'code' => 'SP',
        'name' => 'São Paulo',
      ),
      24 => 
      array (
        'id' => 509,
        'code' => 'SE',
        'name' => 'Sergipe',
      ),
      25 => 
      array (
        'id' => 510,
        'code' => 'TO',
        'name' => 'Tocantins',
      ),
      26 => 
      array (
        'id' => 511,
        'code' => 'DF',
        'name' => 'Distrito Federal',
      ),
    ),
  ),
  30 => 
  array (
    'code' => 'IO',
    'name' => 'British Indian Ocean Territory',
    'regions' => 
    array (
    ),
  ),
  31 => 
  array (
    'code' => 'BN',
    'name' => 'Brunei',
    'regions' => 
    array (
    ),
  ),
  32 => 
  array (
    'code' => 'BG',
    'name' => 'Bulgaria',
    'regions' => 
    array (
    ),
  ),
  33 => 
  array (
    'code' => 'BF',
    'name' => 'Burkina Faso',
    'regions' => 
    array (
    ),
  ),
  34 => 
  array (
    'code' => 'BI',
    'name' => 'Burundi',
    'regions' => 
    array (
    ),
  ),
  35 => 
  array (
    'code' => 'KH',
    'name' => 'Cambodia',
    'regions' => 
    array (
    ),
  ),
  36 => 
  array (
    'code' => 'CM',
    'name' => 'Cameroon',
    'regions' => 
    array (
    ),
  ),
  37 => 
  array (
    'code' => 'CA',
    'name' => 'Canada',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 66,
        'code' => 'AB',
        'name' => 'Alberta',
      ),
      1 => 
      array (
        'id' => 67,
        'code' => 'BC',
        'name' => 'British Columbia',
      ),
      2 => 
      array (
        'id' => 68,
        'code' => 'MB',
        'name' => 'Manitoba',
      ),
      3 => 
      array (
        'id' => 69,
        'code' => 'NL',
        'name' => 'Newfoundland and Labrador',
      ),
      4 => 
      array (
        'id' => 70,
        'code' => 'NB',
        'name' => 'New Brunswick',
      ),
      5 => 
      array (
        'id' => 71,
        'code' => 'NS',
        'name' => 'Nova Scotia',
      ),
      6 => 
      array (
        'id' => 72,
        'code' => 'NT',
        'name' => 'Northwest Territories',
      ),
      7 => 
      array (
        'id' => 73,
        'code' => 'NU',
        'name' => 'Nunavut',
      ),
      8 => 
      array (
        'id' => 74,
        'code' => 'ON',
        'name' => 'Ontario',
      ),
      9 => 
      array (
        'id' => 75,
        'code' => 'PE',
        'name' => 'Prince Edward Island',
      ),
      10 => 
      array (
        'id' => 76,
        'code' => 'QC',
        'name' => 'Quebec',
      ),
      11 => 
      array (
        'id' => 77,
        'code' => 'SK',
        'name' => 'Saskatchewan',
      ),
      12 => 
      array (
        'id' => 78,
        'code' => 'YT',
        'name' => 'Yukon Territory',
      ),
    ),
  ),
  38 => 
  array (
    'code' => 'CV',
    'name' => 'Cape Verde',
    'regions' => 
    array (
    ),
  ),
  39 => 
  array (
    'code' => 'KY',
    'name' => 'Cayman Islands',
    'regions' => 
    array (
    ),
  ),
  40 => 
  array (
    'code' => 'CF',
    'name' => 'Central African Republic',
    'regions' => 
    array (
    ),
  ),
  41 => 
  array (
    'code' => 'TD',
    'name' => 'Chad',
    'regions' => 
    array (
    ),
  ),
  42 => 
  array (
    'code' => 'CL',
    'name' => 'Chile',
    'regions' => 
    array (
    ),
  ),
  43 => 
  array (
    'code' => 'CN',
    'name' => 'China',
    'regions' => 
    array (
    ),
  ),
  44 => 
  array (
    'code' => 'CX',
    'name' => 'Christmas Island',
    'regions' => 
    array (
    ),
  ),
  45 => 
  array (
    'code' => 'CC',
    'name' => 'Cocos (Keeling) Islands',
    'regions' => 
    array (
    ),
  ),
  46 => 
  array (
    'code' => 'CO',
    'name' => 'Colombia',
    'regions' => 
    array (
    ),
  ),
  47 => 
  array (
    'code' => 'KM',
    'name' => 'Comoros',
    'regions' => 
    array (
    ),
  ),
  48 => 
  array (
    'code' => 'CG',
    'name' => 'Congo - Brazzaville',
    'regions' => 
    array (
    ),
  ),
  49 => 
  array (
    'code' => 'CD',
    'name' => 'Congo - Kinshasa',
    'regions' => 
    array (
    ),
  ),
  50 => 
  array (
    'code' => 'CK',
    'name' => 'Cook Islands',
    'regions' => 
    array (
    ),
  ),
  51 => 
  array (
    'code' => 'CR',
    'name' => 'Costa Rica',
    'regions' => 
    array (
    ),
  ),
  52 => 
  array (
    'code' => 'CI',
    'name' => 'Côte d’Ivoire',
    'regions' => 
    array (
    ),
  ),
  53 => 
  array (
    'code' => 'HR',
    'name' => 'Croatia',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 512,
        'code' => 'HR-01',
        'name' => 'Zagrebačka županija',
      ),
      1 => 
      array (
        'id' => 513,
        'code' => 'HR-02',
        'name' => 'Krapinsko-zagorska županija',
      ),
      2 => 
      array (
        'id' => 514,
        'code' => 'HR-03',
        'name' => 'Sisačko-moslavačka županija',
      ),
      3 => 
      array (
        'id' => 515,
        'code' => 'HR-04',
        'name' => 'Karlovačka županija',
      ),
      4 => 
      array (
        'id' => 516,
        'code' => 'HR-05',
        'name' => 'Varaždinska županija',
      ),
      5 => 
      array (
        'id' => 517,
        'code' => 'HR-06',
        'name' => 'Koprivničko-križevačka županija',
      ),
      6 => 
      array (
        'id' => 518,
        'code' => 'HR-07',
        'name' => 'Bjelovarsko-bilogorska županija',
      ),
      7 => 
      array (
        'id' => 519,
        'code' => 'HR-08',
        'name' => 'Primorsko-goranska županija',
      ),
      8 => 
      array (
        'id' => 520,
        'code' => 'HR-09',
        'name' => 'Ličko-senjska županija',
      ),
      9 => 
      array (
        'id' => 521,
        'code' => 'HR-10',
        'name' => 'Virovitičko-podravska županija',
      ),
      10 => 
      array (
        'id' => 522,
        'code' => 'HR-11',
        'name' => 'Požeško-slavonska županija',
      ),
      11 => 
      array (
        'id' => 523,
        'code' => 'HR-12',
        'name' => 'Brodsko-posavska županija',
      ),
      12 => 
      array (
        'id' => 524,
        'code' => 'HR-13',
        'name' => 'Zadarska županija',
      ),
      13 => 
      array (
        'id' => 525,
        'code' => 'HR-14',
        'name' => 'Osječko-baranjska županija',
      ),
      14 => 
      array (
        'id' => 526,
        'code' => 'HR-15',
        'name' => 'Šibensko-kninska županija',
      ),
      15 => 
      array (
        'id' => 527,
        'code' => 'HR-16',
        'name' => 'Vukovarsko-srijemska županija',
      ),
      16 => 
      array (
        'id' => 528,
        'code' => 'HR-17',
        'name' => 'Splitsko-dalmatinska županija',
      ),
      17 => 
      array (
        'id' => 529,
        'code' => 'HR-18',
        'name' => 'Istarska županija',
      ),
      18 => 
      array (
        'id' => 530,
        'code' => 'HR-19',
        'name' => 'Dubrovačko-neretvanska županija',
      ),
      19 => 
      array (
        'id' => 531,
        'code' => 'HR-20',
        'name' => 'Međimurska županija',
      ),
      20 => 
      array (
        'id' => 532,
        'code' => 'HR-21',
        'name' => 'Grad Zagreb',
      ),
    ),
  ),
  54 => 
  array (
    'code' => 'CU',
    'name' => 'Cuba',
    'regions' => 
    array (
    ),
  ),
  55 => 
  array (
    'code' => 'CY',
    'name' => 'Cyprus',
    'regions' => 
    array (
    ),
  ),
  56 => 
  array (
    'code' => 'CZ',
    'name' => 'Czech Republic',
    'regions' => 
    array (
    ),
  ),
  57 => 
  array (
    'code' => 'DK',
    'name' => 'Denmark',
    'regions' => 
    array (
    ),
  ),
  58 => 
  array (
    'code' => 'DJ',
    'name' => 'Djibouti',
    'regions' => 
    array (
    ),
  ),
  59 => 
  array (
    'code' => 'DM',
    'name' => 'Dominica',
    'regions' => 
    array (
    ),
  ),
  60 => 
  array (
    'code' => 'DO',
    'name' => 'Dominican Republic',
    'regions' => 
    array (
    ),
  ),
  61 => 
  array (
    'code' => 'EC',
    'name' => 'Ecuador',
    'regions' => 
    array (
    ),
  ),
  62 => 
  array (
    'code' => 'EG',
    'name' => 'Egypt',
    'regions' => 
    array (
    ),
  ),
  63 => 
  array (
    'code' => 'SV',
    'name' => 'El Salvador',
    'regions' => 
    array (
    ),
  ),
  64 => 
  array (
    'code' => 'GQ',
    'name' => 'Equatorial Guinea',
    'regions' => 
    array (
    ),
  ),
  65 => 
  array (
    'code' => 'ER',
    'name' => 'Eritrea',
    'regions' => 
    array (
    ),
  ),
  66 => 
  array (
    'code' => 'EE',
    'name' => 'Estonia',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 340,
        'code' => 'EE-37',
        'name' => 'Harjumaa',
      ),
      1 => 
      array (
        'id' => 341,
        'code' => 'EE-39',
        'name' => 'Hiiumaa',
      ),
      2 => 
      array (
        'id' => 342,
        'code' => 'EE-44',
        'name' => 'Ida-Virumaa',
      ),
      3 => 
      array (
        'id' => 343,
        'code' => 'EE-49',
        'name' => 'Jõgevamaa',
      ),
      4 => 
      array (
        'id' => 344,
        'code' => 'EE-51',
        'name' => 'Järvamaa',
      ),
      5 => 
      array (
        'id' => 345,
        'code' => 'EE-57',
        'name' => 'Läänemaa',
      ),
      6 => 
      array (
        'id' => 346,
        'code' => 'EE-59',
        'name' => 'Lääne-Virumaa',
      ),
      7 => 
      array (
        'id' => 347,
        'code' => 'EE-65',
        'name' => 'Põlvamaa',
      ),
      8 => 
      array (
        'id' => 348,
        'code' => 'EE-67',
        'name' => 'Pärnumaa',
      ),
      9 => 
      array (
        'id' => 349,
        'code' => 'EE-70',
        'name' => 'Raplamaa',
      ),
      10 => 
      array (
        'id' => 350,
        'code' => 'EE-74',
        'name' => 'Saaremaa',
      ),
      11 => 
      array (
        'id' => 351,
        'code' => 'EE-78',
        'name' => 'Tartumaa',
      ),
      12 => 
      array (
        'id' => 352,
        'code' => 'EE-82',
        'name' => 'Valgamaa',
      ),
      13 => 
      array (
        'id' => 353,
        'code' => 'EE-84',
        'name' => 'Viljandimaa',
      ),
      14 => 
      array (
        'id' => 354,
        'code' => 'EE-86',
        'name' => 'Võrumaa',
      ),
    ),
  ),
  67 => 
  array (
    'code' => 'ET',
    'name' => 'Ethiopia',
    'regions' => 
    array (
    ),
  ),
  68 => 
  array (
    'code' => 'FK',
    'name' => 'Falkland Islands',
    'regions' => 
    array (
    ),
  ),
  69 => 
  array (
    'code' => 'FO',
    'name' => 'Faroe Islands',
    'regions' => 
    array (
    ),
  ),
  70 => 
  array (
    'code' => 'FJ',
    'name' => 'Fiji',
    'regions' => 
    array (
    ),
  ),
  71 => 
  array (
    'code' => 'FI',
    'name' => 'Finland',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 320,
        'code' => 'Lappi',
        'name' => 'Lappi',
      ),
      1 => 
      array (
        'id' => 321,
        'code' => 'Pohjois-Pohjanmaa',
        'name' => 'Pohjois-Pohjanmaa',
      ),
      2 => 
      array (
        'id' => 322,
        'code' => 'Kainuu',
        'name' => 'Kainuu',
      ),
      3 => 
      array (
        'id' => 323,
        'code' => 'Pohjois-Karjala',
        'name' => 'Pohjois-Karjala',
      ),
      4 => 
      array (
        'id' => 324,
        'code' => 'Pohjois-Savo',
        'name' => 'Pohjois-Savo',
      ),
      5 => 
      array (
        'id' => 325,
        'code' => 'Etelä-Savo',
        'name' => 'Etelä-Savo',
      ),
      6 => 
      array (
        'id' => 326,
        'code' => 'Etelä-Pohjanmaa',
        'name' => 'Etelä-Pohjanmaa',
      ),
      7 => 
      array (
        'id' => 327,
        'code' => 'Pohjanmaa',
        'name' => 'Pohjanmaa',
      ),
      8 => 
      array (
        'id' => 328,
        'code' => 'Pirkanmaa',
        'name' => 'Pirkanmaa',
      ),
      9 => 
      array (
        'id' => 329,
        'code' => 'Satakunta',
        'name' => 'Satakunta',
      ),
      10 => 
      array (
        'id' => 330,
        'code' => 'Keski-Pohjanmaa',
        'name' => 'Keski-Pohjanmaa',
      ),
      11 => 
      array (
        'id' => 331,
        'code' => 'Keski-Suomi',
        'name' => 'Keski-Suomi',
      ),
      12 => 
      array (
        'id' => 332,
        'code' => 'Varsinais-Suomi',
        'name' => 'Varsinais-Suomi',
      ),
      13 => 
      array (
        'id' => 333,
        'code' => 'Etelä-Karjala',
        'name' => 'Etelä-Karjala',
      ),
      14 => 
      array (
        'id' => 334,
        'code' => 'Päijät-Häme',
        'name' => 'Päijät-Häme',
      ),
      15 => 
      array (
        'id' => 335,
        'code' => 'Kanta-Häme',
        'name' => 'Kanta-Häme',
      ),
      16 => 
      array (
        'id' => 336,
        'code' => 'Uusimaa',
        'name' => 'Uusimaa',
      ),
      17 => 
      array (
        'id' => 337,
        'code' => 'Itä-Uusimaa',
        'name' => 'Itä-Uusimaa',
      ),
      18 => 
      array (
        'id' => 338,
        'code' => 'Kymenlaakso',
        'name' => 'Kymenlaakso',
      ),
      19 => 
      array (
        'id' => 339,
        'code' => 'Ahvenanmaa',
        'name' => 'Ahvenanmaa',
      ),
    ),
  ),
  72 => 
  array (
    'code' => 'FR',
    'name' => 'France',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 182,
        'code' => '1',
        'name' => 'Ain',
      ),
      1 => 
      array (
        'id' => 183,
        'code' => '2',
        'name' => 'Aisne',
      ),
      2 => 
      array (
        'id' => 184,
        'code' => '3',
        'name' => 'Allier',
      ),
      3 => 
      array (
        'id' => 185,
        'code' => '4',
        'name' => 'Alpes-de-Haute-Provence',
      ),
      4 => 
      array (
        'id' => 186,
        'code' => '5',
        'name' => 'Hautes-Alpes',
      ),
      5 => 
      array (
        'id' => 187,
        'code' => '6',
        'name' => 'Alpes-Maritimes',
      ),
      6 => 
      array (
        'id' => 188,
        'code' => '7',
        'name' => 'Ardèche',
      ),
      7 => 
      array (
        'id' => 189,
        'code' => '8',
        'name' => 'Ardennes',
      ),
      8 => 
      array (
        'id' => 190,
        'code' => '9',
        'name' => 'Ariège',
      ),
      9 => 
      array (
        'id' => 191,
        'code' => '10',
        'name' => 'Aube',
      ),
      10 => 
      array (
        'id' => 192,
        'code' => '11',
        'name' => 'Aude',
      ),
      11 => 
      array (
        'id' => 193,
        'code' => '12',
        'name' => 'Aveyron',
      ),
      12 => 
      array (
        'id' => 194,
        'code' => '13',
        'name' => 'Bouches-du-Rhône',
      ),
      13 => 
      array (
        'id' => 195,
        'code' => '14',
        'name' => 'Calvados',
      ),
      14 => 
      array (
        'id' => 196,
        'code' => '15',
        'name' => 'Cantal',
      ),
      15 => 
      array (
        'id' => 197,
        'code' => '16',
        'name' => 'Charente',
      ),
      16 => 
      array (
        'id' => 198,
        'code' => '17',
        'name' => 'Charente-Maritime',
      ),
      17 => 
      array (
        'id' => 199,
        'code' => '18',
        'name' => 'Cher',
      ),
      18 => 
      array (
        'id' => 200,
        'code' => '19',
        'name' => 'Corrèze',
      ),
      19 => 
      array (
        'id' => 201,
        'code' => '2A',
        'name' => 'Corse-du-Sud',
      ),
      20 => 
      array (
        'id' => 202,
        'code' => '2B',
        'name' => 'Haute-Corse',
      ),
      21 => 
      array (
        'id' => 203,
        'code' => '21',
        'name' => 'Côte-d\'Or',
      ),
      22 => 
      array (
        'id' => 204,
        'code' => '22',
        'name' => 'Côtes-d\'Armor',
      ),
      23 => 
      array (
        'id' => 205,
        'code' => '23',
        'name' => 'Creuse',
      ),
      24 => 
      array (
        'id' => 206,
        'code' => '24',
        'name' => 'Dordogne',
      ),
      25 => 
      array (
        'id' => 207,
        'code' => '25',
        'name' => 'Doubs',
      ),
      26 => 
      array (
        'id' => 208,
        'code' => '26',
        'name' => 'Drôme',
      ),
      27 => 
      array (
        'id' => 209,
        'code' => '27',
        'name' => 'Eure',
      ),
      28 => 
      array (
        'id' => 210,
        'code' => '28',
        'name' => 'Eure-et-Loir',
      ),
      29 => 
      array (
        'id' => 211,
        'code' => '29',
        'name' => 'Finistère',
      ),
      30 => 
      array (
        'id' => 212,
        'code' => '30',
        'name' => 'Gard',
      ),
      31 => 
      array (
        'id' => 213,
        'code' => '31',
        'name' => 'Haute-Garonne',
      ),
      32 => 
      array (
        'id' => 214,
        'code' => '32',
        'name' => 'Gers',
      ),
      33 => 
      array (
        'id' => 215,
        'code' => '33',
        'name' => 'Gironde',
      ),
      34 => 
      array (
        'id' => 216,
        'code' => '34',
        'name' => 'Hérault',
      ),
      35 => 
      array (
        'id' => 217,
        'code' => '35',
        'name' => 'Ille-et-Vilaine',
      ),
      36 => 
      array (
        'id' => 218,
        'code' => '36',
        'name' => 'Indre',
      ),
      37 => 
      array (
        'id' => 219,
        'code' => '37',
        'name' => 'Indre-et-Loire',
      ),
      38 => 
      array (
        'id' => 220,
        'code' => '38',
        'name' => 'Isère',
      ),
      39 => 
      array (
        'id' => 221,
        'code' => '39',
        'name' => 'Jura',
      ),
      40 => 
      array (
        'id' => 222,
        'code' => '40',
        'name' => 'Landes',
      ),
      41 => 
      array (
        'id' => 223,
        'code' => '41',
        'name' => 'Loir-et-Cher',
      ),
      42 => 
      array (
        'id' => 224,
        'code' => '42',
        'name' => 'Loire',
      ),
      43 => 
      array (
        'id' => 225,
        'code' => '43',
        'name' => 'Haute-Loire',
      ),
      44 => 
      array (
        'id' => 226,
        'code' => '44',
        'name' => 'Loire-Atlantique',
      ),
      45 => 
      array (
        'id' => 227,
        'code' => '45',
        'name' => 'Loiret',
      ),
      46 => 
      array (
        'id' => 228,
        'code' => '46',
        'name' => 'Lot',
      ),
      47 => 
      array (
        'id' => 229,
        'code' => '47',
        'name' => 'Lot-et-Garonne',
      ),
      48 => 
      array (
        'id' => 230,
        'code' => '48',
        'name' => 'Lozère',
      ),
      49 => 
      array (
        'id' => 231,
        'code' => '49',
        'name' => 'Maine-et-Loire',
      ),
      50 => 
      array (
        'id' => 232,
        'code' => '50',
        'name' => 'Manche',
      ),
      51 => 
      array (
        'id' => 233,
        'code' => '51',
        'name' => 'Marne',
      ),
      52 => 
      array (
        'id' => 234,
        'code' => '52',
        'name' => 'Haute-Marne',
      ),
      53 => 
      array (
        'id' => 235,
        'code' => '53',
        'name' => 'Mayenne',
      ),
      54 => 
      array (
        'id' => 236,
        'code' => '54',
        'name' => 'Meurthe-et-Moselle',
      ),
      55 => 
      array (
        'id' => 237,
        'code' => '55',
        'name' => 'Meuse',
      ),
      56 => 
      array (
        'id' => 238,
        'code' => '56',
        'name' => 'Morbihan',
      ),
      57 => 
      array (
        'id' => 239,
        'code' => '57',
        'name' => 'Moselle',
      ),
      58 => 
      array (
        'id' => 240,
        'code' => '58',
        'name' => 'Nièvre',
      ),
      59 => 
      array (
        'id' => 241,
        'code' => '59',
        'name' => 'Nord',
      ),
      60 => 
      array (
        'id' => 242,
        'code' => '60',
        'name' => 'Oise',
      ),
      61 => 
      array (
        'id' => 243,
        'code' => '61',
        'name' => 'Orne',
      ),
      62 => 
      array (
        'id' => 244,
        'code' => '62',
        'name' => 'Pas-de-Calais',
      ),
      63 => 
      array (
        'id' => 245,
        'code' => '63',
        'name' => 'Puy-de-Dôme',
      ),
      64 => 
      array (
        'id' => 246,
        'code' => '64',
        'name' => 'Pyrénées-Atlantiques',
      ),
      65 => 
      array (
        'id' => 247,
        'code' => '65',
        'name' => 'Hautes-Pyrénées',
      ),
      66 => 
      array (
        'id' => 248,
        'code' => '66',
        'name' => 'Pyrénées-Orientales',
      ),
      67 => 
      array (
        'id' => 249,
        'code' => '67',
        'name' => 'Bas-Rhin',
      ),
      68 => 
      array (
        'id' => 250,
        'code' => '68',
        'name' => 'Haut-Rhin',
      ),
      69 => 
      array (
        'id' => 251,
        'code' => '69',
        'name' => 'Rhône',
      ),
      70 => 
      array (
        'id' => 252,
        'code' => '70',
        'name' => 'Haute-Saône',
      ),
      71 => 
      array (
        'id' => 253,
        'code' => '71',
        'name' => 'Saône-et-Loire',
      ),
      72 => 
      array (
        'id' => 254,
        'code' => '72',
        'name' => 'Sarthe',
      ),
      73 => 
      array (
        'id' => 255,
        'code' => '73',
        'name' => 'Savoie',
      ),
      74 => 
      array (
        'id' => 256,
        'code' => '74',
        'name' => 'Haute-Savoie',
      ),
      75 => 
      array (
        'id' => 257,
        'code' => '75',
        'name' => 'Paris',
      ),
      76 => 
      array (
        'id' => 258,
        'code' => '76',
        'name' => 'Seine-Maritime',
      ),
      77 => 
      array (
        'id' => 259,
        'code' => '77',
        'name' => 'Seine-et-Marne',
      ),
      78 => 
      array (
        'id' => 260,
        'code' => '78',
        'name' => 'Yvelines',
      ),
      79 => 
      array (
        'id' => 261,
        'code' => '79',
        'name' => 'Deux-Sèvres',
      ),
      80 => 
      array (
        'id' => 262,
        'code' => '80',
        'name' => 'Somme',
      ),
      81 => 
      array (
        'id' => 263,
        'code' => '81',
        'name' => 'Tarn',
      ),
      82 => 
      array (
        'id' => 264,
        'code' => '82',
        'name' => 'Tarn-et-Garonne',
      ),
      83 => 
      array (
        'id' => 265,
        'code' => '83',
        'name' => 'Var',
      ),
      84 => 
      array (
        'id' => 266,
        'code' => '84',
        'name' => 'Vaucluse',
      ),
      85 => 
      array (
        'id' => 267,
        'code' => '85',
        'name' => 'Vendée',
      ),
      86 => 
      array (
        'id' => 268,
        'code' => '86',
        'name' => 'Vienne',
      ),
      87 => 
      array (
        'id' => 269,
        'code' => '87',
        'name' => 'Haute-Vienne',
      ),
      88 => 
      array (
        'id' => 270,
        'code' => '88',
        'name' => 'Vosges',
      ),
      89 => 
      array (
        'id' => 271,
        'code' => '89',
        'name' => 'Yonne',
      ),
      90 => 
      array (
        'id' => 272,
        'code' => '90',
        'name' => 'Territoire-de-Belfort',
      ),
      91 => 
      array (
        'id' => 273,
        'code' => '91',
        'name' => 'Essonne',
      ),
      92 => 
      array (
        'id' => 274,
        'code' => '92',
        'name' => 'Hauts-de-Seine',
      ),
      93 => 
      array (
        'id' => 275,
        'code' => '93',
        'name' => 'Seine-Saint-Denis',
      ),
      94 => 
      array (
        'id' => 276,
        'code' => '94',
        'name' => 'Val-de-Marne',
      ),
      95 => 
      array (
        'id' => 277,
        'code' => '95',
        'name' => 'Val-d\'Oise',
      ),
    ),
  ),
  73 => 
  array (
    'code' => 'GF',
    'name' => 'French Guiana',
    'regions' => 
    array (
    ),
  ),
  74 => 
  array (
    'code' => 'PF',
    'name' => 'French Polynesia',
    'regions' => 
    array (
    ),
  ),
  75 => 
  array (
    'code' => 'TF',
    'name' => 'French Southern Territories',
    'regions' => 
    array (
    ),
  ),
  76 => 
  array (
    'code' => 'GA',
    'name' => 'Gabon',
    'regions' => 
    array (
    ),
  ),
  77 => 
  array (
    'code' => 'GM',
    'name' => 'Gambia',
    'regions' => 
    array (
    ),
  ),
  78 => 
  array (
    'code' => 'GE',
    'name' => 'Georgia',
    'regions' => 
    array (
    ),
  ),
  79 => 
  array (
    'code' => 'DE',
    'name' => 'Germany',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 79,
        'code' => 'NDS',
        'name' => 'Niedersachsen',
      ),
      1 => 
      array (
        'id' => 80,
        'code' => 'BAW',
        'name' => 'Baden-Württemberg',
      ),
      2 => 
      array (
        'id' => 81,
        'code' => 'BAY',
        'name' => 'Bayern',
      ),
      3 => 
      array (
        'id' => 82,
        'code' => 'BER',
        'name' => 'Berlin',
      ),
      4 => 
      array (
        'id' => 83,
        'code' => 'BRG',
        'name' => 'Brandenburg',
      ),
      5 => 
      array (
        'id' => 84,
        'code' => 'BRE',
        'name' => 'Bremen',
      ),
      6 => 
      array (
        'id' => 85,
        'code' => 'HAM',
        'name' => 'Hamburg',
      ),
      7 => 
      array (
        'id' => 86,
        'code' => 'HES',
        'name' => 'Hessen',
      ),
      8 => 
      array (
        'id' => 87,
        'code' => 'MEC',
        'name' => 'Mecklenburg-Vorpommern',
      ),
      9 => 
      array (
        'id' => 88,
        'code' => 'NRW',
        'name' => 'Nordrhein-Westfalen',
      ),
      10 => 
      array (
        'id' => 89,
        'code' => 'RHE',
        'name' => 'Rheinland-Pfalz',
      ),
      11 => 
      array (
        'id' => 90,
        'code' => 'SAR',
        'name' => 'Saarland',
      ),
      12 => 
      array (
        'id' => 91,
        'code' => 'SAS',
        'name' => 'Sachsen',
      ),
      13 => 
      array (
        'id' => 92,
        'code' => 'SAC',
        'name' => 'Sachsen-Anhalt',
      ),
      14 => 
      array (
        'id' => 93,
        'code' => 'SCN',
        'name' => 'Schleswig-Holstein',
      ),
      15 => 
      array (
        'id' => 94,
        'code' => 'THE',
        'name' => 'Thüringen',
      ),
    ),
  ),
  80 => 
  array (
    'code' => 'GH',
    'name' => 'Ghana',
    'regions' => 
    array (
    ),
  ),
  81 => 
  array (
    'code' => 'GI',
    'name' => 'Gibraltar',
    'regions' => 
    array (
    ),
  ),
  82 => 
  array (
    'code' => 'GR',
    'name' => 'Greece',
    'regions' => 
    array (
    ),
  ),
  83 => 
  array (
    'code' => 'GL',
    'name' => 'Greenland',
    'regions' => 
    array (
    ),
  ),
  84 => 
  array (
    'code' => 'GD',
    'name' => 'Grenada',
    'regions' => 
    array (
    ),
  ),
  85 => 
  array (
    'code' => 'GP',
    'name' => 'Guadeloupe',
    'regions' => 
    array (
    ),
  ),
  86 => 
  array (
    'code' => 'GU',
    'name' => 'Guam',
    'regions' => 
    array (
    ),
  ),
  87 => 
  array (
    'code' => 'GT',
    'name' => 'Guatemala',
    'regions' => 
    array (
    ),
  ),
  88 => 
  array (
    'code' => 'GN',
    'name' => 'Guinea',
    'regions' => 
    array (
    ),
  ),
  89 => 
  array (
    'code' => 'GW',
    'name' => 'Guinea-Bissau',
    'regions' => 
    array (
    ),
  ),
  90 => 
  array (
    'code' => 'GY',
    'name' => 'Guyana',
    'regions' => 
    array (
    ),
  ),
  91 => 
  array (
    'code' => 'HT',
    'name' => 'Haiti',
    'regions' => 
    array (
    ),
  ),
  92 => 
  array (
    'code' => 'HM',
    'name' => 'Heard & McDonald Islands',
    'regions' => 
    array (
    ),
  ),
  93 => 
  array (
    'code' => 'VA',
    'name' => 'Vatican City',
    'regions' => 
    array (
    ),
  ),
  94 => 
  array (
    'code' => 'HN',
    'name' => 'Honduras',
    'regions' => 
    array (
    ),
  ),
  95 => 
  array (
    'code' => 'HK',
    'name' => 'Hong Kong SAR China',
    'regions' => 
    array (
    ),
  ),
  96 => 
  array (
    'code' => 'HU',
    'name' => 'Hungary',
    'regions' => 
    array (
    ),
  ),
  97 => 
  array (
    'code' => 'IS',
    'name' => 'Iceland',
    'regions' => 
    array (
    ),
  ),
  98 => 
  array (
    'code' => 'IN',
    'name' => 'India',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 533,
        'code' => 'AN',
        'name' => 'Andaman and Nicobar Islands',
      ),
      1 => 
      array (
        'id' => 534,
        'code' => 'AP',
        'name' => 'Andhra Pradesh',
      ),
      2 => 
      array (
        'id' => 535,
        'code' => 'AR',
        'name' => 'Arunachal Pradesh',
      ),
      3 => 
      array (
        'id' => 536,
        'code' => 'AS',
        'name' => 'Assam',
      ),
      4 => 
      array (
        'id' => 537,
        'code' => 'BR',
        'name' => 'Bihar',
      ),
      5 => 
      array (
        'id' => 538,
        'code' => 'CH',
        'name' => 'Chandigarh',
      ),
      6 => 
      array (
        'id' => 539,
        'code' => 'CT',
        'name' => 'Chhattisgarh',
      ),
      7 => 
      array (
        'id' => 540,
        'code' => 'DN',
        'name' => 'Dadra and Nagar Haveli',
      ),
      8 => 
      array (
        'id' => 541,
        'code' => 'DD',
        'name' => 'Daman and Diu',
      ),
      9 => 
      array (
        'id' => 542,
        'code' => 'DL',
        'name' => 'Delhi',
      ),
      10 => 
      array (
        'id' => 543,
        'code' => 'GA',
        'name' => 'Goa',
      ),
      11 => 
      array (
        'id' => 544,
        'code' => 'GJ',
        'name' => 'Gujarat',
      ),
      12 => 
      array (
        'id' => 545,
        'code' => 'HR',
        'name' => 'Haryana',
      ),
      13 => 
      array (
        'id' => 546,
        'code' => 'HP',
        'name' => 'Himachal Pradesh',
      ),
      14 => 
      array (
        'id' => 547,
        'code' => 'JK',
        'name' => 'Jammu and Kashmir',
      ),
      15 => 
      array (
        'id' => 548,
        'code' => 'JH',
        'name' => 'Jharkhand',
      ),
      16 => 
      array (
        'id' => 549,
        'code' => 'KA',
        'name' => 'Karnataka',
      ),
      17 => 
      array (
        'id' => 550,
        'code' => 'KL',
        'name' => 'Kerala',
      ),
      18 => 
      array (
        'id' => 551,
        'code' => 'LD',
        'name' => 'Lakshadweep',
      ),
      19 => 
      array (
        'id' => 552,
        'code' => 'MP',
        'name' => 'Madhya Pradesh',
      ),
      20 => 
      array (
        'id' => 553,
        'code' => 'MH',
        'name' => 'Maharashtra',
      ),
      21 => 
      array (
        'id' => 554,
        'code' => 'MN',
        'name' => 'Manipur',
      ),
      22 => 
      array (
        'id' => 555,
        'code' => 'ML',
        'name' => 'Meghalaya',
      ),
      23 => 
      array (
        'id' => 556,
        'code' => 'MZ',
        'name' => 'Mizoram',
      ),
      24 => 
      array (
        'id' => 557,
        'code' => 'NL',
        'name' => 'Nagaland',
      ),
      25 => 
      array (
        'id' => 558,
        'code' => 'OR',
        'name' => 'Odisha',
      ),
      26 => 
      array (
        'id' => 559,
        'code' => 'PY',
        'name' => 'Puducherry',
      ),
      27 => 
      array (
        'id' => 560,
        'code' => 'PB',
        'name' => 'Punjab',
      ),
      28 => 
      array (
        'id' => 561,
        'code' => 'RJ',
        'name' => 'Rajasthan',
      ),
      29 => 
      array (
        'id' => 562,
        'code' => 'SK',
        'name' => 'Sikkim',
      ),
      30 => 
      array (
        'id' => 563,
        'code' => 'TN',
        'name' => 'Tamil Nadu',
      ),
      31 => 
      array (
        'id' => 564,
        'code' => 'TG',
        'name' => 'Telangana',
      ),
      32 => 
      array (
        'id' => 565,
        'code' => 'TR',
        'name' => 'Tripura',
      ),
      33 => 
      array (
        'id' => 566,
        'code' => 'UP',
        'name' => 'Uttar Pradesh',
      ),
      34 => 
      array (
        'id' => 567,
        'code' => 'UT',
        'name' => 'Uttarakhand',
      ),
      35 => 
      array (
        'id' => 568,
        'code' => 'WB',
        'name' => 'West Bengal',
      ),
    ),
  ),
  99 => 
  array (
    'code' => 'ID',
    'name' => 'Indonesia',
    'regions' => 
    array (
    ),
  ),
  100 => 
  array (
    'code' => 'IR',
    'name' => 'Iran',
    'regions' => 
    array (
    ),
  ),
  101 => 
  array (
    'code' => 'IQ',
    'name' => 'Iraq',
    'regions' => 
    array (
    ),
  ),
  102 => 
  array (
    'code' => 'IE',
    'name' => 'Ireland',
    'regions' => 
    array (
    ),
  ),
  103 => 
  array (
    'code' => 'IL',
    'name' => 'Israel',
    'regions' => 
    array (
    ),
  ),
  104 => 
  array (
    'code' => 'IT',
    'name' => 'Italy',
    'regions' => 
    array (
    ),
  ),
  105 => 
  array (
    'code' => 'JM',
    'name' => 'Jamaica',
    'regions' => 
    array (
    ),
  ),
  106 => 
  array (
    'code' => 'JP',
    'name' => 'Japan',
    'regions' => 
    array (
    ),
  ),
  107 => 
  array (
    'code' => 'JO',
    'name' => 'Jordan',
    'regions' => 
    array (
    ),
  ),
  108 => 
  array (
    'code' => 'KZ',
    'name' => 'Kazakhstan',
    'regions' => 
    array (
    ),
  ),
  109 => 
  array (
    'code' => 'KE',
    'name' => 'Kenya',
    'regions' => 
    array (
    ),
  ),
  110 => 
  array (
    'code' => 'KI',
    'name' => 'Kiribati',
    'regions' => 
    array (
    ),
  ),
  111 => 
  array (
    'code' => 'KP',
    'name' => 'North Korea',
    'regions' => 
    array (
    ),
  ),
  112 => 
  array (
    'code' => 'KR',
    'name' => 'South Korea',
    'regions' => 
    array (
    ),
  ),
  113 => 
  array (
    'code' => 'KW',
    'name' => 'Kuwait',
    'regions' => 
    array (
    ),
  ),
  114 => 
  array (
    'code' => 'KG',
    'name' => 'Kyrgyzstan',
    'regions' => 
    array (
    ),
  ),
  115 => 
  array (
    'code' => 'LA',
    'name' => 'Laos',
    'regions' => 
    array (
    ),
  ),
  116 => 
  array (
    'code' => 'LV',
    'name' => 'Latvia',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 355,
        'code' => 'LV-DGV',
        'name' => 'Daugavpils',
      ),
      1 => 
      array (
        'id' => 356,
        'code' => 'LV-JEL',
        'name' => 'Jelgava',
      ),
      2 => 
      array (
        'id' => 357,
        'code' => 'Jēkabpils',
        'name' => 'Jēkabpils',
      ),
      3 => 
      array (
        'id' => 358,
        'code' => 'LV-JUR',
        'name' => 'Jūrmala',
      ),
      4 => 
      array (
        'id' => 359,
        'code' => 'LV-LPX',
        'name' => 'Liepāja',
      ),
      5 => 
      array (
        'id' => 360,
        'code' => 'LV-LE',
        'name' => 'Liepājas novads',
      ),
      6 => 
      array (
        'id' => 361,
        'code' => 'LV-REZ',
        'name' => 'Rēzekne',
      ),
      7 => 
      array (
        'id' => 362,
        'code' => 'LV-RIX',
        'name' => 'Rīga',
      ),
      8 => 
      array (
        'id' => 363,
        'code' => 'LV-RI',
        'name' => 'Rīgas novads',
      ),
      9 => 
      array (
        'id' => 364,
        'code' => 'Valmiera',
        'name' => 'Valmiera',
      ),
      10 => 
      array (
        'id' => 365,
        'code' => 'LV-VEN',
        'name' => 'Ventspils',
      ),
      11 => 
      array (
        'id' => 366,
        'code' => 'Aglonas novads',
        'name' => 'Aglonas novads',
      ),
      12 => 
      array (
        'id' => 367,
        'code' => 'LV-AI',
        'name' => 'Aizkraukles novads',
      ),
      13 => 
      array (
        'id' => 368,
        'code' => 'Aizputes novads',
        'name' => 'Aizputes novads',
      ),
      14 => 
      array (
        'id' => 369,
        'code' => 'Aknīstes novads',
        'name' => 'Aknīstes novads',
      ),
      15 => 
      array (
        'id' => 370,
        'code' => 'Alojas novads',
        'name' => 'Alojas novads',
      ),
      16 => 
      array (
        'id' => 371,
        'code' => 'Alsungas novads',
        'name' => 'Alsungas novads',
      ),
      17 => 
      array (
        'id' => 372,
        'code' => 'LV-AL',
        'name' => 'Alūksnes novads',
      ),
      18 => 
      array (
        'id' => 373,
        'code' => 'Amatas novads',
        'name' => 'Amatas novads',
      ),
      19 => 
      array (
        'id' => 374,
        'code' => 'Apes novads',
        'name' => 'Apes novads',
      ),
      20 => 
      array (
        'id' => 375,
        'code' => 'Auces novads',
        'name' => 'Auces novads',
      ),
      21 => 
      array (
        'id' => 376,
        'code' => 'Babītes novads',
        'name' => 'Babītes novads',
      ),
      22 => 
      array (
        'id' => 377,
        'code' => 'Baldones novads',
        'name' => 'Baldones novads',
      ),
      23 => 
      array (
        'id' => 378,
        'code' => 'Baltinavas novads',
        'name' => 'Baltinavas novads',
      ),
      24 => 
      array (
        'id' => 379,
        'code' => 'LV-BL',
        'name' => 'Balvu novads',
      ),
      25 => 
      array (
        'id' => 380,
        'code' => 'LV-BU',
        'name' => 'Bauskas novads',
      ),
      26 => 
      array (
        'id' => 381,
        'code' => 'Beverīnas novads',
        'name' => 'Beverīnas novads',
      ),
      27 => 
      array (
        'id' => 382,
        'code' => 'Brocēnu novads',
        'name' => 'Brocēnu novads',
      ),
      28 => 
      array (
        'id' => 383,
        'code' => 'Burtnieku novads',
        'name' => 'Burtnieku novads',
      ),
      29 => 
      array (
        'id' => 384,
        'code' => 'Carnikavas novads',
        'name' => 'Carnikavas novads',
      ),
      30 => 
      array (
        'id' => 385,
        'code' => 'Cesvaines novads',
        'name' => 'Cesvaines novads',
      ),
      31 => 
      array (
        'id' => 386,
        'code' => 'Ciblas novads',
        'name' => 'Ciblas novads',
      ),
      32 => 
      array (
        'id' => 387,
        'code' => 'LV-CE',
        'name' => 'Cēsu novads',
      ),
      33 => 
      array (
        'id' => 388,
        'code' => 'Dagdas novads',
        'name' => 'Dagdas novads',
      ),
      34 => 
      array (
        'id' => 389,
        'code' => 'LV-DA',
        'name' => 'Daugavpils novads',
      ),
      35 => 
      array (
        'id' => 390,
        'code' => 'LV-DO',
        'name' => 'Dobeles novads',
      ),
      36 => 
      array (
        'id' => 391,
        'code' => 'Dundagas novads',
        'name' => 'Dundagas novads',
      ),
      37 => 
      array (
        'id' => 392,
        'code' => 'Durbes novads',
        'name' => 'Durbes novads',
      ),
      38 => 
      array (
        'id' => 393,
        'code' => 'Engures novads',
        'name' => 'Engures novads',
      ),
      39 => 
      array (
        'id' => 394,
        'code' => 'Garkalnes novads',
        'name' => 'Garkalnes novads',
      ),
      40 => 
      array (
        'id' => 395,
        'code' => 'Grobiņas novads',
        'name' => 'Grobiņas novads',
      ),
      41 => 
      array (
        'id' => 396,
        'code' => 'LV-GU',
        'name' => 'Gulbenes novads',
      ),
      42 => 
      array (
        'id' => 397,
        'code' => 'Iecavas novads',
        'name' => 'Iecavas novads',
      ),
      43 => 
      array (
        'id' => 398,
        'code' => 'Ikšķiles novads',
        'name' => 'Ikšķiles novads',
      ),
      44 => 
      array (
        'id' => 399,
        'code' => 'Ilūkstes novads',
        'name' => 'Ilūkstes novads',
      ),
      45 => 
      array (
        'id' => 400,
        'code' => 'Inčukalna novads',
        'name' => 'Inčukalna novads',
      ),
      46 => 
      array (
        'id' => 401,
        'code' => 'Jaunjelgavas novads',
        'name' => 'Jaunjelgavas novads',
      ),
      47 => 
      array (
        'id' => 402,
        'code' => 'Jaunpiebalgas novads',
        'name' => 'Jaunpiebalgas novads',
      ),
      48 => 
      array (
        'id' => 403,
        'code' => 'Jaunpils novads',
        'name' => 'Jaunpils novads',
      ),
      49 => 
      array (
        'id' => 404,
        'code' => 'LV-JL',
        'name' => 'Jelgavas novads',
      ),
      50 => 
      array (
        'id' => 405,
        'code' => 'LV-JK',
        'name' => 'Jēkabpils novads',
      ),
      51 => 
      array (
        'id' => 406,
        'code' => 'Kandavas novads',
        'name' => 'Kandavas novads',
      ),
      52 => 
      array (
        'id' => 407,
        'code' => 'Kokneses novads',
        'name' => 'Kokneses novads',
      ),
      53 => 
      array (
        'id' => 408,
        'code' => 'Krimuldas novads',
        'name' => 'Krimuldas novads',
      ),
      54 => 
      array (
        'id' => 409,
        'code' => 'Krustpils novads',
        'name' => 'Krustpils novads',
      ),
      55 => 
      array (
        'id' => 410,
        'code' => 'LV-KR',
        'name' => 'Krāslavas novads',
      ),
      56 => 
      array (
        'id' => 411,
        'code' => 'LV-KU',
        'name' => 'Kuldīgas novads',
      ),
      57 => 
      array (
        'id' => 412,
        'code' => 'Kārsavas novads',
        'name' => 'Kārsavas novads',
      ),
      58 => 
      array (
        'id' => 413,
        'code' => 'Lielvārdes novads',
        'name' => 'Lielvārdes novads',
      ),
      59 => 
      array (
        'id' => 414,
        'code' => 'LV-LM',
        'name' => 'Limbažu novads',
      ),
      60 => 
      array (
        'id' => 415,
        'code' => 'Lubānas novads',
        'name' => 'Lubānas novads',
      ),
      61 => 
      array (
        'id' => 416,
        'code' => 'LV-LU',
        'name' => 'Ludzas novads',
      ),
      62 => 
      array (
        'id' => 417,
        'code' => 'Līgatnes novads',
        'name' => 'Līgatnes novads',
      ),
      63 => 
      array (
        'id' => 418,
        'code' => 'Līvānu novads',
        'name' => 'Līvānu novads',
      ),
      64 => 
      array (
        'id' => 419,
        'code' => 'LV-MA',
        'name' => 'Madonas novads',
      ),
      65 => 
      array (
        'id' => 420,
        'code' => 'Mazsalacas novads',
        'name' => 'Mazsalacas novads',
      ),
      66 => 
      array (
        'id' => 421,
        'code' => 'Mālpils novads',
        'name' => 'Mālpils novads',
      ),
      67 => 
      array (
        'id' => 422,
        'code' => 'Mārupes novads',
        'name' => 'Mārupes novads',
      ),
      68 => 
      array (
        'id' => 423,
        'code' => 'Naukšēnu novads',
        'name' => 'Naukšēnu novads',
      ),
      69 => 
      array (
        'id' => 424,
        'code' => 'Neretas novads',
        'name' => 'Neretas novads',
      ),
      70 => 
      array (
        'id' => 425,
        'code' => 'Nīcas novads',
        'name' => 'Nīcas novads',
      ),
      71 => 
      array (
        'id' => 426,
        'code' => 'LV-OG',
        'name' => 'Ogres novads',
      ),
      72 => 
      array (
        'id' => 427,
        'code' => 'Olaines novads',
        'name' => 'Olaines novads',
      ),
      73 => 
      array (
        'id' => 428,
        'code' => 'Ozolnieku novads',
        'name' => 'Ozolnieku novads',
      ),
      74 => 
      array (
        'id' => 429,
        'code' => 'LV-PR',
        'name' => 'Preiļu novads',
      ),
      75 => 
      array (
        'id' => 430,
        'code' => 'Priekules novads',
        'name' => 'Priekules novads',
      ),
      76 => 
      array (
        'id' => 431,
        'code' => 'Priekuļu novads',
        'name' => 'Priekuļu novads',
      ),
      77 => 
      array (
        'id' => 432,
        'code' => 'Pārgaujas novads',
        'name' => 'Pārgaujas novads',
      ),
      78 => 
      array (
        'id' => 433,
        'code' => 'Pāvilostas novads',
        'name' => 'Pāvilostas novads',
      ),
      79 => 
      array (
        'id' => 434,
        'code' => 'Pļaviņu novads',
        'name' => 'Pļaviņu novads',
      ),
      80 => 
      array (
        'id' => 435,
        'code' => 'Raunas novads',
        'name' => 'Raunas novads',
      ),
      81 => 
      array (
        'id' => 436,
        'code' => 'Riebiņu novads',
        'name' => 'Riebiņu novads',
      ),
      82 => 
      array (
        'id' => 437,
        'code' => 'Rojas novads',
        'name' => 'Rojas novads',
      ),
      83 => 
      array (
        'id' => 438,
        'code' => 'Ropažu novads',
        'name' => 'Ropažu novads',
      ),
      84 => 
      array (
        'id' => 439,
        'code' => 'Rucavas novads',
        'name' => 'Rucavas novads',
      ),
      85 => 
      array (
        'id' => 440,
        'code' => 'Rugāju novads',
        'name' => 'Rugāju novads',
      ),
      86 => 
      array (
        'id' => 441,
        'code' => 'Rundāles novads',
        'name' => 'Rundāles novads',
      ),
      87 => 
      array (
        'id' => 442,
        'code' => 'LV-RE',
        'name' => 'Rēzeknes novads',
      ),
      88 => 
      array (
        'id' => 443,
        'code' => 'Rūjienas novads',
        'name' => 'Rūjienas novads',
      ),
      89 => 
      array (
        'id' => 444,
        'code' => 'Salacgrīvas novads',
        'name' => 'Salacgrīvas novads',
      ),
      90 => 
      array (
        'id' => 445,
        'code' => 'Salas novads',
        'name' => 'Salas novads',
      ),
      91 => 
      array (
        'id' => 446,
        'code' => 'Salaspils novads',
        'name' => 'Salaspils novads',
      ),
      92 => 
      array (
        'id' => 447,
        'code' => 'LV-SA',
        'name' => 'Saldus novads',
      ),
      93 => 
      array (
        'id' => 448,
        'code' => 'Saulkrastu novads',
        'name' => 'Saulkrastu novads',
      ),
      94 => 
      array (
        'id' => 449,
        'code' => 'Siguldas novads',
        'name' => 'Siguldas novads',
      ),
      95 => 
      array (
        'id' => 450,
        'code' => 'Skrundas novads',
        'name' => 'Skrundas novads',
      ),
      96 => 
      array (
        'id' => 451,
        'code' => 'Skrīveru novads',
        'name' => 'Skrīveru novads',
      ),
      97 => 
      array (
        'id' => 452,
        'code' => 'Smiltenes novads',
        'name' => 'Smiltenes novads',
      ),
      98 => 
      array (
        'id' => 453,
        'code' => 'Stopiņu novads',
        'name' => 'Stopiņu novads',
      ),
      99 => 
      array (
        'id' => 454,
        'code' => 'Strenču novads',
        'name' => 'Strenču novads',
      ),
      100 => 
      array (
        'id' => 455,
        'code' => 'Sējas novads',
        'name' => 'Sējas novads',
      ),
      101 => 
      array (
        'id' => 456,
        'code' => 'LV-TA',
        'name' => 'Talsu novads',
      ),
      102 => 
      array (
        'id' => 457,
        'code' => 'LV-TU',
        'name' => 'Tukuma novads',
      ),
      103 => 
      array (
        'id' => 458,
        'code' => 'Tērvetes novads',
        'name' => 'Tērvetes novads',
      ),
      104 => 
      array (
        'id' => 459,
        'code' => 'Vaiņodes novads',
        'name' => 'Vaiņodes novads',
      ),
      105 => 
      array (
        'id' => 460,
        'code' => 'LV-VK',
        'name' => 'Valkas novads',
      ),
      106 => 
      array (
        'id' => 461,
        'code' => 'LV-VM',
        'name' => 'Valmieras novads',
      ),
      107 => 
      array (
        'id' => 462,
        'code' => 'Varakļānu novads',
        'name' => 'Varakļānu novads',
      ),
      108 => 
      array (
        'id' => 463,
        'code' => 'Vecpiebalgas novads',
        'name' => 'Vecpiebalgas novads',
      ),
      109 => 
      array (
        'id' => 464,
        'code' => 'Vecumnieku novads',
        'name' => 'Vecumnieku novads',
      ),
      110 => 
      array (
        'id' => 465,
        'code' => 'LV-VE',
        'name' => 'Ventspils novads',
      ),
      111 => 
      array (
        'id' => 466,
        'code' => 'Viesītes novads',
        'name' => 'Viesītes novads',
      ),
      112 => 
      array (
        'id' => 467,
        'code' => 'Viļakas novads',
        'name' => 'Viļakas novads',
      ),
      113 => 
      array (
        'id' => 468,
        'code' => 'Viļānu novads',
        'name' => 'Viļānu novads',
      ),
      114 => 
      array (
        'id' => 469,
        'code' => 'Vārkavas novads',
        'name' => 'Vārkavas novads',
      ),
      115 => 
      array (
        'id' => 470,
        'code' => 'Zilupes novads',
        'name' => 'Zilupes novads',
      ),
      116 => 
      array (
        'id' => 471,
        'code' => 'Ādažu novads',
        'name' => 'Ādažu novads',
      ),
      117 => 
      array (
        'id' => 472,
        'code' => 'Ērgļu novads',
        'name' => 'Ērgļu novads',
      ),
      118 => 
      array (
        'id' => 473,
        'code' => 'Ķeguma novads',
        'name' => 'Ķeguma novads',
      ),
      119 => 
      array (
        'id' => 474,
        'code' => 'Ķekavas novads',
        'name' => 'Ķekavas novads',
      ),
    ),
  ),
  117 => 
  array (
    'code' => 'LB',
    'name' => 'Lebanon',
    'regions' => 
    array (
    ),
  ),
  118 => 
  array (
    'code' => 'LS',
    'name' => 'Lesotho',
    'regions' => 
    array (
    ),
  ),
  119 => 
  array (
    'code' => 'LR',
    'name' => 'Liberia',
    'regions' => 
    array (
    ),
  ),
  120 => 
  array (
    'code' => 'LY',
    'name' => 'Libya',
    'regions' => 
    array (
    ),
  ),
  121 => 
  array (
    'code' => 'LI',
    'name' => 'Liechtenstein',
    'regions' => 
    array (
    ),
  ),
  122 => 
  array (
    'code' => 'LT',
    'name' => 'Lithuania',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 475,
        'code' => 'LT-AL',
        'name' => 'Alytaus Apskritis',
      ),
      1 => 
      array (
        'id' => 476,
        'code' => 'LT-KU',
        'name' => 'Kauno Apskritis',
      ),
      2 => 
      array (
        'id' => 477,
        'code' => 'LT-KL',
        'name' => 'Klaipėdos Apskritis',
      ),
      3 => 
      array (
        'id' => 478,
        'code' => 'LT-MR',
        'name' => 'Marijampolės Apskritis',
      ),
      4 => 
      array (
        'id' => 479,
        'code' => 'LT-PN',
        'name' => 'Panevėžio Apskritis',
      ),
      5 => 
      array (
        'id' => 480,
        'code' => 'LT-SA',
        'name' => 'Šiaulių Apskritis',
      ),
      6 => 
      array (
        'id' => 481,
        'code' => 'LT-TA',
        'name' => 'Tauragės Apskritis',
      ),
      7 => 
      array (
        'id' => 482,
        'code' => 'LT-TE',
        'name' => 'Telšių Apskritis',
      ),
      8 => 
      array (
        'id' => 483,
        'code' => 'LT-UT',
        'name' => 'Utenos Apskritis',
      ),
      9 => 
      array (
        'id' => 484,
        'code' => 'LT-VL',
        'name' => 'Vilniaus Apskritis',
      ),
    ),
  ),
  123 => 
  array (
    'code' => 'LU',
    'name' => 'Luxembourg',
    'regions' => 
    array (
    ),
  ),
  124 => 
  array (
    'code' => 'MO',
    'name' => 'Macau SAR China',
    'regions' => 
    array (
    ),
  ),
  125 => 
  array (
    'code' => 'MK',
    'name' => 'Macedonia',
    'regions' => 
    array (
    ),
  ),
  126 => 
  array (
    'code' => 'MG',
    'name' => 'Madagascar',
    'regions' => 
    array (
    ),
  ),
  127 => 
  array (
    'code' => 'MW',
    'name' => 'Malawi',
    'regions' => 
    array (
    ),
  ),
  128 => 
  array (
    'code' => 'MY',
    'name' => 'Malaysia',
    'regions' => 
    array (
    ),
  ),
  129 => 
  array (
    'code' => 'MV',
    'name' => 'Maldives',
    'regions' => 
    array (
    ),
  ),
  130 => 
  array (
    'code' => 'ML',
    'name' => 'Mali',
    'regions' => 
    array (
    ),
  ),
  131 => 
  array (
    'code' => 'MT',
    'name' => 'Malta',
    'regions' => 
    array (
    ),
  ),
  132 => 
  array (
    'code' => 'MH',
    'name' => 'Marshall Islands',
    'regions' => 
    array (
    ),
  ),
  133 => 
  array (
    'code' => 'MQ',
    'name' => 'Martinique',
    'regions' => 
    array (
    ),
  ),
  134 => 
  array (
    'code' => 'MR',
    'name' => 'Mauritania',
    'regions' => 
    array (
    ),
  ),
  135 => 
  array (
    'code' => 'MU',
    'name' => 'Mauritius',
    'regions' => 
    array (
    ),
  ),
  136 => 
  array (
    'code' => 'YT',
    'name' => 'Mayotte',
    'regions' => 
    array (
    ),
  ),
  137 => 
  array (
    'code' => 'MX',
    'name' => 'Mexico',
    'regions' => 
    array (
    ),
  ),
  138 => 
  array (
    'code' => 'FM',
    'name' => 'Micronesia',
    'regions' => 
    array (
    ),
  ),
  139 => 
  array (
    'code' => 'MD',
    'name' => 'Moldova',
    'regions' => 
    array (
    ),
  ),
  140 => 
  array (
    'code' => 'MC',
    'name' => 'Monaco',
    'regions' => 
    array (
    ),
  ),
  141 => 
  array (
    'code' => 'MN',
    'name' => 'Mongolia',
    'regions' => 
    array (
    ),
  ),
  142 => 
  array (
    'code' => 'MS',
    'name' => 'Montserrat',
    'regions' => 
    array (
    ),
  ),
  143 => 
  array (
    'code' => 'ME',
    'name' => 'Montenegro',
    'regions' => 
    array (
    ),
  ),
  144 => 
  array (
    'code' => 'MA',
    'name' => 'Morocco',
    'regions' => 
    array (
    ),
  ),
  145 => 
  array (
    'code' => 'MZ',
    'name' => 'Mozambique',
    'regions' => 
    array (
    ),
  ),
  146 => 
  array (
    'code' => 'MM',
    'name' => 'Myanmar (Burma)',
    'regions' => 
    array (
    ),
  ),
  147 => 
  array (
    'code' => 'NA',
    'name' => 'Namibia',
    'regions' => 
    array (
    ),
  ),
  148 => 
  array (
    'code' => 'NR',
    'name' => 'Nauru',
    'regions' => 
    array (
    ),
  ),
  149 => 
  array (
    'code' => 'NP',
    'name' => 'Nepal',
    'regions' => 
    array (
    ),
  ),
  150 => 
  array (
    'code' => 'NL',
    'name' => 'Netherlands',
    'regions' => 
    array (
    ),
  ),
  151 => 
  array (
    'code' => 'AN',
    'name' => 'Netherlands Antilles',
    'regions' => 
    array (
    ),
  ),
  152 => 
  array (
    'code' => 'NC',
    'name' => 'New Caledonia',
    'regions' => 
    array (
    ),
  ),
  153 => 
  array (
    'code' => 'NZ',
    'name' => 'New Zealand',
    'regions' => 
    array (
    ),
  ),
  154 => 
  array (
    'code' => 'NI',
    'name' => 'Nicaragua',
    'regions' => 
    array (
    ),
  ),
  155 => 
  array (
    'code' => 'NE',
    'name' => 'Niger',
    'regions' => 
    array (
    ),
  ),
  156 => 
  array (
    'code' => 'NG',
    'name' => 'Nigeria',
    'regions' => 
    array (
    ),
  ),
  157 => 
  array (
    'code' => 'NU',
    'name' => 'Niue',
    'regions' => 
    array (
    ),
  ),
  158 => 
  array (
    'code' => 'NF',
    'name' => 'Norfolk Island',
    'regions' => 
    array (
    ),
  ),
  159 => 
  array (
    'code' => 'MP',
    'name' => 'Northern Mariana Islands',
    'regions' => 
    array (
    ),
  ),
  160 => 
  array (
    'code' => 'NO',
    'name' => 'Norway',
    'regions' => 
    array (
    ),
  ),
  161 => 
  array (
    'code' => 'OM',
    'name' => 'Oman',
    'regions' => 
    array (
    ),
  ),
  162 => 
  array (
    'code' => 'PK',
    'name' => 'Pakistan',
    'regions' => 
    array (
    ),
  ),
  163 => 
  array (
    'code' => 'PW',
    'name' => 'Palau',
    'regions' => 
    array (
    ),
  ),
  164 => 
  array (
    'code' => 'PS',
    'name' => 'Palestinian Territories',
    'regions' => 
    array (
    ),
  ),
  165 => 
  array (
    'code' => 'PA',
    'name' => 'Panama',
    'regions' => 
    array (
    ),
  ),
  166 => 
  array (
    'code' => 'PG',
    'name' => 'Papua New Guinea',
    'regions' => 
    array (
    ),
  ),
  167 => 
  array (
    'code' => 'PY',
    'name' => 'Paraguay',
    'regions' => 
    array (
    ),
  ),
  168 => 
  array (
    'code' => 'PE',
    'name' => 'Peru',
    'regions' => 
    array (
    ),
  ),
  169 => 
  array (
    'code' => 'PH',
    'name' => 'Philippines',
    'regions' => 
    array (
    ),
  ),
  170 => 
  array (
    'code' => 'PN',
    'name' => 'Pitcairn Islands',
    'regions' => 
    array (
    ),
  ),
  171 => 
  array (
    'code' => 'PL',
    'name' => 'Poland',
    'regions' => 
    array (
    ),
  ),
  172 => 
  array (
    'code' => 'PT',
    'name' => 'Portugal',
    'regions' => 
    array (
    ),
  ),
  173 => 
  array (
    'code' => 'QA',
    'name' => 'Qatar',
    'regions' => 
    array (
    ),
  ),
  174 => 
  array (
    'code' => 'RE',
    'name' => 'Réunion',
    'regions' => 
    array (
    ),
  ),
  175 => 
  array (
    'code' => 'RO',
    'name' => 'Romania',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 278,
        'code' => 'AB',
        'name' => 'Alba',
      ),
      1 => 
      array (
        'id' => 279,
        'code' => 'AR',
        'name' => 'Arad',
      ),
      2 => 
      array (
        'id' => 280,
        'code' => 'AG',
        'name' => 'Argeş',
      ),
      3 => 
      array (
        'id' => 281,
        'code' => 'BC',
        'name' => 'Bacău',
      ),
      4 => 
      array (
        'id' => 282,
        'code' => 'BH',
        'name' => 'Bihor',
      ),
      5 => 
      array (
        'id' => 283,
        'code' => 'BN',
        'name' => 'Bistriţa-Năsăud',
      ),
      6 => 
      array (
        'id' => 284,
        'code' => 'BT',
        'name' => 'Botoşani',
      ),
      7 => 
      array (
        'id' => 285,
        'code' => 'BV',
        'name' => 'Braşov',
      ),
      8 => 
      array (
        'id' => 286,
        'code' => 'BR',
        'name' => 'Brăila',
      ),
      9 => 
      array (
        'id' => 287,
        'code' => 'B',
        'name' => 'Bucureşti',
      ),
      10 => 
      array (
        'id' => 288,
        'code' => 'BZ',
        'name' => 'Buzău',
      ),
      11 => 
      array (
        'id' => 289,
        'code' => 'CS',
        'name' => 'Caraş-Severin',
      ),
      12 => 
      array (
        'id' => 290,
        'code' => 'CL',
        'name' => 'Călăraşi',
      ),
      13 => 
      array (
        'id' => 291,
        'code' => 'CJ',
        'name' => 'Cluj',
      ),
      14 => 
      array (
        'id' => 292,
        'code' => 'CT',
        'name' => 'Constanţa',
      ),
      15 => 
      array (
        'id' => 293,
        'code' => 'CV',
        'name' => 'Covasna',
      ),
      16 => 
      array (
        'id' => 294,
        'code' => 'DB',
        'name' => 'Dâmboviţa',
      ),
      17 => 
      array (
        'id' => 295,
        'code' => 'DJ',
        'name' => 'Dolj',
      ),
      18 => 
      array (
        'id' => 296,
        'code' => 'GL',
        'name' => 'Galaţi',
      ),
      19 => 
      array (
        'id' => 297,
        'code' => 'GR',
        'name' => 'Giurgiu',
      ),
      20 => 
      array (
        'id' => 298,
        'code' => 'GJ',
        'name' => 'Gorj',
      ),
      21 => 
      array (
        'id' => 299,
        'code' => 'HR',
        'name' => 'Harghita',
      ),
      22 => 
      array (
        'id' => 300,
        'code' => 'HD',
        'name' => 'Hunedoara',
      ),
      23 => 
      array (
        'id' => 301,
        'code' => 'IL',
        'name' => 'Ialomiţa',
      ),
      24 => 
      array (
        'id' => 302,
        'code' => 'IS',
        'name' => 'Iaşi',
      ),
      25 => 
      array (
        'id' => 303,
        'code' => 'IF',
        'name' => 'Ilfov',
      ),
      26 => 
      array (
        'id' => 304,
        'code' => 'MM',
        'name' => 'Maramureş',
      ),
      27 => 
      array (
        'id' => 305,
        'code' => 'MH',
        'name' => 'Mehedinţi',
      ),
      28 => 
      array (
        'id' => 306,
        'code' => 'MS',
        'name' => 'Mureş',
      ),
      29 => 
      array (
        'id' => 307,
        'code' => 'NT',
        'name' => 'Neamţ',
      ),
      30 => 
      array (
        'id' => 308,
        'code' => 'OT',
        'name' => 'Olt',
      ),
      31 => 
      array (
        'id' => 309,
        'code' => 'PH',
        'name' => 'Prahova',
      ),
      32 => 
      array (
        'id' => 310,
        'code' => 'SM',
        'name' => 'Satu-Mare',
      ),
      33 => 
      array (
        'id' => 311,
        'code' => 'SJ',
        'name' => 'Sălaj',
      ),
      34 => 
      array (
        'id' => 312,
        'code' => 'SB',
        'name' => 'Sibiu',
      ),
      35 => 
      array (
        'id' => 313,
        'code' => 'SV',
        'name' => 'Suceava',
      ),
      36 => 
      array (
        'id' => 314,
        'code' => 'TR',
        'name' => 'Teleorman',
      ),
      37 => 
      array (
        'id' => 315,
        'code' => 'TM',
        'name' => 'Timiş',
      ),
      38 => 
      array (
        'id' => 316,
        'code' => 'TL',
        'name' => 'Tulcea',
      ),
      39 => 
      array (
        'id' => 317,
        'code' => 'VS',
        'name' => 'Vaslui',
      ),
      40 => 
      array (
        'id' => 318,
        'code' => 'VL',
        'name' => 'Vâlcea',
      ),
      41 => 
      array (
        'id' => 319,
        'code' => 'VN',
        'name' => 'Vrancea',
      ),
    ),
  ),
  176 => 
  array (
    'code' => 'RU',
    'name' => 'Russia',
    'regions' => 
    array (
    ),
  ),
  177 => 
  array (
    'code' => 'RW',
    'name' => 'Rwanda',
    'regions' => 
    array (
    ),
  ),
  178 => 
  array (
    'code' => 'SH',
    'name' => 'St. Helena',
    'regions' => 
    array (
    ),
  ),
  179 => 
  array (
    'code' => 'KN',
    'name' => 'St. Kitts & Nevis',
    'regions' => 
    array (
    ),
  ),
  180 => 
  array (
    'code' => 'LC',
    'name' => 'St. Lucia',
    'regions' => 
    array (
    ),
  ),
  181 => 
  array (
    'code' => 'PM',
    'name' => 'St. Pierre & Miquelon',
    'regions' => 
    array (
    ),
  ),
  182 => 
  array (
    'code' => 'VC',
    'name' => 'St. Vincent & Grenadines',
    'regions' => 
    array (
    ),
  ),
  183 => 
  array (
    'code' => 'WS',
    'name' => 'Samoa',
    'regions' => 
    array (
    ),
  ),
  184 => 
  array (
    'code' => 'SM',
    'name' => 'San Marino',
    'regions' => 
    array (
    ),
  ),
  185 => 
  array (
    'code' => 'ST',
    'name' => 'São Tomé & Príncipe',
    'regions' => 
    array (
    ),
  ),
  186 => 
  array (
    'code' => 'SA',
    'name' => 'Saudi Arabia',
    'regions' => 
    array (
    ),
  ),
  187 => 
  array (
    'code' => 'SN',
    'name' => 'Senegal',
    'regions' => 
    array (
    ),
  ),
  188 => 
  array (
    'code' => 'RS',
    'name' => 'Serbia',
    'regions' => 
    array (
    ),
  ),
  189 => 
  array (
    'code' => 'SC',
    'name' => 'Seychelles',
    'regions' => 
    array (
    ),
  ),
  190 => 
  array (
    'code' => 'SL',
    'name' => 'Sierra Leone',
    'regions' => 
    array (
    ),
  ),
  191 => 
  array (
    'code' => 'SG',
    'name' => 'Singapore',
    'regions' => 
    array (
    ),
  ),
  192 => 
  array (
    'code' => 'SK',
    'name' => 'Slovakia',
    'regions' => 
    array (
    ),
  ),
  193 => 
  array (
    'code' => 'SI',
    'name' => 'Slovenia',
    'regions' => 
    array (
    ),
  ),
  194 => 
  array (
    'code' => 'SB',
    'name' => 'Solomon Islands',
    'regions' => 
    array (
    ),
  ),
  195 => 
  array (
    'code' => 'SO',
    'name' => 'Somalia',
    'regions' => 
    array (
    ),
  ),
  196 => 
  array (
    'code' => 'ZA',
    'name' => 'South Africa',
    'regions' => 
    array (
    ),
  ),
  197 => 
  array (
    'code' => 'GS',
    'name' => 'South Georgia & South Sandwich Islands',
    'regions' => 
    array (
    ),
  ),
  198 => 
  array (
    'code' => 'ES',
    'name' => 'Spain',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 130,
        'code' => 'A Coruсa',
        'name' => 'A Coruña',
      ),
      1 => 
      array (
        'id' => 131,
        'code' => 'Alava',
        'name' => 'Alava',
      ),
      2 => 
      array (
        'id' => 132,
        'code' => 'Albacete',
        'name' => 'Albacete',
      ),
      3 => 
      array (
        'id' => 133,
        'code' => 'Alicante',
        'name' => 'Alicante',
      ),
      4 => 
      array (
        'id' => 134,
        'code' => 'Almeria',
        'name' => 'Almeria',
      ),
      5 => 
      array (
        'id' => 135,
        'code' => 'Asturias',
        'name' => 'Asturias',
      ),
      6 => 
      array (
        'id' => 136,
        'code' => 'Avila',
        'name' => 'Avila',
      ),
      7 => 
      array (
        'id' => 137,
        'code' => 'Badajoz',
        'name' => 'Badajoz',
      ),
      8 => 
      array (
        'id' => 138,
        'code' => 'Baleares',
        'name' => 'Baleares',
      ),
      9 => 
      array (
        'id' => 139,
        'code' => 'Barcelona',
        'name' => 'Barcelona',
      ),
      10 => 
      array (
        'id' => 140,
        'code' => 'Burgos',
        'name' => 'Burgos',
      ),
      11 => 
      array (
        'id' => 141,
        'code' => 'Caceres',
        'name' => 'Caceres',
      ),
      12 => 
      array (
        'id' => 142,
        'code' => 'Cadiz',
        'name' => 'Cadiz',
      ),
      13 => 
      array (
        'id' => 143,
        'code' => 'Cantabria',
        'name' => 'Cantabria',
      ),
      14 => 
      array (
        'id' => 144,
        'code' => 'Castellon',
        'name' => 'Castellon',
      ),
      15 => 
      array (
        'id' => 145,
        'code' => 'Ceuta',
        'name' => 'Ceuta',
      ),
      16 => 
      array (
        'id' => 146,
        'code' => 'Ciudad Real',
        'name' => 'Ciudad Real',
      ),
      17 => 
      array (
        'id' => 147,
        'code' => 'Cordoba',
        'name' => 'Cordoba',
      ),
      18 => 
      array (
        'id' => 148,
        'code' => 'Cuenca',
        'name' => 'Cuenca',
      ),
      19 => 
      array (
        'id' => 149,
        'code' => 'Girona',
        'name' => 'Girona',
      ),
      20 => 
      array (
        'id' => 150,
        'code' => 'Granada',
        'name' => 'Granada',
      ),
      21 => 
      array (
        'id' => 151,
        'code' => 'Guadalajara',
        'name' => 'Guadalajara',
      ),
      22 => 
      array (
        'id' => 152,
        'code' => 'Guipuzcoa',
        'name' => 'Guipuzcoa',
      ),
      23 => 
      array (
        'id' => 153,
        'code' => 'Huelva',
        'name' => 'Huelva',
      ),
      24 => 
      array (
        'id' => 154,
        'code' => 'Huesca',
        'name' => 'Huesca',
      ),
      25 => 
      array (
        'id' => 155,
        'code' => 'Jaen',
        'name' => 'Jaen',
      ),
      26 => 
      array (
        'id' => 156,
        'code' => 'La Rioja',
        'name' => 'La Rioja',
      ),
      27 => 
      array (
        'id' => 157,
        'code' => 'Las Palmas',
        'name' => 'Las Palmas',
      ),
      28 => 
      array (
        'id' => 158,
        'code' => 'Leon',
        'name' => 'Leon',
      ),
      29 => 
      array (
        'id' => 159,
        'code' => 'Lleida',
        'name' => 'Lleida',
      ),
      30 => 
      array (
        'id' => 160,
        'code' => 'Lugo',
        'name' => 'Lugo',
      ),
      31 => 
      array (
        'id' => 161,
        'code' => 'Madrid',
        'name' => 'Madrid',
      ),
      32 => 
      array (
        'id' => 162,
        'code' => 'Malaga',
        'name' => 'Malaga',
      ),
      33 => 
      array (
        'id' => 163,
        'code' => 'Melilla',
        'name' => 'Melilla',
      ),
      34 => 
      array (
        'id' => 164,
        'code' => 'Murcia',
        'name' => 'Murcia',
      ),
      35 => 
      array (
        'id' => 165,
        'code' => 'Navarra',
        'name' => 'Navarra',
      ),
      36 => 
      array (
        'id' => 166,
        'code' => 'Ourense',
        'name' => 'Ourense',
      ),
      37 => 
      array (
        'id' => 167,
        'code' => 'Palencia',
        'name' => 'Palencia',
      ),
      38 => 
      array (
        'id' => 168,
        'code' => 'Pontevedra',
        'name' => 'Pontevedra',
      ),
      39 => 
      array (
        'id' => 169,
        'code' => 'Salamanca',
        'name' => 'Salamanca',
      ),
      40 => 
      array (
        'id' => 170,
        'code' => 'Santa Cruz de Tenerife',
        'name' => 'Santa Cruz de Tenerife',
      ),
      41 => 
      array (
        'id' => 171,
        'code' => 'Segovia',
        'name' => 'Segovia',
      ),
      42 => 
      array (
        'id' => 172,
        'code' => 'Sevilla',
        'name' => 'Sevilla',
      ),
      43 => 
      array (
        'id' => 173,
        'code' => 'Soria',
        'name' => 'Soria',
      ),
      44 => 
      array (
        'id' => 174,
        'code' => 'Tarragona',
        'name' => 'Tarragona',
      ),
      45 => 
      array (
        'id' => 175,
        'code' => 'Teruel',
        'name' => 'Teruel',
      ),
      46 => 
      array (
        'id' => 176,
        'code' => 'Toledo',
        'name' => 'Toledo',
      ),
      47 => 
      array (
        'id' => 177,
        'code' => 'Valencia',
        'name' => 'Valencia',
      ),
      48 => 
      array (
        'id' => 178,
        'code' => 'Valladolid',
        'name' => 'Valladolid',
      ),
      49 => 
      array (
        'id' => 179,
        'code' => 'Vizcaya',
        'name' => 'Vizcaya',
      ),
      50 => 
      array (
        'id' => 180,
        'code' => 'Zamora',
        'name' => 'Zamora',
      ),
      51 => 
      array (
        'id' => 181,
        'code' => 'Zaragoza',
        'name' => 'Zaragoza',
      ),
    ),
  ),
  199 => 
  array (
    'code' => 'LK',
    'name' => 'Sri Lanka',
    'regions' => 
    array (
    ),
  ),
  200 => 
  array (
    'code' => 'SD',
    'name' => 'Sudan',
    'regions' => 
    array (
    ),
  ),
  201 => 
  array (
    'code' => 'SR',
    'name' => 'Suriname',
    'regions' => 
    array (
    ),
  ),
  202 => 
  array (
    'code' => 'SJ',
    'name' => 'Svalbard & Jan Mayen',
    'regions' => 
    array (
    ),
  ),
  203 => 
  array (
    'code' => 'SZ',
    'name' => 'Swaziland',
    'regions' => 
    array (
    ),
  ),
  204 => 
  array (
    'code' => 'SE',
    'name' => 'Sweden',
    'regions' => 
    array (
    ),
  ),
  205 => 
  array (
    'code' => 'CH',
    'name' => 'Switzerland',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 104,
        'code' => 'AG',
        'name' => 'Aargau',
      ),
      1 => 
      array (
        'id' => 105,
        'code' => 'AI',
        'name' => 'Appenzell Innerrhoden',
      ),
      2 => 
      array (
        'id' => 106,
        'code' => 'AR',
        'name' => 'Appenzell Ausserrhoden',
      ),
      3 => 
      array (
        'id' => 107,
        'code' => 'BE',
        'name' => 'Bern',
      ),
      4 => 
      array (
        'id' => 108,
        'code' => 'BL',
        'name' => 'Basel-Landschaft',
      ),
      5 => 
      array (
        'id' => 109,
        'code' => 'BS',
        'name' => 'Basel-Stadt',
      ),
      6 => 
      array (
        'id' => 110,
        'code' => 'FR',
        'name' => 'Freiburg',
      ),
      7 => 
      array (
        'id' => 111,
        'code' => 'GE',
        'name' => 'Genf',
      ),
      8 => 
      array (
        'id' => 112,
        'code' => 'GL',
        'name' => 'Glarus',
      ),
      9 => 
      array (
        'id' => 113,
        'code' => 'GR',
        'name' => 'Graubünden',
      ),
      10 => 
      array (
        'id' => 114,
        'code' => 'JU',
        'name' => 'Jura',
      ),
      11 => 
      array (
        'id' => 115,
        'code' => 'LU',
        'name' => 'Luzern',
      ),
      12 => 
      array (
        'id' => 116,
        'code' => 'NE',
        'name' => 'Neuenburg',
      ),
      13 => 
      array (
        'id' => 117,
        'code' => 'NW',
        'name' => 'Nidwalden',
      ),
      14 => 
      array (
        'id' => 118,
        'code' => 'OW',
        'name' => 'Obwalden',
      ),
      15 => 
      array (
        'id' => 119,
        'code' => 'SG',
        'name' => 'St. Gallen',
      ),
      16 => 
      array (
        'id' => 120,
        'code' => 'SH',
        'name' => 'Schaffhausen',
      ),
      17 => 
      array (
        'id' => 121,
        'code' => 'SO',
        'name' => 'Solothurn',
      ),
      18 => 
      array (
        'id' => 122,
        'code' => 'SZ',
        'name' => 'Schwyz',
      ),
      19 => 
      array (
        'id' => 123,
        'code' => 'TG',
        'name' => 'Thurgau',
      ),
      20 => 
      array (
        'id' => 124,
        'code' => 'TI',
        'name' => 'Tessin',
      ),
      21 => 
      array (
        'id' => 125,
        'code' => 'UR',
        'name' => 'Uri',
      ),
      22 => 
      array (
        'id' => 126,
        'code' => 'VD',
        'name' => 'Waadt',
      ),
      23 => 
      array (
        'id' => 127,
        'code' => 'VS',
        'name' => 'Wallis',
      ),
      24 => 
      array (
        'id' => 128,
        'code' => 'ZG',
        'name' => 'Zug',
      ),
      25 => 
      array (
        'id' => 129,
        'code' => 'ZH',
        'name' => 'Zürich',
      ),
    ),
  ),
  206 => 
  array (
    'code' => 'SY',
    'name' => 'Syria',
    'regions' => 
    array (
    ),
  ),
  207 => 
  array (
    'code' => 'TW',
    'name' => 'Taiwan',
    'regions' => 
    array (
    ),
  ),
  208 => 
  array (
    'code' => 'TJ',
    'name' => 'Tajikistan',
    'regions' => 
    array (
    ),
  ),
  209 => 
  array (
    'code' => 'TZ',
    'name' => 'Tanzania',
    'regions' => 
    array (
    ),
  ),
  210 => 
  array (
    'code' => 'TH',
    'name' => 'Thailand',
    'regions' => 
    array (
    ),
  ),
  211 => 
  array (
    'code' => 'TG',
    'name' => 'Togo',
    'regions' => 
    array (
    ),
  ),
  212 => 
  array (
    'code' => 'TK',
    'name' => 'Tokelau',
    'regions' => 
    array (
    ),
  ),
  213 => 
  array (
    'code' => 'TO',
    'name' => 'Tonga',
    'regions' => 
    array (
    ),
  ),
  214 => 
  array (
    'code' => 'TT',
    'name' => 'Trinidad & Tobago',
    'regions' => 
    array (
    ),
  ),
  215 => 
  array (
    'code' => 'TN',
    'name' => 'Tunisia',
    'regions' => 
    array (
    ),
  ),
  216 => 
  array (
    'code' => 'TR',
    'name' => 'Turkey',
    'regions' => 
    array (
    ),
  ),
  217 => 
  array (
    'code' => 'TM',
    'name' => 'Turkmenistan',
    'regions' => 
    array (
    ),
  ),
  218 => 
  array (
    'code' => 'TC',
    'name' => 'Turks & Caicos Islands',
    'regions' => 
    array (
    ),
  ),
  219 => 
  array (
    'code' => 'TV',
    'name' => 'Tuvalu',
    'regions' => 
    array (
    ),
  ),
  220 => 
  array (
    'code' => 'UG',
    'name' => 'Uganda',
    'regions' => 
    array (
    ),
  ),
  221 => 
  array (
    'code' => 'UA',
    'name' => 'Ukraine',
    'regions' => 
    array (
    ),
  ),
  222 => 
  array (
    'code' => 'AE',
    'name' => 'United Arab Emirates',
    'regions' => 
    array (
    ),
  ),
  223 => 
  array (
    'code' => 'GB',
    'name' => 'United Kingdom',
    'regions' => 
    array (
    ),
  ),
  224 => 
  array (
    'code' => 'US',
    'name' => 'United States',
    'regions' => 
    array (
      0 => 
      array (
        'id' => 1,
        'code' => 'AL',
        'name' => 'Alabama',
      ),
      1 => 
      array (
        'id' => 2,
        'code' => 'AK',
        'name' => 'Alaska',
      ),
      2 => 
      array (
        'id' => 3,
        'code' => 'AS',
        'name' => 'American Samoa',
      ),
      3 => 
      array (
        'id' => 4,
        'code' => 'AZ',
        'name' => 'Arizona',
      ),
      4 => 
      array (
        'id' => 5,
        'code' => 'AR',
        'name' => 'Arkansas',
      ),
      5 => 
      array (
        'id' => 6,
        'code' => 'AE',
        'name' => 'Armed Forces Africa',
      ),
      6 => 
      array (
        'id' => 7,
        'code' => 'AA',
        'name' => 'Armed Forces Americas',
      ),
      7 => 
      array (
        'id' => 8,
        'code' => 'AE',
        'name' => 'Armed Forces Canada',
      ),
      8 => 
      array (
        'id' => 9,
        'code' => 'AE',
        'name' => 'Armed Forces Europe',
      ),
      9 => 
      array (
        'id' => 10,
        'code' => 'AE',
        'name' => 'Armed Forces Middle East',
      ),
      10 => 
      array (
        'id' => 11,
        'code' => 'AP',
        'name' => 'Armed Forces Pacific',
      ),
      11 => 
      array (
        'id' => 12,
        'code' => 'CA',
        'name' => 'California',
      ),
      12 => 
      array (
        'id' => 13,
        'code' => 'CO',
        'name' => 'Colorado',
      ),
      13 => 
      array (
        'id' => 14,
        'code' => 'CT',
        'name' => 'Connecticut',
      ),
      14 => 
      array (
        'id' => 15,
        'code' => 'DE',
        'name' => 'Delaware',
      ),
      15 => 
      array (
        'id' => 16,
        'code' => 'DC',
        'name' => 'District of Columbia',
      ),
      16 => 
      array (
        'id' => 17,
        'code' => 'FM',
        'name' => 'Federated States Of Micronesia',
      ),
      17 => 
      array (
        'id' => 18,
        'code' => 'FL',
        'name' => 'Florida',
      ),
      18 => 
      array (
        'id' => 19,
        'code' => 'GA',
        'name' => 'Georgia',
      ),
      19 => 
      array (
        'id' => 20,
        'code' => 'GU',
        'name' => 'Guam',
      ),
      20 => 
      array (
        'id' => 21,
        'code' => 'HI',
        'name' => 'Hawaii',
      ),
      21 => 
      array (
        'id' => 22,
        'code' => 'ID',
        'name' => 'Idaho',
      ),
      22 => 
      array (
        'id' => 23,
        'code' => 'IL',
        'name' => 'Illinois',
      ),
      23 => 
      array (
        'id' => 24,
        'code' => 'IN',
        'name' => 'Indiana',
      ),
      24 => 
      array (
        'id' => 25,
        'code' => 'IA',
        'name' => 'Iowa',
      ),
      25 => 
      array (
        'id' => 26,
        'code' => 'KS',
        'name' => 'Kansas',
      ),
      26 => 
      array (
        'id' => 27,
        'code' => 'KY',
        'name' => 'Kentucky',
      ),
      27 => 
      array (
        'id' => 28,
        'code' => 'LA',
        'name' => 'Louisiana',
      ),
      28 => 
      array (
        'id' => 29,
        'code' => 'ME',
        'name' => 'Maine',
      ),
      29 => 
      array (
        'id' => 30,
        'code' => 'MH',
        'name' => 'Marshall Islands',
      ),
      30 => 
      array (
        'id' => 31,
        'code' => 'MD',
        'name' => 'Maryland',
      ),
      31 => 
      array (
        'id' => 32,
        'code' => 'MA',
        'name' => 'Massachusetts',
      ),
      32 => 
      array (
        'id' => 33,
        'code' => 'MI',
        'name' => 'Michigan',
      ),
      33 => 
      array (
        'id' => 34,
        'code' => 'MN',
        'name' => 'Minnesota',
      ),
      34 => 
      array (
        'id' => 35,
        'code' => 'MS',
        'name' => 'Mississippi',
      ),
      35 => 
      array (
        'id' => 36,
        'code' => 'MO',
        'name' => 'Missouri',
      ),
      36 => 
      array (
        'id' => 37,
        'code' => 'MT',
        'name' => 'Montana',
      ),
      37 => 
      array (
        'id' => 38,
        'code' => 'NE',
        'name' => 'Nebraska',
      ),
      38 => 
      array (
        'id' => 39,
        'code' => 'NV',
        'name' => 'Nevada',
      ),
      39 => 
      array (
        'id' => 40,
        'code' => 'NH',
        'name' => 'New Hampshire',
      ),
      40 => 
      array (
        'id' => 41,
        'code' => 'NJ',
        'name' => 'New Jersey',
      ),
      41 => 
      array (
        'id' => 42,
        'code' => 'NM',
        'name' => 'New Mexico',
      ),
      42 => 
      array (
        'id' => 43,
        'code' => 'NY',
        'name' => 'New York',
      ),
      43 => 
      array (
        'id' => 44,
        'code' => 'NC',
        'name' => 'North Carolina',
      ),
      44 => 
      array (
        'id' => 45,
        'code' => 'ND',
        'name' => 'North Dakota',
      ),
      45 => 
      array (
        'id' => 46,
        'code' => 'MP',
        'name' => 'Northern Mariana Islands',
      ),
      46 => 
      array (
        'id' => 47,
        'code' => 'OH',
        'name' => 'Ohio',
      ),
      47 => 
      array (
        'id' => 48,
        'code' => 'OK',
        'name' => 'Oklahoma',
      ),
      48 => 
      array (
        'id' => 49,
        'code' => 'OR',
        'name' => 'Oregon',
      ),
      49 => 
      array (
        'id' => 50,
        'code' => 'PW',
        'name' => 'Palau',
      ),
      50 => 
      array (
        'id' => 51,
        'code' => 'PA',
        'name' => 'Pennsylvania',
      ),
      51 => 
      array (
        'id' => 52,
        'code' => 'PR',
        'name' => 'Puerto Rico',
      ),
      52 => 
      array (
        'id' => 53,
        'code' => 'RI',
        'name' => 'Rhode Island',
      ),
      53 => 
      array (
        'id' => 54,
        'code' => 'SC',
        'name' => 'South Carolina',
      ),
      54 => 
      array (
        'id' => 55,
        'code' => 'SD',
        'name' => 'South Dakota',
      ),
      55 => 
      array (
        'id' => 56,
        'code' => 'TN',
        'name' => 'Tennessee',
      ),
      56 => 
      array (
        'id' => 57,
        'code' => 'TX',
        'name' => 'Texas',
      ),
      57 => 
      array (
        'id' => 58,
        'code' => 'UT',
        'name' => 'Utah',
      ),
      58 => 
      array (
        'id' => 59,
        'code' => 'VT',
        'name' => 'Vermont',
      ),
      59 => 
      array (
        'id' => 60,
        'code' => 'VI',
        'name' => 'Virgin Islands',
      ),
      60 => 
      array (
        'id' => 61,
        'code' => 'VA',
        'name' => 'Virginia',
      ),
      61 => 
      array (
        'id' => 62,
        'code' => 'WA',
        'name' => 'Washington',
      ),
      62 => 
      array (
        'id' => 63,
        'code' => 'WV',
        'name' => 'West Virginia',
      ),
      63 => 
      array (
        'id' => 64,
        'code' => 'WI',
        'name' => 'Wisconsin',
      ),
      64 => 
      array (
        'id' => 65,
        'code' => 'WY',
        'name' => 'Wyoming',
      ),
    ),
  ),
  225 => 
  array (
    'code' => 'UM',
    'name' => 'U.S. Outlying Islands',
    'regions' => 
    array (
    ),
  ),
  226 => 
  array (
    'code' => 'UY',
    'name' => 'Uruguay',
    'regions' => 
    array (
    ),
  ),
  227 => 
  array (
    'code' => 'UZ',
    'name' => 'Uzbekistan',
    'regions' => 
    array (
    ),
  ),
  228 => 
  array (
    'code' => 'VU',
    'name' => 'Vanuatu',
    'regions' => 
    array (
    ),
  ),
  229 => 
  array (
    'code' => 'VE',
    'name' => 'Venezuela',
    'regions' => 
    array (
    ),
  ),
  230 => 
  array (
    'code' => 'VN',
    'name' => 'Vietnam',
    'regions' => 
    array (
    ),
  ),
  231 => 
  array (
    'code' => 'VG',
    'name' => 'British Virgin Islands',
    'regions' => 
    array (
    ),
  ),
  232 => 
  array (
    'code' => 'VI',
    'name' => 'U.S. Virgin Islands',
    'regions' => 
    array (
    ),
  ),
  233 => 
  array (
    'code' => 'WF',
    'name' => 'Wallis & Futuna',
    'regions' => 
    array (
    ),
  ),
  234 => 
  array (
    'code' => 'EH',
    'name' => 'Western Sahara',
    'regions' => 
    array (
    ),
  ),
  235 => 
  array (
    'code' => 'YE',
    'name' => 'Yemen',
    'regions' => 
    array (
    ),
  ),
  236 => 
  array (
    'code' => 'ZM',
    'name' => 'Zambia',
    'regions' => 
    array (
    ),
  ),
  237 => 
  array (
    'code' => 'ZW',
    'name' => 'Zimbabwe',
    'regions' => 
    array (
    ),
  ),
);


foreach ($array as $countryy) {
  if ($countryy['code'] == $country) {
    $country_full = $countryy['name'];
    break;
  }
}


$full_state = ucwords($full_state);

foreach ($array as $countryy) {
  if ($countryy['code'] === $country) {
    foreach ($countryy['regions'] as $region) {
      if ($region['name'] === $full_state) {
        // Get the value of the id field
        $id = $region['id'];
        break 2;
      }
    }
  }
}
foreach ($array as $countryy) {
  if ($countryy['code'] === $country) {
    foreach ($countryy['regions'] as $region) {
      if ($region['name'] === $full_state) {
        // Get the value of the id field
        $code = $region['code'];
        break 2;
      }
    }
  }
}
///






// Print the values of the fields
$name = ucwords($first);
$lname = ucwords($last);
$street = ucwords($street);
$city =  ucwords($city);

$state = $code;
$regionID = $id;
$full_name = "$name $lname";


$userAgents = [
    "Mozilla/5.0 (Linux; Android 12; DE2118) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; 2201116SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; M2102J20SG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; M2101K6G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 10; MAR-LX1A) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 10; VOG-L29) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; moto g 5G (2022)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; moto g stylus 5G (2022)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; moto g stylus 5G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36v",
    "Mozilla/5.0 (Linux; Android 12; moto g pure) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; Pixel 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; Pixel 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.3",
    "Mozilla/5.0 (Linux; Android 13; Pixel 6 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; Pixel 6a) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; Pixel 6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 12; SM-G973F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-A536B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-G998B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-G991B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-S908B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (Linux; Android 13; SM-S901B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "Mozilla/5.0 (iPhone14,3; U; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/19A346 Safari/602.1",
    "Mozilla/5.0 (iPhone13,2; U; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/15E148 Safari/602.1",
    "Mozilla/5.0 (iPhone12,1; U; CPU iPhone OS 13_0 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/15E148 Safari/602.1",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 12_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 12_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) FxiOS/13.2b11866 Mobile/16A366 Safari/605.1.15",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A5370a Safari/604.1",
    "Mozilla/5.0 (iPhone9,3; U; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A403 Safari/602.1",
    "Mozilla/5.0 (iPhone9,4; U; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A403 Safari/602.1",
    "Mozilla/5.0 (Apple-iPhone7C2/1202.466; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A543 Safari/419.3"
];
$randomIndex = array_rand($userAgents);
$ua = $userAgents[$randomIndex];

$phone = str_replace('-', '', $phone);
$email = strtolower($email);


header('Content-type: application/json');
$response = array(
        'result' => 200,
     'something' => $count
        );
$response["hello"] = array(
    'street'=>array(
      'name'       => $street,
      'city'       => $city,
      'zip'        => $zip,
      'state'      => $state,
      'state_full' => $full_state,
      'regionId'   => trim($regionID),
      'country'    => trim($country)
      ),
    'person'=>array(
        'full_name'  => $full_name,
        'first_name' => trim($name),
        'last_name'  => trim($lname),
        'email'      => trim($email2),
        'phone'      => trim($phone),
         'ua'        => $ua
        ),
 'developer'=>array(
 'api-version' => $api_ver,
     'name'    => "HASH",
     'website' => $main_url,
)
        );
echo json_encode($response);



?>