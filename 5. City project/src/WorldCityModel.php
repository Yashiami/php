<?php

class WorldCityModel {
    public function __construct(
        public int $id,
        public string $city,
        public string $cityAscii,
        public float $lat,
        public float $lng,
        public string $country,
        public string $iso2,
        public string $iso3,
        public string $adminName,
        public string $capital,
        public int $population
    ) {}

    public function getCityWithCountry(): string {
        return $this->city . ', ' . $this->country;
    }

    public function getFlag(): string {
        $flag = '';
        $unicodePoint = hexdec(strtoupper($this->iso2));

        if ($unicodePoint !== 0) {
            $flag .= '&#' . $unicodePoint . ';';
        }

        return $flag;
    }
}