<?php

use Illuminate\Database\Seeder;
use App\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'number' => 1,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 2,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 3,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 4,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 5,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 6,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 7,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 8,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 9,
            'amount_people' => rand(1,6),
        ])->save();
        Table::create([
            'number' => 10,
            'amount_people' => rand(1,6),
        ])->save();
    }
}
