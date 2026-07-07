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
            // Row 1 (Modern)
            [
                'title' => '2017 Porsche 911 (991.2) Turbo S',
                'price' => 'R 3,500,000',
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
                'price' => 'R 1,550,000',
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
                'price' => 'R 650,000',
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
            // Row 2
            [
                'title' => '2018 BMW M4 Competition',
                'price' => 'R 1,300,000',
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
                'price' => 'R 1,100,000',
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
                'price' => 'R 2,000,000',
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
            // Row 3 (Modern)
            [
                'title' => 'Mercedes AMG A45 2016',
                'price' => 'R 450,000',
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
                'price' => 'R 850,000',
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
                'price' => 'R 325,000',
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
            // Row 1 (Heritage)
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
...
