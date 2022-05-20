<?php

// use function;

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

function getYears($endYear = 0, $sort = 0)
{
    $currentYear = date('Y') + 3;
    $endYear = 1970;
    $year = [];
    $year[''] = 'Select';
    for ($currentYear; $currentYear >= $endYear; $currentYear--) {
        $year[$currentYear] = $currentYear;
    }
    if ($sort) {
        asort($year);
    }
    return $year;
}
function getLicenseTypeOptions()
{
    return [
        '' => 'Select License Type',
        'RN' => 'RN',
        'NP' => 'NP',
        'LPN/LVN' => 'LPN/LVN',
        'CST' => 'CST',
        'OT' => 'OT',
        'PT' => 'PT',
        'RT' => 'RT'
    ];
    // return [
    //     // 'id'            => $clinicalUnit->id_clinical_unit,
    //     // 'clinical_name' => $clinicalUnit->clinical_name,
    //     'detail'        => $clinicalUnit->detail,
    // ];
}
function getParentAccount()
{
    return[
    '' => 'Select Type',
    'P' => 'MSP',
    'R' => 'Regional',
    'A' => 'Accounts'
    ];

}
function getShiftCategories()
{
    return[
        '' => 'Select Shift Categories',
        'Day' => 'Day',
        'Night' => 'Night',
        'Rotating' => 'Rotating',
        'Varied' => 'Varied',
    ];
}
function getClinicalUnits()
{
    return[
        '' => 'Select Clinical Units',
        'AP - RN' => 'AP - RN',
        'BMT/Hemonc - RN' => 'BMT/Hemonc - RN',
        'Case Management - RN' => 'Case Management - RN',
        'Cath Lab - RN' => 'Cath Lab - RN',
        'CVICU - Allied' => 'CVICU - Allied',
        'CVOR - RN' => 'CVOR - RN',
        'Dialysis - RN' => 'Dialysis - RN',
        'Endoscopy/GI - Professiontest' => 'Endoscopy/GI - Professiontest',
        'ER - Professiontest' => 'ER - Professiontest',
        'House Supervisor - RN' => 'House Supervisor - RN',
        'ICU - Allied' => 'ICU - Allied',
        'Leadership - RN' => 'Leadership - RN',
        'COVID Tester - RN' => 'COVID Tester - RN',

    ];
}
function getAssignmentDuration()
{
    return[
        '' => 'Assignment Duration',
        '1 Weeks' => '1 Weeks',
        '2 Weeks' => '2 Weeks',
        '3 Weeks' => '3 Weeks',
        '4 Weeks' => '4 Weeks',
        '5 Weeks' => '5 Weeks',
        '6 Weeks' => '6 Weeks',
        '7 Weeks' => '7 Weeks',
        '8 Weeks' => '8 Weeks',
        '9 Weeks' => '9 Weeks',
        '10 Weeks' => '10 Weeks',
        '11 Weeks' => '11 Weeks',
        '12 Weeks' => '12 Weeks',
        '13 Weeks' => '13 Weeks',
        '14 Weeks' => '14 Weeks',
        '15 Weeks' => '15 Weeks',
        '16 Weeks' => '16 Weeks',
        '17 Weeks' => '17 Weeks',
        '18 Weeks' => '18 Weeks',
        '19 Weeks' => '19 Weeks',
        '20 Weeks' => '20 Weeks',

    ];
}
function getStatus()
{
    return[
        'Weekly Hours' => 'Select Status',
        'Select Status' => 'Select Status',       
        'Open' => 'Open',
        'Closed' => 'Closed',
        'Suspended' => 'Suspended',
        'Submitted' => 'Submitted',
        'Placeholder' => 'Placeholder',
        'Halted' => 'Halted',
    ];
}
function getRateTypes()
{
    return[
        '' => 'Select Rate Type',
        'Normal' => 'Normal',       
        'Escalated-Incentive' => 'Escalated-Incentive',
        'Escalated-Critical-Need' => 'Escalated-Critical-Need',
        'Escalated-Crisis' => 'Escalated-Crisis',
        'Escalated-Fast-Response' => 'Escalated-Fast-Response',
    ];
}
function getVmsNames()
{
    return[
        '' => 'Select VMS NAMES',
       'AYA' => 'AYA',
       'MEDEFIS' => 'MEDEFIS',
       'MEDEFIS5' => 'MEDEFIS5',
       'SHIFTWISE' => 'SHIFTWISE',
       'LotusConnect' => 'LotusConnect',
       'FIELDGLASS' => 'FIELDGLASS',
       'FOCUSONE' => 'FOCUSONE',
       'B4 Health' => 'B4 Health',
       'Vizient' => 'Vizient',
       'AHSA' => 'AHSA',
       'Simpli Fi' => 'Simpli Fi',
       'Favorite Healthcare Staffing' => 'Favorite Healthcare Staffing',
       'Statstaff' => 'Statstaff',
       'None' => 'None',
       'Supplemental Healthcare' => 'Supplemental Healthcare',
       'WAND' => 'WAND',
       'TotalMSP' => 'TotalMSP',
       'Stafferlink' => 'Stafferlink',
       'HWL' =>  'HWL',
       'Medical Solutions' => 'Medical Solutions',
       'Bluesky-Supplemental' => 'Bluesky-Supplemental',
       'Trusted HS' => 'Trusted HS',        
        
    ];
}


