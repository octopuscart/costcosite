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
                "protection"=>"Dust / Haze / Germs / Flu",
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
                    "covid19/n95/n95_b.JPG"]
            ),
            "kn95" => array(
                "title" => "KN95 Medical Mask",
                "layer" => "Four-layer filtration",
                "item_code" => "COSTCO-KN95-1",
                "protection"=>"Dust / Haze / Germs / Flu",
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
                    "covid19/n95/n95_b.JPG"
                ]
            ),
            "3ply-medical-mask" => array(
                "title" => "3 Ply Disposable Medical Mask",
                "layer" => "Three-layer filtration",
                "item_code" => "COSTCO-3PLY-1",
                "protection"=>"Dust / smog / germs / flu",
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
                    "covid19/3plymask/3ply_s.jpg"
                ]
            ),
            "3ply-civil-mask" => array(
                "title" => "3 Ply Disposable Civil Mask",
                "layer" => "Three-layer filtration",
                "item_code" => "COSTCO-3PLY-2",
                "protection"=>"Dust / smog / germs / flu",
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
                    "covid19/3plymask/3ply_s.jpg"
                ]
            ),
        );
        $data['unset'] = $masktype;
        $data['allproducts'] = $products;
        $data['product'] = $products[$masktype];
        $this->load->view('pages/mask', $data);
    }

    public function catalogue() {
        //  $this->load->view('pages/catalogue');
    }

    function privacy_policy() {
        $this->load->view('pages/pp');
    }

}
