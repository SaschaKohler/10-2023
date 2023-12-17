<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    protected $counter = 0;


    public function definition()
    {
        $Lplate = ['PE-201DZ', 'PE-886BY', 'PE-356FI', 'PE-382EK', 'PE-304EG',
            'PE-463EU', 'PE-218ED', 'PE-753ET', 'PE-990DJ', 'PE-259EW', 'PE-483EE',
            'PE-759EX', 'PE-374DM', 'PE-252FJ', 'PE-412FP', 'O-187.00'];

        $inspec = ['01-Jul-21', '01-Jul-21', null,null, '01-Dec-20', '01-Feb-21',
            '01-Mar-21', '01-Apr-21', '01-May-21', '01-May-21', '01-Jul-21', '01-Sep-21', '01-Jul-23',
            '01-Aug-23', null, '01-Mar-21'];

        $insurance_comp = ['keine Polizze', 'Allianz', 'OÖ Versicherung', 'Allianz', 'Allianz', 'Uniqa',
            'Zürich', 'keine Polizze', 'Wiener Städtische', 'Uniqa', 'keine Polizze', 'Wiener Städtische',
            'Generali', 'Zürich', 'Wiener Städtische', 'Wüstenrot',];

        //        $type = [1, 2, 3, 3, 2, 4, 5, 5, 6, 5, 4, 6, 2, 5, 4, 2];
        $type = [1, 2, 3, 3, 2, 4, 5,5, 6, 5, 4, 6, 2, 5, 4, 2];

        $branding = ['Audi A5', 'John Deere 6230', 'Claas Tucano 420', 'Claas Lexion 620', 'Fendt',
            'Opel Movano II', 'Pongratz 1 Achs', 'Tema Tridem',
            'Nissan Navarra', 'Hochedlinger 1 Achs', 'Opel Movano I',
            'Ford Ranger', 'Steyr Expert CVT', 'Eduard tandem', 'Opel Movano III', 'Steyr 8075'];

        $permit = [
            '23.11.2011', '15.07.2010', '02.07.2020', '19.05.2017', '02.12.2015', '26.02.2018', '25.03.2016', '04.04.2018',
            '31.05.2012', '14.05.2018', '31.07.2015', '12.09.2017', '06.06.2020', '30.08.2020', '21.10.2021', '22.02.1988'];

        $manager = ['Versfinanz', 'Versfinanz', 'Versfinanz', 'Versfinanz', 'Versfinanz', 'Lesterl', '-',
            'Versfinanz', 'Versfinanz', 'Lesterl ?', 'Versfinanz', 'Versfinanz ', 'Undesser', 'Versfinanz',
            'Versfinanz', 'Versfinanz'];


        $typ = $type[$this->counter];
        $brand = $branding[$this->counter];
        $perm = $permit[$this->counter];
        $plate = $Lplate[$this->counter];
        $insp = $inspec[$this->counter];
        $ins_comp = $insurance_comp[$this->counter];
        $ins_man = $manager[$this->counter];

        $this->counter += 1;

        return [
            'type' => $typ,
            'branding' => $brand,
            'permit' => Carbon::parse($perm)->format('Y-m-d'),
            'license_plate' => $plate,
            'inspection' => Carbon::parse($insp)->format('Y-m-d'),
            'insurance_company' => $ins_comp,
            'insurance_manager' => $ins_man
        ];
    }

}
