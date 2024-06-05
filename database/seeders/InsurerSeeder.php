<?php

namespace Database\Seeders;

use App\Helpers\UuidGeneratorHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsurerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insurerNames = [
            'Care Health Insurance Limited',
            'Chola MS General Insurance Company Limited',
            'Godigit Genral Insruance limited',
            'HDFC ERGO General Insurance Co.Ltd',
            'IFFCO-TOKIO GENERAL INSURANCE COMPANY LTD',
            'Liberty General Insurance Limited',
            'Magma HDI General Insurance Company Limited',
            'National Insurance Company Limited',
            'The New India Assurance Co. Ltd',
            'The Oriental Insurance Company Ltd',
            'Reliance General Insurance Company Limited',
            'SBI General Insurance Company Limited',
            'Star Health and Allied Insurance Co Ltd',
            'TATA AIG General Insurance Co Ltd',
            'Future Generali India Insurance Company Limited',
            'ICICI Lombard General Insurance Company Limited',
            'Royal Sundaram General Insurance Co. Ltd',
            'Zuno General Insurance Limited',
            'Raheja QBE General Insurance Company Limited',
            'Bajaj Allianz General Insurance Company Limited',
            'Aditya Birla Health Insurance Co. Limited',
            'United India Insurance Company Limited',
            'Niva Bupa Health Insurance Company Limited',
            'Kotak General Insurance Company Ltd.',
            'Navi General Insurance private Limited'
        ];

        foreach ($insurerNames as $name) {
            $uuid = UuidGeneratorHelper::generateUniqueUuidForTable('insurers');
            DB::table('insurers')->insert([
                'uuid' => $uuid,
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->command->info('Insurer Done');
    }
}
