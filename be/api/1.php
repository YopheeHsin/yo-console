<?php
// error_reporting(E_ALL ^ E_NOTICE);
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');
date_default_timezone_set('Asia/Shanghai');
header('Content-Type: application/json; charset=UTF-8');
define('MAGIC_QUOTES_GPC', function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc());

require_once 'fn.php';

$data_json_string = '[{
	"id": 1,
	"name": "Klein",
	"company": "ZENTRY",
	"email": "klein@zentry.tv",
	"phone": "(926) 536-2159",
	"address": "373 Franklin Street, Herlong, Indiana, 4110"
}, {
	"id": 2,
	"name": "Witt",
	"company": "ULTRIMAX",
	"email": "witt@ultrimax.name",
	"phone": "(948) 461-2634",
	"address": "391 Milton Street, Lithium, New Hampshire, 4095"
}, {
	"id": 3,
	"name": "Brooks",
	"company": "EMERGENT",
	"email": "brooks@emergent.biz",
	"phone": "(861) 583-3102",
	"address": "183 Sutton Street, Watrous, Kentucky, 5892"
}, {
	"id": 4,
	"name": "Smith",
	"company": "GOLISTIC",
	"email": "smith@golistic.info",
	"phone": "(938) 595-3525",
	"address": "483 Columbia Place, Bennett, Kansas, 3086"
}, {
	"id": 5,
	"name": "Ray",
	"company": "ASIMILINE",
	"email": "ray@asimiline.us",
	"phone": "(814) 496-3546",
	"address": "190 Colby Court, Marysville, North Dakota, 3255"
}, {
	"id": 6,
	"name": "Langley",
	"company": "CONJURICA",
	"email": "langley@conjurica.biz",
	"phone": "(820) 531-3416",
	"address": "232 Quentin Street, Blandburg, New Mexico, 7722"
}, {
	"id": 7,
	"name": "Vang",
	"company": "FUTURITY",
	"email": "vang@futurity.net",
	"phone": "(819) 418-3909",
	"address": "641 Gardner Avenue, Keyport, Idaho, 5737"
}, {
	"id": 8,
	"name": "Parks",
	"company": "NAMEBOX",
	"email": "parks@namebox.me",
	"phone": "(984) 576-3601",
	"address": "305 Newport Street, Dodge, Illinois, 5852"
}, {
	"id": 9,
	"name": "Barnes",
	"company": "BALUBA",
	"email": "barnes@baluba.io",
	"phone": "(800) 431-2465",
	"address": "681 Prospect Avenue, Ola, Virginia, 4429"
}, {
	"id": 10,
	"name": "Ortega",
	"company": "WAAB",
	"email": "ortega@waab.org",
	"phone": "(854) 530-2624",
	"address": "804 Heath Place, Wanamie, California, 4584"
}, {
	"id": 11,
	"name": "Barry",
	"company": "EXTRAWEAR",
	"email": "barry@extrawear.com",
	"phone": "(909) 575-2457",
	"address": "122 Village Court, Dixonville, Iowa, 5884"
}, {
	"id": 12,
	"name": "Giles",
	"company": "ANIMALIA",
	"email": "giles@animalia.ca",
	"phone": "(890) 452-3541",
	"address": "987 Crawford Avenue, Maury, New Jersey, 4902"
}, {
	"id": 13,
	"name": "Wheeler",
	"company": "PIGZART",
	"email": "wheeler@pigzart.tv",
	"phone": "(849) 504-3556",
	"address": "436 Hubbard Place, Roosevelt, Wyoming, 6170"
}, {
	"id": 14,
	"name": "Holloway",
	"company": "GINK",
	"email": "holloway@gink.name",
	"phone": "(993) 403-3974",
	"address": "130 Oxford Street, Eureka, Ohio, 5288"
}, {
	"id": 15,
	"name": "Palmer",
	"company": "ANDRYX",
	"email": "palmer@andryx.biz",
	"phone": "(987) 459-3671",
	"address": "321 Green Street, Linganore, Missouri, 7501"
}, {
	"id": 16,
	"name": "Mack",
	"company": "GEEKULAR",
	"email": "mack@geekular.info",
	"phone": "(897) 457-3394",
	"address": "865 Kaufman Place, Clarksburg, Washington, 2003"
}, {
	"id": 17,
	"name": "Blevins",
	"company": "ROCKYARD",
	"email": "blevins@rockyard.us",
	"phone": "(939) 403-2551",
	"address": "814 Jerome Avenue, Elrama, Marshall Islands, 6793"
}, {
	"id": 18,
	"name": "Pacheco",
	"company": "GAZAK",
	"email": "pacheco@gazak.biz",
	"phone": "(846) 593-2258",
	"address": "898 Williams Avenue, Whitestone, South Carolina, 3414"
}, {
	"id": 19,
	"name": "Roth",
	"company": "CHILLIUM",
	"email": "roth@chillium.net",
	"phone": "(817) 498-3525",
	"address": "907 Rockaway Avenue, Belgreen, Pennsylvania, 7599"
}, {
	"id": 20,
	"name": "Byrd",
	"company": "ORBIFLEX",
	"email": "byrd@orbiflex.me",
	"phone": "(901) 492-3694",
	"address": "260 Essex Street, Grenelefe, Puerto Rico, 2708"
}, {
	"id": 21,
	"name": "Pate",
	"company": "ORBIN",
	"email": "pate@orbin.io",
	"phone": "(877) 440-2414",
	"address": "933 Surf Avenue, Derwood, Federated States Of Micronesia, 6876"
}, {
	"id": 22,
	"name": "Hobbs",
	"company": "GOKO",
	"email": "hobbs@goko.org",
	"phone": "(980) 498-3578",
	"address": "499 Forrest Street, Guthrie, Montana, 9651"
}, {
	"id": 23,
	"name": "Charles",
	"company": "JUNIPOOR",
	"email": "charles@junipoor.com",
	"phone": "(929) 420-2214",
	"address": "789 Clifton Place, Ferney, South Dakota, 6159"
}, {
	"id": 24,
	"name": "Bartlett",
	"company": "SUREPLEX",
	"email": "bartlett@sureplex.ca",
	"phone": "(800) 493-3447",
	"address": "546 Temple Court, Ruffin, Virgin Islands, 3109"
}, {
	"id": 25,
	"name": "Estes",
	"company": "SULTRAX",
	"email": "estes@sultrax.tv",
	"phone": "(806) 514-3912",
	"address": "569 Truxton Street, Morgandale, Massachusetts, 3383"
}, {
	"id": 26,
	"name": "Olson",
	"company": "MAGNEATO",
	"email": "olson@magneato.name",
	"phone": "(932) 587-3637",
	"address": "210 Burnett Street, Wilmington, Northern Mariana Islands, 1440"
}, {
	"id": 27,
	"name": "Hopkins",
	"company": "QUONK",
	"email": "hopkins@quonk.biz",
	"phone": "(863) 544-3480",
	"address": "743 Lenox Road, Otranto, West Virginia, 5507"
}, {
	"id": 28,
	"name": "Harris",
	"company": "MAZUDA",
	"email": "harris@mazuda.info",
	"phone": "(939) 404-2336",
	"address": "196 Exeter Street, Roberts, Colorado, 540"
}, {
	"id": 29,
	"name": "Alford",
	"company": "OATFARM",
	"email": "alford@oatfarm.us",
	"phone": "(871) 581-2874",
	"address": "227 Sumpter Street, Bonanza, Guam, 2873"
}, {
	"id": 30,
	"name": "Wiggins",
	"company": "LETPRO",
	"email": "wiggins@letpro.biz",
	"phone": "(826) 433-3489",
	"address": "728 Ridgewood Place, Murillo, North Carolina, 8323"
}, {
	"id": 31,
	"name": "Chang",
	"company": "GENMY",
	"email": "chang@genmy.net",
	"phone": "(994) 474-3134",
	"address": "468 Degraw Street, Dante, American Samoa, 9357"
}, {
	"id": 32,
	"name": "Santana",
	"company": "THREDZ",
	"email": "santana@thredz.me",
	"phone": "(897) 521-3465",
	"address": "491 Monroe Street, Jennings, Wisconsin, 5730"
}, {
	"id": 33,
	"name": "Williamson",
	"company": "BLURRYBUS",
	"email": "williamson@blurrybus.io",
	"phone": "(833) 584-3872",
	"address": "232 Will Place, Thatcher, Nevada, 8643"
}, {
	"id": 34,
	"name": "Vargas",
	"company": "IDEGO",
	"email": "vargas@idego.org",
	"phone": "(873) 528-2205",
	"address": "298 Euclid Avenue, Hollymead, Alabama, 1198"
}, {
	"id": 35,
	"name": "Ballard",
	"company": "EMTRAC",
	"email": "ballard@emtrac.com",
	"phone": "(877) 537-2491",
	"address": "813 Neptune Court, Beaulieu, Alaska, 1770"
}, {
	"id": 36,
	"name": "Poole",
	"company": "PHOTOBIN",
	"email": "poole@photobin.ca",
	"phone": "(946) 419-2658",
	"address": "583 Hawthorne Street, Hayden, Oklahoma, 6281"
}, {
	"id": 37,
	"name": "Haynes",
	"company": "SUSTENZA",
	"email": "haynes@sustenza.tv",
	"phone": "(845) 534-3982",
	"address": "634 Main Street, Dragoon, Minnesota, 326"
}, {
	"id": 38,
	"name": "Maddox",
	"company": "GEEKKO",
	"email": "maddox@geekko.name",
	"phone": "(880) 540-2317",
	"address": "404 Coles Street, Garberville, Vermont, 9449"
}, {
	"id": 39,
	"name": "Mercer",
	"company": "XEREX",
	"email": "mercer@xerex.biz",
	"phone": "(821) 494-3321",
	"address": "500 Campus Road, Fidelis, Florida, 4811"
}, {
	"id": 40,
	"name": "Strickland",
	"company": "BLEEKO",
	"email": "strickland@bleeko.info",
	"phone": "(849) 443-2911",
	"address": "307 Union Street, Ventress, Maine, 5727"
}, {
	"id": 41,
	"name": "Baxter",
	"company": "ZAGGLES",
	"email": "baxter@zaggles.us",
	"phone": "(939) 442-2467",
	"address": "364 Roebling Street, Wheatfields, Connecticut, 1726"
}, {
	"id": 42,
	"name": "Flores",
	"company": "ISBOL",
	"email": "flores@isbol.biz",
	"phone": "(835) 555-2313",
	"address": "365 Otsego Street, Lindcove, New York, 4834"
}, {
	"id": 43,
	"name": "Shelton",
	"company": "PLASMOX",
	"email": "shelton@plasmox.net",
	"phone": "(972) 530-2391",
	"address": "896 Wolcott Street, Adamstown, Arkansas, 9061"
}, {
	"id": 44,
	"name": "Armstrong",
	"company": "COMVENE",
	"email": "armstrong@comvene.me",
	"phone": "(848) 547-2867",
	"address": "528 Jefferson Avenue, Nescatunga, Tennessee, 6218"
}, {
	"id": 45,
	"name": "Fields",
	"company": "BULLJUICE",
	"email": "fields@bulljuice.io",
	"phone": "(899) 572-3446",
	"address": "627 Newel Street, Vincent, Maryland, 4373"
}, {
	"id": 46,
	"name": "Sharpe",
	"company": "ZILODYNE",
	"email": "sharpe@zilodyne.org",
	"phone": "(962) 404-2006",
	"address": "499 Fleet Place, Coleville, Georgia, 6922"
}, {
	"id": 47,
	"name": "Blackburn",
	"company": "STRALUM",
	"email": "blackburn@stralum.com",
	"phone": "(961) 473-2151",
	"address": "957 Roosevelt Court, Foscoe, Hawaii, 9652"
}, {
	"id": 48,
	"name": "Espinoza",
	"company": "TETAK",
	"email": "espinoza@tetak.ca",
	"phone": "(948) 570-2811",
	"address": "437 Miller Place, Delwood, Palau, 2835"
}, {
	"id": 49,
	"name": "Mcintosh",
	"company": "GENEKOM",
	"email": "mcintosh@genekom.tv",
	"phone": "(865) 482-2545",
	"address": "960 Cyrus Avenue, Nile, Michigan, 3009"
}, {
	"id": 50,
	"name": "Blake",
	"company": "PLASMOS",
	"email": "blake@plasmos.name",
	"phone": "(915) 457-3525",
	"address": "960 Randolph Street, Comptche, Nebraska, 5794"
}, {
	"id": 51,
	"name": "Keller",
	"company": "PYRAMAX",
	"email": "keller@pyramax.biz",
	"phone": "(994) 553-3305",
	"address": "100 Devon Avenue, Ahwahnee, Texas, 6467"
}, {
	"id": 52,
	"name": "Kaufman",
	"company": "KOZGENE",
	"email": "kaufman@kozgene.info",
	"phone": "(917) 500-2825",
	"address": "375 Scholes Street, Logan, District Of Columbia, 8804"
}, {
	"id": 53,
	"name": "Hudson",
	"company": "GEOSTELE",
	"email": "hudson@geostele.us",
	"phone": "(904) 512-2809",
	"address": "738 Norman Avenue, Lumberton, Oregon, 5232"
}, {
	"id": 54,
	"name": "Keith",
	"company": "MYOPIUM",
	"email": "keith@myopium.biz",
	"phone": "(968) 457-3674",
	"address": "845 Meserole Avenue, Floriston, Rhode Island, 6136"
}, {
	"id": 55,
	"name": "Medina",
	"company": "CORMORAN",
	"email": "medina@cormoran.net",
	"phone": "(816) 501-2012",
	"address": "746 Amherst Street, Dorneyville, Louisiana, 7046"
}, {
	"id": 56,
	"name": "Beck",
	"company": "NEBULEAN",
	"email": "beck@nebulean.me",
	"phone": "(848) 505-2352",
	"address": "458 Turner Place, Elizaville, Delaware, 4059"
}, {
	"id": 57,
	"name": "Barlow",
	"company": "DRAGBOT",
	"email": "barlow@dragbot.io",
	"phone": "(816) 476-2409",
	"address": "264 Florence Avenue, Johnsonburg, Arizona, 3731"
}, {
	"id": 58,
	"name": "Oneill",
	"company": "EVENTAGE",
	"email": "oneill@eventage.org",
	"phone": "(827) 528-2578",
	"address": "840 India Street, Trexlertown, Utah, 4984"
}, {
	"id": 59,
	"name": "Lynch",
	"company": "SLOGANAUT",
	"email": "lynch@sloganaut.com",
	"phone": "(809) 560-2342",
	"address": "413 Garland Court, Bakersville, Indiana, 109"
}, {
	"id": 60,
	"name": "Robertson",
	"company": "OZEAN",
	"email": "robertson@ozean.ca",
	"phone": "(988) 523-3422",
	"address": "764 Willow Street, Stockwell, New Hampshire, 4709"
}, {
	"id": 61,
	"name": "Webster",
	"company": "ACCUFARM",
	"email": "webster@accufarm.tv",
	"phone": "(991) 562-3234",
	"address": "979 Sandford Street, Malott, Kentucky, 8042"
}, {
	"id": 62,
	"name": "Strong",
	"company": "ZENCO",
	"email": "strong@zenco.name",
	"phone": "(808) 513-3370",
	"address": "102 Portal Street, Welch, Kansas, 7757"
}, {
	"id": 63,
	"name": "Durham",
	"company": "MALATHION",
	"email": "durham@malathion.biz",
	"phone": "(837) 573-3502",
	"address": "731 Fleet Walk, Talpa, North Dakota, 2587"
}, {
	"id": 64,
	"name": "Farley",
	"company": "ECRATIC",
	"email": "farley@ecratic.info",
	"phone": "(894) 551-2001",
	"address": "132 Hillel Place, Stollings, New Mexico, 1006"
}, {
	"id": 65,
	"name": "Tyler",
	"company": "STOCKPOST",
	"email": "tyler@stockpost.us",
	"phone": "(990) 575-2307",
	"address": "999 Elm Avenue, Roeville, Idaho, 6814"
}, {
	"id": 66,
	"name": "Simpson",
	"company": "EXOZENT",
	"email": "simpson@exozent.biz",
	"phone": "(897) 427-2180",
	"address": "336 Argyle Road, Corriganville, Illinois, 3595"
}, {
	"id": 67,
	"name": "Harrington",
	"company": "ACCUPHARM",
	"email": "harrington@accupharm.net",
	"phone": "(876) 465-3494",
	"address": "168 Mill Avenue, Lupton, Virginia, 9155"
}, {
	"id": 68,
	"name": "Knox",
	"company": "CALCU",
	"email": "knox@calcu.me",
	"phone": "(833) 528-2860",
	"address": "802 Dearborn Court, Crumpler, California, 4374"
}, {
	"id": 69,
	"name": "Duncan",
	"company": "BLANET",
	"email": "duncan@blanet.io",
	"phone": "(907) 484-2111",
	"address": "928 Brighton Court, Jessie, Iowa, 8541"
}, {
	"id": 70,
	"name": "Bullock",
	"company": "XANIDE",
	"email": "bullock@xanide.org",
	"phone": "(963) 489-2557",
	"address": "961 Cooper Street, Fivepointville, New Jersey, 2631"
}, {
	"id": 71,
	"name": "Shannon",
	"company": "GLUKGLUK",
	"email": "shannon@glukgluk.com",
	"phone": "(880) 427-2576",
	"address": "663 Woodhull Street, Stagecoach, Wyoming, 2016"
}, {
	"id": 72,
	"name": "Bush",
	"company": "GAPTEC",
	"email": "bush@gaptec.ca",
	"phone": "(978) 448-3331",
	"address": "721 Sands Street, Bodega, Ohio, 7079"
}, {
	"id": 73,
	"name": "Thomas",
	"company": "AQUAFIRE",
	"email": "thomas@aquafire.tv",
	"phone": "(892) 598-3993",
	"address": "568 Lott Place, Avoca, Missouri, 6838"
}, {
	"id": 74,
	"name": "Brown",
	"company": "PORTICA",
	"email": "brown@portica.name",
	"phone": "(849) 597-2725",
	"address": "363 Anchorage Place, Balm, Washington, 2105"
}, {
	"id": 75,
	"name": "Deleon",
	"company": "GADTRON",
	"email": "deleon@gadtron.biz",
	"phone": "(893) 586-2985",
	"address": "974 Hicks Street, Crisman, Marshall Islands, 6148"
}, {
	"id": 76,
	"name": "Short",
	"company": "EXTREMO",
	"email": "short@extremo.info",
	"phone": "(885) 446-3431",
	"address": "454 Noel Avenue, Martinsville, South Carolina, 2856"
}, {
	"id": 77,
	"name": "Salas",
	"company": "OLYMPIX",
	"email": "salas@olympix.us",
	"phone": "(905) 433-2667",
	"address": "326 Jaffray Street, Cornfields, Pennsylvania, 9658"
}, {
	"id": 78,
	"name": "Goodman",
	"company": "DIGIQUE",
	"email": "goodman@digique.biz",
	"phone": "(995) 432-2714",
	"address": "406 Calyer Street, Iola, Puerto Rico, 4825"
}, {
	"id": 79,
	"name": "Potts",
	"company": "UTARA",
	"email": "potts@utara.net",
	"phone": "(885) 570-3455",
	"address": "688 Rodney Street, Cucumber, Federated States Of Micronesia, 928"
}, {
	"id": 80,
	"name": "Roberson",
	"company": "QNEKT",
	"email": "roberson@qnekt.me",
	"phone": "(906) 521-2726",
	"address": "111 Dahl Court, Bainbridge, Montana, 7209"
}, {
	"id": 81,
	"name": "Long",
	"company": "NUTRALAB",
	"email": "long@nutralab.io",
	"phone": "(811) 527-2917",
	"address": "434 Pierrepont Place, Bartonsville, South Dakota, 2363"
}, {
	"id": 82,
	"name": "Marshall",
	"company": "MACRONAUT",
	"email": "marshall@macronaut.org",
	"phone": "(832) 447-2473",
	"address": "307 Tillary Street, Hilltop, Virgin Islands, 2944"
}, {
	"id": 83,
	"name": "Cervantes",
	"company": "ZILLIDIUM",
	"email": "cervantes@zillidium.com",
	"phone": "(807) 455-2682",
	"address": "472 Bridge Street, Kapowsin, Massachusetts, 2188"
}, {
	"id": 84,
	"name": "Vega",
	"company": "GEOFORMA",
	"email": "vega@geoforma.ca",
	"phone": "(826) 561-2586",
	"address": "695 Nautilus Avenue, Hardyville, Northern Mariana Islands, 384"
}, {
	"id": 85,
	"name": "Fernandez",
	"company": "SPACEWAX",
	"email": "fernandez@spacewax.tv",
	"phone": "(930) 598-2342",
	"address": "945 Baycliff Terrace, Naomi, West Virginia, 5929"
}, {
	"id": 86,
	"name": "Kelley",
	"company": "GOLOGY",
	"email": "kelley@gology.name",
	"phone": "(968) 579-3188",
	"address": "831 Tiffany Place, Albany, Colorado, 920"
}, {
	"id": 87,
	"name": "Conley",
	"company": "GEOFORM",
	"email": "conley@geoform.biz",
	"phone": "(903) 466-2108",
	"address": "821 Locust Street, Linwood, Guam, 7685"
}, {
	"id": 88,
	"name": "Gillespie",
	"company": "BUZZMAKER",
	"email": "gillespie@buzzmaker.info",
	"phone": "(905) 489-2227",
	"address": "191 Hancock Street, Waukeenah, North Carolina, 8182"
}, {
	"id": 89,
	"name": "Dunn",
	"company": "MOMENTIA",
	"email": "dunn@momentia.us",
	"phone": "(942) 528-2790",
	"address": "641 Bethel Loop, Wyoming, American Samoa, 2866"
}, {
	"id": 90,
	"name": "Rich",
	"company": "NAXDIS",
	"email": "rich@naxdis.biz",
	"phone": "(830) 488-3300",
	"address": "601 Forest Place, Stockdale, Wisconsin, 2488"
}, {
	"id": 91,
	"name": "Dixon",
	"company": "EXOSPEED",
	"email": "dixon@exospeed.net",
	"phone": "(960) 411-2511",
	"address": "989 Mill Lane, Rushford, Nevada, 4495"
}, {
	"id": 92,
	"name": "Graves",
	"company": "STROZEN",
	"email": "graves@strozen.me",
	"phone": "(986) 492-3042",
	"address": "802 Fair Street, Bath, Alabama, 7094"
}, {
	"id": 93,
	"name": "Hubbard",
	"company": "RONELON",
	"email": "hubbard@ronelon.io",
	"phone": "(840) 586-3019",
	"address": "121 Seagate Terrace, Davenport, Alaska, 1453"
}, {
	"id": 94,
	"name": "Coleman",
	"company": "COWTOWN",
	"email": "coleman@cowtown.org",
	"phone": "(942) 573-3541",
	"address": "610 Dank Court, Sims, Oklahoma, 8018"
}, {
	"id": 95,
	"name": "Nolan",
	"company": "ISOLOGIX",
	"email": "nolan@isologix.com",
	"phone": "(942) 439-2731",
	"address": "412 Lacon Court, Clayville, Minnesota, 9802"
}, {
	"id": 96,
	"name": "Spears",
	"company": "FREAKIN",
	"email": "spears@freakin.ca",
	"phone": "(921) 508-3625",
	"address": "110 Channel Avenue, Rivers, Vermont, 3987"
}, {
	"id": 97,
	"name": "Woods",
	"company": "DIGITALUS",
	"email": "woods@digitalus.tv",
	"phone": "(939) 477-3510",
	"address": "112 Bay Street, Leroy, Florida, 5879"
}, {
	"id": 98,
	"name": "Chan",
	"company": "DIGIRANG",
	"email": "chan@digirang.name",
	"phone": "(914) 592-2730",
	"address": "613 Provost Street, Waterloo, Maine, 3137"
}, {
	"id": 99,
	"name": "Collier",
	"company": "PORTALIS",
	"email": "collier@portalis.biz",
	"phone": "(838) 418-2369",
	"address": "373 Nolans Lane, Hackneyville, Connecticut, 9153"
}, {
	"id": 100,
	"name": "Sykes",
	"company": "GRUPOLI",
	"email": "sykes@grupoli.info",
	"phone": "(888) 538-3332",
	"address": "894 Lafayette Walk, Lodoga, New York, 1831"
}]';

$data = json_decode($data_json_string);

$firstPage = 1;

$page = getVal('page', 'post');
$page = is_null($page) ? $firstPage : $page;

$pageSize = getVal('pageSize', 'post');
$pageSize = is_null($pageSize) ? 10 : $pageSize;

$rsp = array(
	'code' => 0,
	'msg' => 'success',
	'data' => array_slice($data, $pageSize * ($page - $firstPage), $pageSize),
	'count' => count($data)
);

sleep(1);
echo json_encode($rsp);
?>