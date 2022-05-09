<?php

function getMonths()
{
    return [
        '' => 'Select',
        'January' => '01 January',
        'February' => '02 February',
        'March' => '03 March',
        'April' => '04 April',
        'May' => '05 May',
        'June' => '06 June',
        'July' => '07 July',
        'August' => '08 August',
        'September' => '09 September',
        'October' => '10 October',
        'November' => '11 November',
        'December' => '12 December',
    ];
}
function getStates($value = '', $select = 'Select States')
{
    $value = trim($value);

    $states = [
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'DC' => 'District of Columbia',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
        'OT' => 'Other',
    ];
    $value = strtoupper($value);
    if ($value) {
        if ($value == 'OTHER') {
            return "Other";
        }

        return isset($states[$value]) ? $states[$value] : "";
    }

    if ($select) {
        $selectArray[''] = 'Select State';
        $states = $selectArray + $states;
    }

    return $states;
}