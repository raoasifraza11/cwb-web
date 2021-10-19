<?php
/*
 * CQPweb: a user-friendly interface to the IMS Corpus Query Processor
 * Copyright (C) 2008-today Andrew Hardie and contributors
 *
 * See http://cwb.sourceforge.net/cqpweb.php
 *
 * This file is part of CQPweb.
 * 
 * CQPweb is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * CQPweb is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


/**
 * @file
 * 
 * Initialises the large array of country codes and names for ISO 3166-1 alpha-2.
 * 
 * Hangs array off the global $Config object, so can be used locally or globally;
 * if locally, declare global $Config first.
 */


/*
 * Note: mostly follows the ISO, but substitutes common names for official UN names
 * wherever this would not lead to ambiguity. 
 * 
 * All "republic of X", "state of X" etc. are omitted for brevity unless they are a
 * critical part of the name, e.g. "Central African Republic", "United States of America".
 * 
 * All alternative names are omitted for brevity.
 * 
 * Plus 00, rather than ZZ, is used for the "unknown" code.
 */
if (!isset($Config->iso31661))
{
	$Config->iso31661 = array (
		'00'=>'--Unknown or not specified--',
		'AF'=>'Afghanistan',
		'AX'=>'Åland Islands',
		'AL'=>'Albania',
		'DZ'=>'Algeria',
		'AS'=>'American Samoa',
		'AD'=>'Andorra',
		'AO'=>'Angola',
		'AI'=>'Anguilla',
		'AQ'=>'Antarctica',
		'AG'=>'Antigua and Barbuda',
		'AR'=>'Argentina',
		'AM'=>'Armenia',
		'AW'=>'Aruba',
		'AU'=>'Australia',
		'AT'=>'Austria',
		'AZ'=>'Azerbaijan',
		'BS'=>'Bahamas',
		'BH'=>'Bahrain',
		'BD'=>'Bangladesh',
		'BB'=>'Barbados',
		'BY'=>'Belarus',
		'BE'=>'Belgium',
		'BZ'=>'Belize',
		'BJ'=>'Benin',
		'BM'=>'Bermuda',
		'BT'=>'Bhutan',
		'BO'=>'Bolivia',
		'BQ'=>'Bonaire, Sint Eustatius and Saba',
		'BA'=>'Bosnia and Herzegovina',
		'BW'=>'Botswana',
		'BV'=>'Bouvet Island',
		'BR'=>'Brazil',
		'IO'=>'British Indian Ocean Territory',
		'BN'=>'Brunei',
		'BG'=>'Bulgaria',
		'BF'=>'Burkina Faso',
		'BI'=>'Burundi',
		'KH'=>'Cambodia',
		'CM'=>'Cameroon',
		'CA'=>'Canada',
		'CV'=>'Cape Verde',
		'KY'=>'Cayman Islands',
		'CF'=>'Central African Republic',
		'TD'=>'Chad',
		'CL'=>'Chile',
		'CN'=>'China',
		'CX'=>'Christmas Island',
		'CC'=>'Cocos (Keeling) Islands',
		'CO'=>'Colombia',
		'KM'=>'Comoros',
		'CD'=>'Congo-Kinshasa',
		'CG'=>'Congo-Brazzaville',
		'CK'=>'Cook Islands',
		'CR'=>'Costa Rica',
		'CI'=>'Côte D’Ivoire',
		'HR'=>'Croatia',
		'CU'=>'Cuba',
		'CW'=>'Curaçao',
		'CY'=>'Cyprus',
		'CZ'=>'Czech Republic',
		'DK'=>'Denmark',
		'DJ'=>'Djibouti',
		'DM'=>'Dominica',
		'DO'=>'Dominican Republic',
		'EC'=>'Ecuador',
		'EG'=>'Egypt',
		'SV'=>'El Salvador',
		'GQ'=>'Equatorial Guinea',
		'ER'=>'Eritrea',
		'EE'=>'Estonia',
		'ET'=>'Ethiopia',
		'FK'=>'Falkland Islands',
		'FO'=>'Faroe Islands',
		'FM'=>'Federated States of Micronesia',
		'FJ'=>'Fiji',
		'FI'=>'Finland',
		'FR'=>'France',
		'GF'=>'French Guiana',
		'PF'=>'French Polynesia',
		'TF'=>'French Southern Territories',
		'GA'=>'Gabon',
		'GM'=>'Gambia',
		'GE'=>'Georgia',
		'DE'=>'Germany',
		'GH'=>'Ghana',
		'GI'=>'Gibraltar',
		'GR'=>'Greece',
		'GL'=>'Greenland',
		'GD'=>'Grenada',
		'GP'=>'Guadeloupe',
		'GU'=>'Guam',
		'GT'=>'Guatemala',
		'GG'=>'Guernsey',
		'GN'=>'Guinea',
		'GW'=>'Guinea-Bissau',
		'GY'=>'Guyana',
		'HT'=>'Haiti',
		'HM'=>'Heard Island and Mcdonald Islands',
		'HN'=>'Honduras',
		'HK'=>'Hong Kong',
		'HU'=>'Hungary',
		'IS'=>'Iceland',
		'IN'=>'India',
		'ID'=>'Indonesia',
		'IE'=>'Ireland',
		'IR'=>'Iran',
		'IQ'=>'Iraq',
		'IM'=>'Isle of Man',
		'IL'=>'Israel',
		'IT'=>'Italy',
		'JM'=>'Jamaica',
		'JP'=>'Japan',
		'JE'=>'Jersey',
		'JO'=>'Jordan',
		'KZ'=>'Kazakhstan',
		'KE'=>'Kenya',
		'KI'=>'Kiribati',
		'KW'=>'Kuwait',
		'KG'=>'Kyrgyzstan',
		'LA'=>'Laos',
		'LV'=>'Latvia',
		'LB'=>'Lebanon',
		'LS'=>'Lesotho',
		'LR'=>'Liberia',
		'LY'=>'Libya',
		'LI'=>'Liechtenstein',
		'LT'=>'Lithuania',
		'LU'=>'Luxembourg',
		'MO'=>'Macao',
		'MH'=>'Marshall Islands',
		'MG'=>'Madagascar',
		'MV'=>'Maldives',
		'MW'=>'Malawi',
		'MY'=>'Malaysia',
		'ML'=>'Mali',
		'MT'=>'Malta',
		'MQ'=>'Martinique',
		'MR'=>'Mauritania',
		'MU'=>'Mauritius',
		'YT'=>'Mayotte',
		'MX'=>'Mexico',
		'MD'=>'Moldova',
		'MC'=>'Monaco',
		'MN'=>'Mongolia',
		'ME'=>'Montenegro',
		'MS'=>'Montserrat',
		'MA'=>'Morocco',
		'MZ'=>'Mozambique',
		'MM'=>'Myanmar',
		'NA'=>'Namibia',
		'NR'=>'Nauru',
		'NP'=>'Nepal',
		'NL'=>'Netherlands',
		'AN'=>'Netherlands Antilles',
		'NZ'=>'New Zealand',
		'NC'=>'New Caledonia',
		'NI'=>'Nicaragua',
		'NE'=>'Niger',
		'NG'=>'Nigeria',
		'NU'=>'Niue',
		'NF'=>'Norfolk Island',
		'KP'=>'North Korea',
		'MK'=>'North Macedonia',
		'MP'=>'Northern Mariana Islands',
		'NO'=>'Norway',
		'OM'=>'Oman',
		'PK'=>'Pakistan',
		'PW'=>'Palau',
		'PS'=>'Palestine',
		'PA'=>'Panama',
		'PG'=>'Papua New Guinea',
		'PY'=>'Paraguay',
		'PE'=>'Peru',
		'PH'=>'Philippines',
		'PN'=>'Pitcairn',
		'PL'=>'Poland',
		'PT'=>'Portugal',
		'PR'=>'Puerto Rico',
		'QA'=>'Qatar',
		'RE'=>'Réunion',
		'RO'=>'Romania',
		'RU'=>'Russia',
		'RW'=>'Rwanda',
		'BL'=>'Saint Barthélemy',
		'SH'=>'Saint Helena, Ascension and Tristan da Cunha',
		'KN'=>'Saint Kitts and Nevis',
		'LC'=>'Saint Lucia',
		'MF'=>'Saint Martin (French)',
		'PM'=>'Saint Pierre and Miquelon',
		'VC'=>'Saint Vincent and the Grenadines',
		'WS'=>'Samoa',
		'SM'=>'San Marino',
		'ST'=>'São Tomé and Príncipe',
		'SA'=>'Saudi Arabia',
		'SN'=>'Senegal',
		'RS'=>'Serbia',
		'SC'=>'Seychelles',
		'SL'=>'Sierra Leone',
		'SG'=>'Singapore',
		'SX'=>'Sint Maarten (Dutch)',
		'SK'=>'Slovakia',
		'SI'=>'Slovenia',
		'SB'=>'Solomon Islands',
		'SO'=>'Somalia',
		'ZA'=>'South Africa',
		'GS'=>'South Georgia and the South Sandwich Islands',
		'KR'=>'South Korea',
		'SS'=>'South Sudan',
		'ES'=>'Spain',
		'LK'=>'Sri Lanka',
		'SD'=>'Sudan',
		'SR'=>'Suriname',
		'SJ'=>'Svalbard and Jan Mayen',
		'SZ'=>'Swaziland',
		'SE'=>'Sweden',
		'CH'=>'Switzerland',
		'SY'=>'Syria',
		'TW'=>'Taiwan',
		'TJ'=>'Tajikistan',
		'TZ'=>'Tanzania',
		'TH'=>'Thailand',
		'TL'=>'Timor-Leste',
		'TK'=>'Tokelau',
		'TG'=>'Togo',
		'TO'=>'Tonga',
		'TT'=>'Trinidad and Tobago',
		'TN'=>'Tunisia',
		'TR'=>'Turkey',
		'TM'=>'Turkmenistan',
		'TC'=>'Turks and Caicos Islands',
		'TV'=>'Tuvalu',
		'UG'=>'Uganda',
		'UA'=>'Ukraine',
		'AE'=>'United Arab Emirates',
		'GB'=>'United Kingdom',
		'US'=>'United States of America',
		'UM'=>'United States Minor Outlying Islands',
		'UY'=>'Uruguay',
		'UZ'=>'Uzbekistan',
		'VU'=>'Vanuatu',
		'VA'=>'Vatican City',
		'VE'=>'Venezuela',
		'VN'=>'Vietnam',
		'VG'=>'Virgin Islands, British',
		'VI'=>'Virgin Islands, U.S.',
		'WF'=>'Wallis and Futuna',
		'EH'=>'Western Sahara',
		'YE'=>'Yemen',
		'ZM'=>'Zambia',
		'ZW'=>'Zimbabwe'
	);
	/* list above is manually-sorted; should no longer need auto-sort. */
}