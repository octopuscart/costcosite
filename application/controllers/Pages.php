<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    function mask($masktype) {
        $products = array(
            "n95" => array(
                "title" => "N95 Medical Mask",
                "layer" => "Four-layer filtration",
                "item_code" => "COSTCO-N95-1",
                "protection" => "Dust / Haze / Germs / Flu",
                "points" => [
                    "NOISH Certified N95 disposable face mask for adults - General adjustment",
                    "Can prevent patients from spraying droplets, reducing droplet volume and spraying speed.",
                    "Can block virus-containing droplet cores and prevent inhalation by the wearer.",
                    "Keep healthy and safe when at work or out by wearing one of our disposable face mask.",
                    "Unique heightening nose design, adjustable nose clip, thickened sponge pad to ensure tight fit and more comfortable to wear",
                    "Great gift: This can be a good choice as gift for your family, friends, lovers.It would be a must-have item for cycling camping travel.",
                    "The granular breathing mask is made of hot-air cotton, meltblown cloth and non-woven fabric, which is non-irritating and hypoallergenic to you. Its filtration efficiency (dust removal rate) is greater than 95%, and the filter material is harmless to the human body.",
                ],
                "images" => [
                    "covid19/n95/n95_f.JPG",
                    "covid19/n95/n95_s.JPG",
                    "covid19/n95/n95_b.JPG",
                    "covid19/maskguide.jpg",
                ]
            ),
            "kn95" => array(
                "title" => "KN95 Medical Mask",
                "layer" => "Four-layer filtration",
                "item_code" => "COSTCO-KN95-1",
                "protection" => "Dust / Haze / Germs / Flu",
                "points" => [
                    "Four-layer protection: The outer layer and mouth layer are non-woven;The middle two layers are hot air cotton and melt-blown cloth.",
                    "Can prevent patients from spraying droplets, reducing droplet volume and spraying speed.",
                    "Can block virus-containing droplet cores and prevent inhalation by the wearer.",
                    "Keep healthy and safe when at work or out by wearing one of our disposable face mask.",
                    "Unique heightening nose design, adjustable nose clip, thickened sponge pad to ensure tight fit and more comfortable to wear",
                    "Great gift: This can be a good choice as gift for your family, friends, lovers.It would be a must-have item for cycling camping travel.",
                    "The granular breathing mask is made of hot-air cotton, meltblown cloth and non-woven fabric, which is non-irritating and hypoallergenic to you. Its filtration efficiency (dust removal rate) is greater than 95%, and the filter material is harmless to the human body.",
                ],
                "images" => [
                    "covid19/kn95/kn95_f.jpg",
                    "covid19/kn95/kn95_s.jpg",
                    "covid19/n95/n95_b.JPG",
                    "covid19/maskguide.jpg",
                ]
            ),
            "3ply-medical-mask" => array(
                "title" => "3 Ply Disposable Medical Mask",
                "layer" => "Three-layer filtration",
                "item_code" => "COSTCO-3PLY-1",
                "protection" => "Dust / smog / germs / flu",
                "points" => [
                    "This product consists of a mask body, a nose clip, and earband，the inner and outer layers of the mask are made
of non-woven material，intermediate layer is polypropylene meltblown cloth，nose clip made of plastic
material，and the mask band is made of elastic material or non-woven fabric.",
                    "It is suitable for the health care of the wearer in the
general medical environment without the risk of body
fluids and splashes.",
                    "Make of safety medical standard material, electrostatic polypropylene micro-fiber material, 3-ply disposable mask for adults, general adjustment - stay healthy and safe when at work or out.",
                    "Filters over 70% of airborne particles, fumes, and chemical odors. Keep people stay healthy and safe when at work or out by protecting your airways from pollutants and allergens to help you breathe easier and stay germ free as much as possible.",
                    "This medical face mask features an adjustable nose wire to ensure a perfect fit. Comfortable elastic earloop, extra-soft ear loops eliminate pressure to the ears. Inner layer is made of soft facial tissue, no dye, gentle to the skin.",
                    "The granular breathing mask is made of hot-air cotton, meltblown cloth and non-woven fabric, which is non-irritating and hypoallergenic to you. Its filtration efficiency (dust removal rate) is greater than 95%, and the filter material is harmless to the human body.",
                ],
                "images" => [
                    "covid19/3plymask/3ply_f.jpg",
                    "covid19/3plymask/masklayer.jpg",
                    "covid19/3plymask/3ply_s.jpg",
                    "covid19/maskguide.jpg",
                ]
            ),
            "3ply-civil-mask" => array(
                "title" => "3 Ply Disposable Civil Mask",
                "layer" => "Three-layer filtration",
                "item_code" => "COSTCO-3PLY-2",
                "protection" => "Dust / smog / germs / flu",
                "points" => [
                    "This product consists of a mask body, a nose clip, and earband，the inner and outer layers of the mask are made
of non-woven material，intermediate layer is polypropylene meltblown cloth，nose clip made of plastic
material，and the mask band is made of elastic material or non-woven fabric.",
                    "It is suitable for the health care of the wearer in the
general medical environment without the risk of body
fluids and splashes.",
                    "Make of safety medical standard material, electrostatic polypropylene micro-fiber material, 3-ply disposable mask for adults, general adjustment - stay healthy and safe when at work or out.",
                    "Filters over 70% of airborne particles, fumes, and chemical odors. Keep people stay healthy and safe when at work or out by protecting your airways from pollutants and allergens to help you breathe easier and stay germ free as much as possible.",
                    "This medical face mask features an adjustable nose wire to ensure a perfect fit. Comfortable elastic earloop, extra-soft ear loops eliminate pressure to the ears. Inner layer is made of soft facial tissue, no dye, gentle to the skin.",
                    "The granular breathing mask is made of hot-air cotton, meltblown cloth and non-woven fabric, which is non-irritating and hypoallergenic to you. Its filtration efficiency (dust removal rate) is greater than 95%, and the filter material is harmless to the human body.",
                ],
                "images" => [
                    "covid19/3plymask/civilmask.jpg",
                    "covid19/3plymask/masklayer.jpg",
                    "covid19/3plymask/3ply_s.jpg",
                    "covid19/maskguide.jpg",
                ]
            ),
        );
        $data['unset'] = $masktype;
        $data['allproducts'] = $products;
        $data['product'] = $products[$masktype];
        $this->load->view('pages/mask', $data);
    }

    function protection($ptype) {
        $products = array(
            "ppe-suit" => array(
                "title" => "PPE Suits For Hospital",
                "material" => "Composite nonwoven",
                "item_code" => "COSTCO-PPEH-1",
                "certification" => "CE & CNAS",
                "points" => [
                    "Composite nonwoven (has good permeability and barrier)",
                    "Jumpsuit structure, consists of a hooded top and trousers.",
                    "Suitable for clinical staff to provide barrier & protection in the work environment with the patient’s blood, body fluids, secretions.",
                    "This product is non-sterile; It can be used in hospital, just hospital staff need to do sterilization before using;",
                    "It can effectively resist the penetration of bacteria, viruses, alcohol, blood, body fluids, air dust particles, can effectively protect wearer from the theat of infection."
                ],
                "images" => [
                    "covid19/ppesuit/suit1.jpg",
                    "covid19/ppesuit/suit2.jpg",
                ]
            ),
            "protect-cloth" => array(
                "title" => "Disposable Protective Clothing ",
                "material" => "PP/PP+PE/SMS/Microporous",
                "item_code" => "COSTCO-PPC-2",
                "certification" => "ISO CE FDA",
                "points" => [
                    "Disposable coveralls provide the protection of standard coveralls without the hassle of having to decontaminate used suits.",
                    "Jumpsuit structure, consists of a hooded top and trousers.",
                    "Suitable for clinical staff to provide barrier & protection in the work environment with the patient’s blood, body fluids, secretions.",
                    "This suits are breathable for extended wear, yet are also fluid resistant, with an ideal balance of protection, durability and comfort.",
                    "It can effectively resist the penetration of bacteria, viruses, alcohol, blood, body fluids, air dust particles, can effectively protect wearer from the theat of infection."
                ],
                "images" => [
                    "covid19/protectcloth/pcloth1.jpg",
                ]
            ),
            "latex-gloves" => array(
                "title" => "Disposable Latex Gloves",
                "material" => "Smooth Lining Latex",
                "item_code" => "COSTCO-LGVS-1",
                "certification" => "ISO / FDA",
                "points" => [
                    "The disposable home gloves are made of nitrile rubber material, high quality, non-toxic, aseptic, healthy to use.",
                    "No plasticizer, no ester, no silicone oil, no powder.",
                    "Reasonable thickness, good touch feeling, good flexibility, acid and alkali resistant, oil resistant, anti bacteria.",
                    "Ideal for home household cleaning use, sanitary inspection, food industry, chemical industry etc.",
                ],
                "images" => [
                    "covid19/gloves/glov1.JPG",
                    "covid19/gloves/glov2.JPG",
                ]
            ),
            "safety-goggles" => array(
                "title" => "Safety Goggles",
                "material" => "PVC",
                "item_code" => "COSTCO-SFGG-1",
                "certification" => "ISO",
                "points" => [
                    "Anti-Impact Anti Chemical Splash Safety Goggles.",
                    "Economy Clear Lens Eye Protection Dust Laboratory Glasses Transparent.",
                ],
                "images" => [
                    "covid19/goggles/goggles1.jpg",
                    "covid19/goggles/goggles2.jpg",
                ]
            ),
            "ir-thermometer" => array(
                "title" => "Non Contact Forehead IR Thermometer",
                "material" => "Plastic",
                "item_code" => "COSTCO-IRTH-1",
                "certification" => "ISO / FDA 501K ",
                "points" => [
                    "Ideal for quickly detecting elevated body temperature.",
                    "Designed to scan and monitor individuals for elevated temperature.",
                    "Measures body temperature between 89.6 and 108.5°F (32.0 to 42.5°C) without contact.",
                    'The optimum measurement distance is 1.9" to 5.9" (5 to 15cm). An adjustable alarm alerts the user both visually and audibly when the temperature exceeds a programmed limit.'
                ],
                "images" => [
                    "covid19/THERMOMETERS/THERMOMETERS.jpg",
                ]
            ),
            "face-shield" => array(
                "title" => "Transparent Protective Face Shield",
                "material" => "PET",
                "item_code" => "COSTCO-FCSH-1",
                "certification" => "ISO",
                "points" => [
                    "This protective shield has an adjustable headband and a convenient flip up visor.",
                    "Highly transparent shield, double-sided anti-fog.Protective film on both sides to prevent fogging on both sides.",
                    "Can prevent oil fume and saliva from splashing.",
                    "Use when going out to prevent saliva splashing.",
                    "Transparent lens, can clearly see things outside the lens."
                ],
                "images" => [
                    "covid19/faceshield/face_shield1.JPG",
                ]
            ),
        );
        $data['unset'] = $ptype;
        $data['allproducts'] = $products;
        $data['product'] = $products[$ptype];
        $this->load->view('pages/protection', $data);
    }

    public function catalogue() {
        //  $this->load->view('pages/catalogue');
    }

    function privacy_policy() {
        $this->load->view('pages/pp');
    }

}
