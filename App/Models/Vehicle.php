<?php

namespace App\Models;

use Core\Model;
use PDO;

class Vehicle extends Model {
    public static function getAll() {
        $db = static::getDB();
        
        if ($db) {
            $stmt = $db->query('SELECT * FROM vehicles ORDER BY created_at DESC');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // Mock data for a high-end experience
        return [
            [
                'title' => '2021 Porsche 718 Cayman GT4 Auto',
                'price' => 'R 2,999,999',
                'spec' => '309 kW | 9 000 km',
                'image' => '/assets/images/2021 Porsche 718 Cayman 718 Cayman GT4 Auto FSH/1.jpg',
                'slug' => 'porsche-718-cayman-gt4-2021',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2021 Porsche 718 Cayman 718 Cayman GT4 Auto FSH/1.jpg',
                    '/assets/images/2021 Porsche 718 Cayman 718 Cayman GT4 Auto FSH/2.jpg',
                    '/assets/images/2021 Porsche 718 Cayman 718 Cayman GT4 Auto FSH/3.jpg'
                ]
            ],
            [
                'title' => 'Porsche 991.2 GT3 R',
                'price' => 'R 10,999,999',
                'spec' => '1 of only 2 in South Africa | Well Maintained',
                'image' => '/assets/images/Porsche 991.2 GT3 R/1.jpg',
                'slug' => 'porsche-991-2-gt3-r',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/Porsche 991.2 GT3 R/1.jpg',
                    '/assets/images/Porsche 991.2 GT3 R/2.jpg',
                    '/assets/images/Porsche 991.2 GT3 R/3.jpg'
                ]
            ],
            [
                'title' => '2025 BMW M5 V8 Hybrid',
                'price' => 'R 2,999,999',
                'spec' => '535kW Combined | M Sport Package',
                'image' => '/assets/images/2025 BMW M5 V8 Hybrid/1.jpg',
                'slug' => 'bmw-m5-hybrid-2025',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2025 BMW M5 V8 Hybrid/1.jpg',
                    '/assets/images/2025 BMW M5 V8 Hybrid/2.jpg',
                    '/assets/images/2025 BMW M5 V8 Hybrid/3.jpg'
                ]
            ],
            [
                'title' => 'Lamborghini Gallardo LP520 GT3 Evo+',
                'price' => 'R 3,099,999',
                'spec' => '5.2L V10 Engine 600hp | Motec ECU',
                'image' => '/assets/images/lambo-gallardo-520/1.jpg',
                'slug' => 'lamborghini-gallardo-lp520-gt3',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/lambo-gallardo-520/1.jpg',
                    '/assets/images/lambo-gallardo-520/2.jpg',
                    '/assets/images/lambo-gallardo-520/3.jpg'
                ]
            ],
            [
                'title' => '2023 Bentley Continental GT V8',
                'price' => 'R 4,999,999',
                'spec' => '4.0L V8 | 11,900km',
                'image' => '/assets/images/2023 Bentley Continental GT V8/1.jpg',
                'slug' => 'bentley-continental-gt-2023',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2023 Bentley Continental GT V8/1.jpg',
                    '/assets/images/2023 Bentley Continental GT V8/2.jpg',
                    '/assets/images/2023 Bentley Continental GT V8/3.jpg'
                ]
            ],
            [
                'title' => '2017 Lamborghini Huracan Lp 580-2',
                'price' => 'R 5,599,999',
                'spec' => '19,292 Miles | Aero carbon Kit',
                'image' => '/assets/images/2017 Lamborghini huracan/748510219_1384839036904105_7361826602989264169_n.jpg',
                'slug' => 'lamborghini-huracan-2017',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 Lamborghini huracan/748510219_1384839036904105_7361826602989264169_n.jpg',
                    '/assets/images/2017 Lamborghini huracan/748813094_1571712484510253_2964823627781974293_n.jpg',
                    '/assets/images/2017 Lamborghini huracan/749250270_1340486324876389_4735125514264394517_n.jpg'
                ]
            ],
            [
                'title' => '2017 Porsche Cayenne Diesel Platinum Edition',
                'price' => 'R 649,999',
                'spec' => '3.0 V6 Diesel | Top Spec',
                'image' => '/assets/images/2017 Porsche Cayenne Diesel Platinum Edition/719425450_2493268917780333_5008344261992661509_n.jpg',
                'slug' => 'porsche-cayenne-diesel-2017',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 Porsche Cayenne Diesel Platinum Edition/719425450_2493268917780333_5008344261992661509_n.jpg',
                    '/assets/images/2017 Porsche Cayenne Diesel Platinum Edition/719948911_982257381274506_6142501291431957116_n.jpg',
                    '/assets/images/2017 Porsche Cayenne Diesel Platinum Edition/720361287_987157440694128_5577736774024899701_n.jpg'
                ]
            ],
            [
                'title' => '2017 LAMBORGHINI HURACAN LP610-4 Coupe',
                'price' => 'R 7,999,999',
                'spec' => '900hp (93 Octane) | Twin Turbo System',
                'image' => '/assets/images/2017 LAMBORGHINI HURACAN LP610-4 Coupe/1.jpg',
                'slug' => 'lamborghini-huracan-lp610-4',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 LAMBORGHINI HURACAN LP610-4 Coupe/1.jpg',
                    '/assets/images/2017 LAMBORGHINI HURACAN LP610-4 Coupe/2.jpg',
                    '/assets/images/2017 LAMBORGHINI HURACAN LP610-4 Coupe/3.jpg'
                ]
            ],
            [
                'title' => '2017 Jaguar F Type R V8 S/C Coupe',
                'price' => 'R 849,999',
                'spec' => 'Jaguar F Type R Coupe AWD | 5.0 V8 Supercharge',
                'image' => '/assets/images/2017 Jaguar F Type R V8 SC Coupe/667372112_910349798653174_1842394163980602604_n.jpg',
                'slug' => 'jaguar-f-type-r-2017',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 Jaguar F Type R V8 SC Coupe/667368669_1432966918525839_8252283239627502812_n.jpg',
                    '/assets/images/2017 Jaguar F Type R V8 SC Coupe/667372112_910349798653174_1842394163980602604_n.jpg',
                    '/assets/images/2017 Jaguar F Type R V8 SC Coupe/667531436_962271046266965_3585801887348927560_n.jpg'
                ]
            ],
            [
                'title' => '2014 Nissan GTR Black Edition',
                'price' => 'R 1,999,999',
                'spec' => 'VR38DETT V6 Twin-Turbo | Pristine Low Mileage',
                'image' => '/assets/images/2014 NISSAN GTR BLACK EDITION/705841661_1059276023442369_5460793877047879840_n.jpg',
                'slug' => 'nissan-gtr-2014',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2014 NISSAN GTR BLACK EDITION/705841661_1059276023442369_5460793877047879840_n.jpg',
                    '/assets/images/2014 NISSAN GTR BLACK EDITION/707426536_2522369898220075_8223645382967765423_n.jpg',
                    '/assets/images/2014 NISSAN GTR BLACK EDITION/707463737_1012788997870050_4873462444024046242_n.jpg'
                ]
            ],
            [
                'title' => '2017 Porsche 718 Cayman S PDK',
                'price' => 'R 1,099,999',
                'spec' => 'Mid-Engine Precision | PDK Gearbox',
                'image' => '/assets/images/2017 Porsche 718 Cayman S PDK/727773552_4612311928999958_1827257494803287929_n.jpg',
                'slug' => 'porsche-718-cayman-s',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 Porsche 718 Cayman S PDK/727773552_4612311928999958_1827257494803287929_n.jpg',
                    '/assets/images/2017 Porsche 718 Cayman S PDK/727788077_4612312012333283_6665291926642616079_n.jpg',
                    '/assets/images/2017 Porsche 718 Cayman S PDK/728196347_4612311958999955_7984657632887830714_n.jpg'
                ]
            ],
            [
                'title' => '2018 BMW M4 Competition',
                'price' => 'R 1,299,999',
                'spec' => 'Competition Package | Twin-Turbo Performance',
                'image' => '/assets/images/2018 BMW M4 Competition/705967808_10227553666582345_3051814901490278548_n.jpg',
                'slug' => 'bmw-m4-competition-2018',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2018 BMW M4 Competition/705967808_10227553666582345_3051814901490278548_n.jpg',
                    '/assets/images/2018 BMW M4 Competition/706017809_10227553664022281_7346039577727955178_n.jpg',
                    '/assets/images/2018 BMW M4 Competition/706691316_10227553662062232_2345947597367062768_n.jpg'
                ]
            ],
            [
                'title' => '1959 Mercedes-Benz 190SL Roadster',
                'price' => 'R 2,999,999',
                'spec' => 'Fully Restored | Matching Numbers',
                'image' => '/assets/images/1959 Mercedes-Benz 190SL Roadster/1.jpg',
                'slug' => 'mercedes-benz-190sl-1959',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1959 Mercedes-Benz 190SL Roadster/1.jpg',
                    '/assets/images/1959 Mercedes-Benz 190SL Roadster/2.jpg',
                    '/assets/images/1959 Mercedes-Benz 190SL Roadster/3.jpg'
                ]
            ],
            [
                'title' => 'Porsche 993 GT2 Evo',
                'price' => 'R 6,499,999',
                'spec' => '4 Litre Engine | Full Suspension',
                'image' => '/assets/images/Porsche 993 GT2 Evo/1.jpg',
                'slug' => 'porsche-993-gt2-evo',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/Porsche 993 GT2 Evo/1.jpg',
                    '/assets/images/Porsche 993 GT2 Evo/2.jpg',
                    '/assets/images/Porsche 993 GT2 Evo/3.jpg'
                ]
            ],
            [
                'title' => '1990 Ferrari 348 TS',
                'price' => 'R 1,999,999',
                'spec' => 'Gated Manual | 79,000kms',
                'image' => '/assets/images/1990 Ferrari 348 TS/1.jpg',
                'slug' => 'ferrari-348-ts-1990',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1990 Ferrari 348 TS/1.jpg',
                    '/assets/images/1990 Ferrari 348 TS/2.jpg',
                    '/assets/images/1990 Ferrari 348 TS/3.jpg'
                ]
            ],
            [
                'title' => '1981 Mercedes Benz SL 500',
                'price' => 'R 499,999',
                'spec' => 'R107 Silver Icon | LHD',
                'image' => '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674233864_917322214643543_5357440105891249331_n.jpg',
                'slug' => 'mercedes-sl-500-81',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674233864_917322214643543_5357440105891249331_n.jpg',
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674702946_2385089615331678_2191505095808981875_n.jpg',
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/676231387_968951179225487_7934731630374905882_n.jpg'
                ]
            ],
            [
                'title' => '1970 Ford Mustang Mach 1',
                'price' => 'R 1,999,999',
                'spec' => '351 Cleveland V8 | EFI Upgrade',
                'image' => '/assets/images/1970 Ford mustang mach 1/725393723_1545093473680554_6997100395501502856_n.jpg',
                'slug' => 'mustang-mach1-1970',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1970 Ford mustang mach 1/725393723_1545093473680554_6997100395501502856_n.jpg',
                    '/assets/images/1970 Ford mustang mach 1/725678149_2846835648992294_5316960272738129077_n.jpg',
                    '/assets/images/1970 Ford mustang mach 1/725985391_1317948647164227_5392817434577280434_n.jpg'
                ]
            ],
            [
                'title' => '1989 Rolls-Royce Silver Spur II',
                'price' => 'R 599,999',
                'spec' => 'British Luxury Motoring | Classic Saloon',
                'image' => '/assets/images/1989 Rolls-Royce Silver Spur II/703316409_960818470183583_7248704278918741785_n.jpg',
                'slug' => 'rolls-royce-silver-spur-1989',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703316409_960818470183583_7248704278918741785_n.jpg',
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703914818_960818500183580_8582087956582053181_n.jpg',
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703988238_960818616850235_9051760636449365744_n.jpg'
                ]
            ]
        ];
    }

    public static function findBySlug($slug) {
        $all = static::getAll();
        foreach ($all as $vehicle) {
            if ($vehicle['slug'] === $slug) {

                // Vehicle-specific high-end narratives
                $details = [
                    'porsche-718-cayman-gt4-2021' => [
                        'description' => 'The cleanest GT4 AROUND, WITH full BODY PPF and full franchise service history. Major service recently done at Porsche.',
                        'specs' => [
                            'Model Year' => '2021',
                            'Mileage' => '9,000 km',
                            'Power' => '309 kW',
                            'Performance' => '0-100km/h in 3.9s',
                            'Transmission' => 'Automatic',
                            'Fuel' => 'Petrol',
                            'Seats' => '2',
                            'Service History' => 'Full Franchise Service History'
                        ]
                    ],
                    'porsche-991-2-gt3-r' => [
                        'description' => 'Well maintained 1 of only 2 in South Africa Porsche 991.2 GT3 R. Run and well looked after and prepared by MJR Motorsport. All updates done as per manufacturer. Spare package included.',
                        'specs' => [
                            'Status' => 'Well Maintained',
                            'Rarity' => '1 of only 2 in South Africa',
                            'Preparation' => 'MJR Motorsport',
                            'Maintenance' => 'All updates done as per manufacturer',
                            'Included' => 'Spare package'
                        ]
                    ],
                    'mercedes-benz-190sl-1959' => [
                        'description' => 'A 1959 Mercedes-Benz 190SL Roadster. This is a fully restored, matching numbers example. Finished in Anthracite grey metalic with tan leather interior and black soft top. Equipped with the original Solex carbs this example performs exceptionally well and recently completed a 1,600km rally without skipping a beat.',
                        'specs' => [
                            'Model' => '190SL Roadster',
                            'Year' => '1959',
                            'Condition' => 'Fully Restored, Matching Numbers',
                            'Exterior' => 'Anthracite grey metallic',
                            'Interior' => 'Tan leather',
                            'Mechanical' => 'Original Solex carbs'
                        ]
                    ],
                    'porsche-993-gt2-evo' => [
                        'description' => 'This Porsche 993 GT2 Evo was originally built by Heiner Zimmer. It was modified into a Cup car, used for racing. It have a 4 litre engine, full suspension, abs and an air cooled system.',
                        'specs' => [
                            'Engine' => '4 Litre',
                            'Type' => 'Cup Car (Modified)',
                            'Features' => 'Full suspension, ABS, Air cooled system'
                        ]
                    ],
                    'ferrari-348-ts-1990' => [
                        'description' => 'The Ferrari 348ts with a gated manual transmission was the final mid-engine V8 commissioned by Enzo Ferrari himself before he passed on and it carries his legacy in this incredibly analogue driver focused machine. It is truly magnificent to admire and flaunts an undoubtedly pretty physique from flared arches to the sleek side air scoops akin to the very famous testarossa, this was the epiphany of a bold statement back in the 90’s. This particular example is finished in the best color Rosso Corsa red with beige leather interior and has done a mere 79000kms from new with full service history.',
                        'specs' => [
                            'Model' => '348 TS',
                            'Year' => '1990',
                            'Transmission' => 'Gated Manual',
                            'Mileage' => '79,000 km',
                            'Exterior' => 'Rosso Corsa Red',
                            'Interior' => 'Beige leather'
                        ]
                    ],
                    'lamborghini-gallardo-lp520-gt3' => [
                        'description' => '🔥 Lamborghini Galardo LP520 GT3 Evo+. Super fast and sorted racecar eligible for multiple championships in SA. Upgrades include 5.2L V10 Engine 600hp, Motec ECU incl. dash, Ohlins 3 Way adjustable Suspension, and Evo Aero Upgrades. Great car to jump in and go fast straight away.',
                        'specs' => [
                            'Engine' => '5.2L V10',
                            'Power' => '600hp',
                            'ECU' => 'Motec incl. dash',
                            'Suspension' => 'Ohlins 3 Way adjustable',
                            'Upgrades' => 'Evo Aero',
                            'Includes' => '2x Sets Wheels, Wheel Socket, Air Lance, Download Cable, Various small parts'
                        ]
                    ],
                    'bentley-continental-gt-2023' => [
                        'description' => 'The Bentley Continental GT v8 is a groundbreaking luxury convertible. This Bentley Continental GT V8 offers a unique combination of power, craftsmanship and stunning automotive design, and is available with the phenomenally powerful 4.0 litre V8 petrol engine.',
                        'specs' => [
                            'Mileage' => '11,900km',
                            'Engine' => '4.0 litre V8 petrol',
                            'Features' => 'Fine leather interior, Fine leather roof lining, Chrome exterior trim, Chrome mesh grille, Wood finish dashboard trim, 21" rims, Crystal headlights, Bentley logo embossed on headrests, 360-degree camera, Illuminated aluminium door step panels, Deployable rear spoiler, Blind spot assist, Black and red interior leather combination, Adjustable air suspension, Onboard navigation, Park Assist, Cruise control, Heated seats, Tyre pressure monitoring, Multifunctional driver\'s display'
                        ]
                    ],
                    'lamborghini-huracan-2017' => [
                        'description' => '2017 Lamborghini Huracan Lp 580-2. This car is super clean, with a rare spec. It has plenty of modifications that made this build the perfect look.',
                        'specs' => [
                            'Mileage' => '19,292 Miles',
                            'Suspension' => 'Novitec',
                            'Aero' => 'Carbon Kit | Forged carbon front lip',
                            'Exhaust' => 'Aftermarket',
                            'Wheels' => 'Aftermarket spoke',
                            'Included' => '2 Keys',
                            'Title' => 'Clean'
                        ]
                    ],
                    'bmw-m5-hybrid-2025' => [
                        'description' => '🔥 2025 BMW M5 V8 Hybrid. 2025 Model, 19,500 km, 535kw combined. Automatic, M Sport Package, Full Service History, Balance of BMW Warranty & Maintenance Plan. Finance Available.',
                        'specs' => [
                            'Model Year' => '2025',
                            'Mileage' => '19,500 km',
                            'Power' => '535kW Combined',
                            'Transmission' => 'Automatic',
                            'Package' => 'M Sport Package',
                            'Features' => 'LED Kidney grill, LED Headlights, Digital Instrument Cluster, Leather Interior, Reverse Camera & PDC, Multi-function Steering Wheel, Electric Seats, Keyless Start, Climate Control, Premium Alloy Wheels'
                        ]
                    ],
                    'porsche-cayenne-diesel-2017' => [
                        'description' => '2017 Porsche Cayenne Diesel Platinum Edition in pristine condition. A top-spec, highly refined luxury SUV that balances commanding presence with impressive fuel efficiency. Loaded with premium features.',
                        'specs' => [
                            'Engine' => '3.0 V6 Diesel',
                            'Mileage' => '149,000km',
                            'Transmission' => '8 Speed Auto',
                            'Interior' => 'Leather Seats With Alcantara Centres (GTS Spec)',
                            'Features' => 'Sports Chrono, Adaptive LED, Apple Car Play, Panoramic Sunroof'
                        ]
                    ],
                    'mercedes-sl-500-81' => [
                        'description' => 'The R107 SL is the definitive expression of the jet-set lifestyle. This 1981 Silver Icon blends effortless open-top cruising with an imposing presence that has never gone out of style.',
                        'specs' => [
                            'Chassis' => 'R107 Classic',
                            'Drive' => 'Left-Hand Drive (LHD)',
                            'Exterior' => 'Classic Silver Metallic',
                            'Tops' => 'Hard Top & Soft Top Included',
                            'Status' => 'Timeless Luxury Icon'
                        ]
                    ]
                ];

                if (isset($details[$slug])) {
                    $vehicle['description'] = $details[$slug]['description'];
                    $vehicle['specs'] = $details[$slug]['specs'];
                }

                return $vehicle;
            }
        }
        return null;
    }
}
