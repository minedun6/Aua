<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_section')->insert([
            'name' => 'Ecole Nationale d\'Architecture et d\'Urbanisme',
            'director' => 'Najla Allani Bouhoula',
            'address' => 'Rue El qods Sidi Bou Said Tunisie',
            'email1' => 'najla.allani@enau.rnu.tn',
            'email2' => null,
            'phone1' => '+21671729263',
            'phone2' => null,
            'mobile_phone' => '+21698675646',
            'fax' => '+21671729264',
            'website' => 'www.enau.rnu.tn',
            'recognition_by_government' => true,
            'recognition_by_section_member' => true,
            'reasons' => null,
            'international_accreditation' => false,
            'accreditation_body' => null,
            'architecture_is_main_course' => true,
            'architecture_is_department' => true,
            'number_of_departments' => 3,
            'study_years' => 6,
            'mondatory_training_years' => 1,
            'training_included_in_curriculum' => 1,
            'number_of_students' => 2500,
            'total_number_of_teachers' => 300,
            'number_of_teachers_architects' => 150,
            'masters_degree' => 1,
            'phd' => 1,
            'average_number_of_diplomas_per_year' => 300,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name' => 'Université privée Ibn Khaldoun',
            'director' => null,
            'address' => 'Jawdet Al Hayet Chotrana 1 2036 - La soukra ',
            'email1' => 'info@uik.ens.tn',
            'email2' => null,
            'phone1' => '+21670694194',
            'phone2' => null,
            'mobile_phone' => null,
            'fax' => null,
            'website' => 'www.uik.ens.tn',
            'recognition_by_government' => true,
            'recognition_by_section_member' => true,
            'reasons' => null,
            'international_accreditation' => false,
            'accreditation_body' => null,
            'architecture_is_main_course' => false,
            'architecture_is_department' => true,
            'number_of_departments' => 5,
            'study_years' => 6,
            'mondatory_training_years' => 1,
            'training_included_in_curriculum' => 1,
            'number_of_students' => null,
            'total_number_of_teachers' => null,
            'number_of_teachers_architects' => null,
            'masters_degree' => null,
            'phd' => null,
            'average_number_of_diplomas_per_year' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name' => 'Ecole supérieure d\'Architecture, d\'audiovisuel et de design',
            'director' => 'Mr MOULDI CHAABANI',
            'address' => '01 Rue Baudelaire El Omrane, 1005 - Tunis - Tunisie',
            'email1' => 'kmimita@esad.tn',
            'email2' => null,
            'phone1' => '+21671957004',
            'phone2' => '+21671957005',
            'mobile_phone' => '+21698354036',
            'fax' => '+21671957028',
            'website' => 'www.esad.tn',
            'recognition_by_government' => true,
            'recognition_by_section_member' => true,
            'reasons' => null,
            'international_accreditation' => false,
            'accreditation_body' => null,
            'architecture_is_main_course' => false,
            'architecture_is_department' => true,
            'number_of_departments' => 3,
            'study_years' => 5,
            'mondatory_training_years' => 1,
            'training_included_in_curriculum' => 1,
            'number_of_students' => 116,
            'total_number_of_teachers' => 40,
            'number_of_teachers_architects' => 17,
            'masters_degree' => true,
            'phd' => false,
            'average_number_of_diplomas_per_year' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
