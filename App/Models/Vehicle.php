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
            // Modern Row 1
            [
                'title' => '2017 Porsche 911 (991.2) Turbo S',
                'price' => 'R 3,149,999',
                'spec' => 'Exclusive Lava Orange | Twin-Turbo Flat-6',
                'image' => '/assets/images/2017 Porsche 911 (991.2) Turbo S/716871548_1270707578385355_5970121644626082192_n.jpg',
                'slug' => 'porsche-911-turbo-s-2017',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2017 Porsche 911 (991.2) Turbo S/716871548_1270707578385355_5970121644626082192_n.jpg',
                    '/assets/images/2017 Porsche 911 (991.2) Turbo S/716974506_1645136376551172_8742596011284347625_n.jpg',
                    '/assets/images/2017 Porsche 911 (991.2) Turbo S/717038069_936437986087322_6236742058352800887_n.jpg'
                ]
            ],
            [
                'title' => '2014 Porsche 911 Carrera 4S',
                'price' => 'Price on Request',
                'spec' => 'PDK Gearbox | 4WD Performance',
                'image' => '/assets/images/Porche 911-1 Carrera 4S auto (2014)/705429307_27504224952497014_7599912416823416626_n.jpg',
                'slug' => 'porsche-911-carrera-4s-2014',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/Porche 911-1 Carrera 4S auto (2014)/705429307_27504224952497014_7599912416823416626_n.jpg',
                    '/assets/images/Porche 911-1 Carrera 4S auto (2014)/706337016_27504226422496867_1131582987687013370_n.jpg',
                    '/assets/images/Porche 911-1 Carrera 4S auto (2014)/706744775_27504224495830393_4839450225172063808_n.jpg'
                ]
            ],
            [
                'title' => '2017 Porsche Cayenne Diesel Platinum Edition',
                'price' => 'Price on Request',
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
            // Modern Row 2
            [
                'title' => '2018 BMW M4 Competition',
                'price' => 'R1,175,000',
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
                'title' => '2017 Porsche 718 Cayman S PDK',
                'price' => 'Price on Request',
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
                'title' => '2014 Nissan GTR Black Edition',
                'price' => 'Price on Request',
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
            // Modern Row 3
            [
                'title' => 'Mercedes AMG A45 2016',
                'price' => 'Price on Request',
                'spec' => '2.0L Turbocharged | AMG Performance',
                'image' => '/assets/images/Mercedes AMG A45 2016/735476225_1634248207641685_7836289288096319187_n.jpg',
                'slug' => 'mercedes-amg-a45-2016',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/Mercedes AMG A45 2016/735476225_1634248207641685_7836289288096319187_n.jpg',
                    '/assets/images/Mercedes AMG A45 2016/731916580_1069755048736762_4905525429767925472_n.jpg',
                    '/assets/images/Mercedes AMG A45 2016/732309420_2070851867642909_1809375568719175282_n.jpg'
                ]
            ],
            [
                'title' => '2017 Jaguar F Type R V8 S/C Coupe',
                'price' => 'R750,000',
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
                'title' => '2011 Audi RS5',
                'price' => 'Price on Request',
                'spec' => '4.2L V8 Quattro | S tronic Precision',
                'image' => '/assets/images/2011 Audi rs5/728491032_1027191606452664_7146625296119600678_n.jpg',
                'slug' => 'audi-rs5-2011',
                'category' => 'Modern',
                'gallery' => [
                    '/assets/images/2011 Audi rs5/728491032_1027191606452664_7146625296119600678_n.jpg',
                    '/assets/images/2011 Audi rs5/728653029_942460782181422_1413648466357339075_n.jpg',
                    '/assets/images/2011 Audi rs5/730731889_1569805408126616_7693824297874912295_n.jpg'
                ]
            ],
            // Heritage Row 1
            [
                'title' => '1970 Ford Mustang Mach 1',
                'price' => 'R 2,000,000',
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
                'price' => 'R 500,000',
                'spec' => 'British Luxury Motoring | Classic Saloon',
                'image' => '/assets/images/1989 Rolls-Royce Silver Spur II/703316409_960818470183583_7248704278918741785_n.jpg',
                'slug' => 'rolls-royce-silver-spur-1989',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703316409_960818470183583_7248704278918741785_n.jpg',
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703914818_960818500183580_8582087956582053181_n.jpg',
                    '/assets/images/1989 Rolls-Royce Silver Spur II/703988238_960818616850235_9051760636449365744_n.jpg'
                ]
            ],
            [
                'title' => 'Heritage Classic: 1981 Mercedes Benz SL 500',
                'price' => 'R 550,000',
                'spec' => 'R107 Silver Icon | LHD | Timeless Elegance',
                'image' => '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674233864_917322214643543_5357440105891249331_n.jpg',
                'slug' => 'mercedes-sl-500-81',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674233864_917322214643543_5357440105891249331_n.jpg',
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/674702946_2385089615331678_2191505095808981875_n.jpg',
                    '/assets/images/1981 Mercedes Benz SL 500 R107 LHD for sale/676231387_968951179225487_7934731630374905882_n.jpg'
                ]
            ],
            // Remaining Heritage
            [
                'title' => '1977 Chevrolet Corvette Stingray',
                'price' => 'SOLD',
                'spec' => 'LS2 6.0L V8 Restomod | Tremec 6-Speed Precision',
                'image' => '/assets/images/1977 Chevrolet corvette stingray/731808258_1873065020028412_4821601629514033590_n.jpg',
                'slug' => 'corvette-stingray-77',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1977 Chevrolet corvette stingray/731808258_1873065020028412_4821601629514033590_n.jpg',
                    '/assets/images/1977 Chevrolet corvette stingray/732663403_2714258315613549_2294779883698764090_n.jpg',
                    '/assets/images/1977 Chevrolet corvette stingray/732733202_878183465330737_6114279744032546006_n.jpg'
                ]
            ],
            [
                'title' => 'Heritage Classic: Mercedes W123 200e',
                'price' => 'R 70,000',
                'spec' => 'Timeless 200e Manual | Pristine Heritage Condition',
                'image' => '/assets/images/mercedes-w123-200e/720050871_955310994197208_8653814241661819414_n.jpg',
                'slug' => 'mercedes-w123-200e',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/mercedes-w123-200e/720050871_955310994197208_8653814241661819414_n.jpg',
                    '/assets/images/mercedes-w123-200e/722302775_955572967504344_6034469551019190114_n.jpg',
                    '/assets/images/mercedes-w123-200e/722637488_955573010837673_2684274555829395612_n.jpg'
                ]
            ],
            [
                'title' => 'Heritage Classic: 1976 Cortina Mk3',
                'price' => 'R 40,000',
                'spec' => 'Classic 2.5L Straight-Six | Period-Correct Heritage',
                'image' => '/assets/images/1975 Cortina/1975 Cortina.jpg',
                'slug' => 'cortina-mk3',
                'category' => 'Heritage',
                'gallery' => [
                    '/assets/images/1975 Cortina/1975 Cortina.jpg',
                    '/assets/images/1975 Cortina/1975 Cortina Engine bay.jpg'
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
                    'audi-rs5-2011' => [
                        'description' => 'The Audi RS5 is a masterclass in balanced performance. Powered by a screaming 4.2L naturally aspirated V8 and the legendary Quattro all-wheel-drive system, it offers a visceral connection to the asphalt combined with an interior of uncompromising luxury.',
                        'specs' => [
                            'Engine' => '4.2L V8 Naturally Aspirated',
                            'Power' => '331kW of Raw Power',
                            'Drive' => 'Quattro All-Wheel Drive',
                            'Gearbox' => 'S tronic Dual-Clutch',
                            'Exhaust' => 'Factory Sport Exhaust System'
                        ]
                    ],
                    'mercedes-amg-a45-2016' => [
                        'description' => 'The Mercedes-AMG A45 is the ultimate expression of hot-hatch performance. Combining compact agility with explosive turbocharged power, it delivers an adrenaline-fueled driving experience that challenges much larger machines.',
                        'specs' => [
                            'Engine' => '2.0L Turbocharged 4-Cylinder',
                            'Power' => '375hp - 416hp',
                            'Drive' => '4MATIC All-Wheel Drive',
                            'Gearbox' => '7-Speed Dual-Clutch',
                            'Performance' => 'AMG Dynamics'
                        ]
                    ],
                    'jaguar-f-type-r-2017' => [
                        'description' => 'A breathtaking fusion of elegance and raw power. This 2017 Jaguar F Type R Coupe, finished in stunning Pearl White, is an AWD masterpiece. With its 5.0L V8 Supercharged engine delivering 405kW (550hp), it offers an exhilarating driving experience complemented by premium features like carbon ceramic brakes, Project 7 mag wheels, and a luxurious interior.',
                        'specs' => [
                            'Engine' => '5.0L V8 Supercharged',
                            'Power' => '405kW (550hp)',
                            'Torque' => '680Nm',
                            'Transmission' => '8-speed ZF Gearbox',
                            'Mileage' => '86,000km',
                            'Features' => 'Carbon Ceramic Brakes | Project 7 Mag Wheels'
                        ]
                    ],
                    'corvette-stingray-77' => [
                        'description' => 'A legendary American icon reborn. This frame-off restoration blends the aggressive, timeless curves of the 1977 Stingray with the brutal efficiency of a modern LS2 heart. It is a bridge between two eras of muscle.',
                        'specs' => [
                            'Engine' => 'LS2 6.0L V8 Restomod',
                            'Transmission' => 'Tremec 6-Speed Manual',
                            'Restoration' => 'Full Frame-Off Rebuild',
                            'Presence' => 'Classic Corvette Aesthetic',
                            'Performance' => 'Modern Powertrain Reliability'
                        ]
                    ],
                    'nissan-gtr-2014' => [
                        'description' => 'Known as Godzilla, the GTR Black Edition is a masterclass in all-wheel-drive precision. This specimen, with its exceptionally low mileage, represents the peak of Japanese engineering and street-legal dominance.',
                        'specs' => [
                            'Engine' => 'VR38DETT V6 Twin-Turbo',
                            'Mileage' => '48,000km Pristine',
                            'Drive' => 'ATTESA E-TS AWD',
                            'Trim' => 'Black Edition Luxury',
                            'Performance' => 'Precision-Tuned Handling'
                        ]
                    ],
                    'porsche-718-cayman-s' => [
                        'description' => 'The 718 Cayman S is a masterclass in balance and agility. With its mid-engine layout and the lightning-fast PDK gearbox, it offers a surgical driving experience that is as rewarding on the track as it is exhilarating on the open road.',
                        'specs' => [
                            'Engine' => 'Flat-Four Turbocharged',
                            'Transmission' => 'PDK Dual-Clutch',
                            'Layout' => 'Mid-Engine RWD',
                            'Handling' => 'Dynamic Chassis Control',
                            'Aesthetic' => 'Sleek Aerodynamic Silhouette'
                        ]
                    ],
                    'mercedes-w123-200e' => [
                        'description' => 'A beacon of reliability and understated luxury. The W123 remains the gold standard of the classic Mercedes-Benz era, offering a serene cabin experience and an indomitable mechanical spirit. This 200e manual exemplifies the purity of the driving experience.',
                        'specs' => [
                            'Engine' => '2.0L Inline-Four',
                            'Transmission' => 'Precision 4-Speed Manual',
                            'Condition' => 'Pristine Heritage',
                            'Interior' => 'Classic MB-Tex / Leather',
                            'Heritage' => 'The Legend of Reliability'
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
                    ],
                    'cortina-mk3' => [
                        'description' => 'A nostalgic journey back to the 70s. The Cortina Mk3 is more than just a car; it is a cultural touchstone. This 2.5L Straight-Six example provides a visceral, analog connection to the road that is missing in the modern world.',
                        'specs' => [
                            'Engine' => '2.5L Straight-Six',
                            'Era' => '1970s British Classic',
                            'Character' => 'Period-Correct Heritage',
                            'Condition' => 'Well-Maintained Daily',
                            'Experience' => 'Pure Analog Driving'
                        ]
                    ],
                    'mustang-mach1-1970' => [
                        'description' => '1970 Ford Mustang Mach 1. Fully restored, bolt-and-nut. Rebuilt 351 Cleveland 4V engine, all-new suspension, brand-new interior and new glass throughout. This is a properly finished restoration, not a project, ready to drive and enjoy.',
                        'specs' => [
                            'Engine' => 'Rebuilt 351 Cleveland 4V',
                            'Upgrade' => 'EFI upgrade',
                            'Restoration' => 'Full bolt-and-nut',
                            'Condition' => 'Excellent, ready to drive'
                        ]
                    ],
                    'rolls-royce-silver-spur-1989' => [
                        'description' => 'An iconic piece of British luxury motoring. This 1989 Rolls-Royce Silver Spur II presents beautifully in clean condition and offers timeless elegance, presence, and comfort that only a Rolls-Royce can deliver.',
                        'specs' => [
                            'Mileage' => '84,000km from new',
                            'Docs' => 'Original owner’s manuals & Service books included',
                            'Condition' => 'Clean, well-kept example',
                            'Type' => 'Classic luxury saloon'
                        ]
                    ],
                    'bmw-m4-competition-2018' => [
                        'description' => 'Meticulously maintained F82 M4 Competition with very low mileage. Features the full Competition Package, extensive carbon fiber accents, and a comprehensive suite of premium interior options.',
                        'specs' => [
                            'Engine' => 'Twin-Turbo Inline-6',
                            'Mileage' => '20,000km',
                            'Wheels' => '20-inch Alloy',
                            'Features' => 'Carbon Fibre Exterior Kit, Harman Kardon Sound, HUD'
                        ]
                    ],
                    'audi-rs5-2011' => [
                        'description' => 'The Audi RS5 is a masterclass in balanced performance. Powered by a screaming 4.2L naturally aspirated V8 and the legendary Quattro all-wheel-drive system, it offers a visceral connection to the asphalt combined with an interior of uncompromising luxury.',
                        'specs' => [
                            'Engine' => '4.2L V8 Naturally Aspirated',
                            'Power' => '331kW of Raw Power',
                            'Drive' => 'Quattro All-Wheel Drive',
                            'Gearbox' => 'S tronic Dual-Clutch',
                            'Exhaust' => 'Factory Sport Exhaust System'
                        ]
                    ],
                    'porsche-911-turbo-s-2017' => [
                        'description' => '2017 Porsche 911 Turbo S in Exclusive Lava Orange (PTS) with Black Leather. Porsche Exclusive Package special order extra\'s include Front Axle Lift, Factory Aerokit, Glass tilt and slide Sunroof, and Extended leather package. Meticulously maintained and still under Porsche motorplan.',
                        'specs' => [
                            'Engine' => 'Twin-Turbo Flat-6',
                            'Mileage' => '60,500km',
                            'Interior' => 'Black Leather with Lava Orange stitching',
                            'Features' => 'Front Axle Lift, Aerokit, Glass Sunroof, Heated/Cooled Seats',
                            'Status' => 'Under Porsche Motorplan'
                        ]
                    ],
                    'porsche-911-carrera-4s-2014' => [
                        'description' => 'The 2014 Porsche 911 Carrera 4S (991) combines the iconic silhouette of the 911 with the advanced capability of Porsche’s all-wheel-drive system. This model delivers a perfect blend of everyday usability and engaging performance, featuring a responsive naturally aspirated engine and the lightning-fast PDK gearbox.',
                        'specs' => [
                            'Engine' => '3.8L Flat-6 Naturally Aspirated',
                            'Drive' => 'Porsche Traction Management (PTM) AWD',
                            'Transmission' => '7-Speed PDK Dual-Clutch',
                            'Handling' => 'Porsche Active Suspension Management (PASM)',
                            'Experience' => 'Classic 911 Sport-Luxury'
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
