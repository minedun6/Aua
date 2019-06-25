<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class MemberSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      DB::table('member_section')->insert([
          'name'                 => 'Ordre Des Architecte De Tunisie',
          'country_id'           => '1',
          'user_id'              => '5',
          'main_language'        => 'Arabic',
          'address'              => '80 AVENUE LOUIS BRAILLE 1002 TUNIS-BELVEDERE',
          'email'                => 'direction.oat@orange.tn',
          'phone'                => '+21631387000',
          'fax'                  => '+21671842748',
          'website'              => 'www.oat.com.tn',
          'admincontact'         => 'CHIHEB AOUN',
          'position'             => 'DIRECTEUR ADMINISTRATIF',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);



      DB::table('member_section')->insert([
          'name'                 => 'Ordre Des Architecte Algeriens',
          'country_id'           => '2',
          'user_id'              => '6',
          'main_language'        => 'Arabic',
          'address'              => 'Cité Djouhara 554 Tours CNEP – Les Halles – Belouizdad – Alger,  Algérie',
          'email'                => 'secretariatcnoaa@gmail.com',
          'phone'                => '+21323511655',
          'fax'                  => ' ',
          'website'              => 'www.cnoa.dz',
          'admincontact'         => 'DERGHAL ABD EL KRIM ',
          'position'             => 'ADMINISTRATEUR',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);



      DB::table('member_section')->insert([
          'name'                 => 'Architecture Branch of Libyan syndictae of engineers ',
          'country_id'           => '3',
          'user_id'              => '7',
          'main_language'        => 'Arabic',
          'address'              => 'Tripoli , Uiversity road ,facing ministry of agriculture',
          'email'                => 'engineerslibyan@gmail.com;',
          'phone'                => '+218217211693',
          'fax'                  => '+218213603599',
          'website'              => 'www.les.com.ly',
          'admincontact'         => 'Mohammed Ramadan Rhoma',
          'position'             => 'Financial & Admin. Affairs',
          'created_at'        => Carbon::now(),
          'updated_at'        => Carbon::now()
      ]);



/*
        DB::table('member_section')->insert([
            'name'                 => 'Ordem dos Arquitectos de Angola - AO',
            'country'              => 'Angola',
            'user_id'              => '8',
            'main_language'        => 'Portugues',
            'address'              => 'Vila - Alice Rua Aníbal de Melo nº 109',
            'email'                => 'geral@arquitectos-angola.org',
            'phone'                => '+244926975502',
            'fax'                  => '+222100464',
            'website'              => 'www.arquitectos-angola.org',
            'admincontact'         => 'Nanete Lopes',
            'position'             => 'Secretary General Assistant',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'The Order Of Architects is still on the process of Its creation. At this point the process is the assembly of the republic',
            'country'              => 'Mozambique',
            'user_id'              => '9',
            'main_language'        => 'Portugese',
            'address'              => 'Rua da Argélia nº 385. POB 257',
            'email'                => '',
            'phone'                => '+2121486032',
            'fax'                  => '+2121486032',
            'website'              => 'http://www.architecture.uem.mz/',
            'admincontact'         => '',
            'position'             => 'Deputy Director',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'ARCHITECTURAL ASSOCIATION OF KENYA',
            'country'              => 'Kenya',
            'user_id'              => '10',
            'main_language'        => 'English',
            'address'              => 'The Professional Centre, Parliament Road.',
            'email'                => 'aak@aak.or.ke',
            'phone'                => '+2540202224806',
            'fax'                  => '+2540202220582',
            'website'              => 'www.aak.or.ke',
            'admincontact'         => 'MR. JACOB MWANGI',
            'position'             => 'CHIEF EXECUTIVE OFFICER (CEO)',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'MAURITIUS ASSOCIATION OF ARCHITECTS',
            'country'              => 'Mauritius',
            'user_id'              => '11',
            'main_language'        => 'English',
            'address'              => '4th FLOOR DISCOVERY HOUSE, SAINT JEAN ROAD, QUATRE BORNES',
            'email'                => 'maa-arch@intnet.mu',
            'phone'                => '+2304660324',
            'fax'                  => '+2304660324',
            'website'              => '',
            'admincontact'         => 'Mrs Renou RAMCHURN',
            'position'             => 'Administrative Secretariat',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'UGANDA SOCIETY OF ARCHITECTS(USA)',
            'country'              => 'Uganda',
            'user_id'              => '12',
            'main_language'        => 'English',
            'address'              => 'PLOT 1B, KIRA ROAD, KALAMU HOUSE, FIRST FLOOR WING A, P.O BOX 9514, KAMPALA',
            'email'                => 'archi.uganda@gmail.com',
            'phone'                => '+256414232963',
            'fax'                  => '+256414232963',
            'website'              => 'www.architects.ug',
            'admincontact'         => 'Ms. Birungi Charity',
            'position'             => 'Executive Secretary Asst.',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Sudanese Institute of Architects',
            'country'              => 'Sudan',
            'user_id'              => '13',
            'main_language'        => 'Arabic',
            'address'              => 'DAR EL MOHANDIS - EL AMARAT  (7)st - Khartoum - Sudan',
            'email'                => 'sia.sud@gmail.com',
            'phone'                => '+249183488756',
            'fax'                  => '',
            'website'              => '',
            'admincontact'         => 'Mr. Ismail Hassan Ali',
            'position'             => 'Executive Manager',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'ARCHITECTS ASSOCIATION OF TANZANIA',
            'country'              => 'Tanzania',
            'user_id'              => '14',
            'main_language'        => 'ENGLISH/SWAHILI',
            'address'              => 'P.O BOX 8275 DAR ES SALAA, TANZANIA.',
            'email'                => 'secretary.aat44@yahoo.com;',
            'phone'                => '+255768373897',
            'fax'                  => '',
            'website'              => 'www.aat.archi',
            'admincontact'         => 'MS. ATTIE AHMED ALLY',
            'position'             => 'EXECUTIVE SECRETARY',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'RWANDA INSTITUTE OF ARCHITECTS',
            'country'              => 'Rwanda',
            'user_id'              => '15',
            'main_language'        => 'English',
            'address'              => 'ECOBANK HEADQUATERS, 9th Floor',
            'email'                => 'architectsofrwanda@gmail.com',
            'phone'                => '+250788505353',
            'fax'                  => '+218',
            'website'              => '',
            'admincontact'         => 'RUKUNDO PATRICK',
            'position'             => 'EXECUTIVE SECRETARY',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ordre National des Architectes du Bénin',
            'country'              => 'Benine',
            'user_id'              => '16',
            'main_language'        => 'Français',
            'address'              => 'Lot 3-C Zone CENSAD - AGLANGANDAN',
            'email'                => 'onaub@yahoo.fr',
            'phone'                => '+22994989595',
            'fax'                  => '',
            'website'              => 'www.onaub.org',
            'admincontact'         => 'TOMANAGA Cyrille Roger',
            'position'             => 'Président',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ordre des Architectes du Burkina Faso',
            'country'              => 'Burkina Faso',
            'user_id'              => '17',
            'main_language'        => 'Français',
            'address'              => '01 BP 5576 Ouagadougou 01 - Burkina Faso',
            'email'                => 'info@oab-faso.org',
            'phone'                => '+22666390981',
            'fax'                  => '',
            'website'              => '',
            'admincontact'         => '',
            'position'             => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Conseil National de l\'Ordre des Architectes',
            'country'              => 'Ivory Coast',
            'user_id'              => '18',
            'main_language'        => 'Français',
            'address'              => 'Cocody Danga, face cité BAD',
            'email'                => 'architectes.ci@gmail.com',
            'phone'                => '+22522485231',
            'fax'                  => '+22522442957',
            'website'              => 'www.cnoa.ci',
            'admincontact'         => 'Marcelle OGNI',
            'position'             => 'Secrétaire Exécutive',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ghana Institute of Architects',
            'country'              => 'Ghana',
            'user_id'              => '19',
            'main_language'        => 'English',
            'address'              => 'Number 3 Abdul Diouf Road, Ridge, Accra, Ghana',
            'email'                => 'administrator@gia.org.gh',
            'phone'                => '+0302229464',
            'fax'                  => '',
            'website'              => 'www.gia.org.gh',
            'admincontact'         => 'Mr. Francis Kwayisi',
            'position'             => 'Administrator',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Nigerian Institute of Architect',
            'country'              => 'Nigeria',
            'user_id'              => '20',
            'main_language'        => 'English',
            'address'              => 'Plot 215, Muazu Magaji / Patrick Yakowa Street, Katampe Extension B19, Abuja',
            'email'                => 'info@nigerianinstituteofarchitects.org',
            'phone'                => '+2348065503858',
            'fax'                  => '',
            'website'              => '',
            'admincontact'         => 'Arc (Mrs) Jamila S. Ahmed',
            'position'             => 'Manager, Corporate Services',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'ORDRE DES ARCHITECTES DU SENEGAL',
            'country'              => 'Senegal',
            'user_id'              => '21',
            'main_language'        => 'Français',
            'address'              => '17, BOULEVARD DE LA REPUBLIQUE- BP : 6375 - DAKAR -SENEGAL',
            'email'                => 'odasenegal@gmail.com;',
            'phone'                => '+221338210476',
            'fax'                  => '',
            'website'              => 'www.ordredesarchitectes.sn',
            'admincontact'         => 'OULIMATA KONATE',
            'position'             => 'SECRETAIRE DE L\'ODAS',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ordre National des Architectes du Niger',
            'country'              => 'Niger',
            'user_id'              => '22',
            'main_language'        => 'Français',
            'address'              => 'BP 177 Niamey, Rue onesime reclu, villa 144, Village de la francophonie',
            'email'                => 'niger.archis@yahoo.fr;',
            'phone'                => '+22721332649',
            'fax'                  => '',
            'website'              => '',
            'admincontact'         => 'Adamou SOULEY',
            'position'             => 'Président',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ordre Mauritanien des Architectes',
            'country'              => 'Mauritania',
            'user_id'              => '23',
            'main_language'        => 'Arabic',
            'address'              => 'Ilot P 52E, apparts 8, B.P : 5079, Nouakchott - Mauritanie',
            'email'                => 'omarchitectes@gmail.com',
            'phone'                => '+22245259679',
            'fax'                  => '',
            'website'              => 'www.oma.mr',
            'admincontact'         => 'Ismael Chouaib',
            'position'             => 'Secretaire Général',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'Ordre National des Architectes du Cameroun',
            'country'              => 'Cameroon',
            'user_id'              => '24',
            'main_language'        => 'Français/Anglais',
            'address'              => 'Rue Marcus ETOUNDI NKOL ETON Yaoundé 1er',
            'email'                => 'onac2008archi@yahoo.com',
            'phone'                => '+237242030522',
            'fax'                  => '+218',
            'website'              => '',
            'admincontact'         => '',
            'position'             => '',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'SOCIETE DES ARCHITECTES DU CONGO',
            'country'              => 'Congo DRC',
            'user_id'              => '25',
            'main_language'        => 'Français',
            'address'              => '8,AV ISIRO, Immeuble OKIMO, 2e  ETAGE , Commune de la Gombe/KINSHASA /RDC',
            'email'                => 'delphiniyenzay@gmail.com;',
            'phone'                => '+243998168837',
            'fax'                  => '',
            'website'              => 'www.sacrdcongo.com',
            'admincontact'         => ' Delphin I Yenzay',
            'position'             => 'Secrètaire Administratif',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

        DB::table('member_section')->insert([
            'name'                 => 'ORDRE GABONAIS DES ARCHITECTES',
            'country'              => 'Gabon',
            'user_id'              => '26',
            'main_language'        => 'Français',
            'address'              => 'Quartier Likouala, Immeuble SNI, 1er étage, Appartement A1, BP: 4071 Libreville',
            'email'                => 'ordre.gab.archi@gmail.com',
            'phone'                => '+24103031608',
            'fax'                  => '',
            'website'              => '',
            'admincontact'         => 'GUIROUNGUI Ornella',
            'position'             => 'Assistante',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);

*/
    }
}
