<?php
use App\Models\Drink;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Monster Ultra Sunrise',
                'descr' => 'A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings.',
                'caff' => 150,
                'image' => '/images/MonsterUltraSunrise.jpg'
            ],
            [
                'name' => 'Black Coffee',
                'descr' => 'The classic, the average 8oz. serving of black coffee has 95mg of caffeine.',
                'caff' => 95,
                'image' => '/images/BlackCoffee.jpg'
            ],
            [
                'name' => 'Americano',
                'descr' => 'Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving.',
                'caff' => 77,
                'image' => '/images/Americano.jpg'
            ],
            [
                'name' => 'Sugar free NOS',
                'descr' => 'Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings.',
                'caff' => 260,
                'image' => '/images/SugarFreeNOS.jpg'
            ],
            [
                'name' => '5 Hour Energy',
                'descr' => 'And amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going.',
                'caff' => 200,
                'image' => '/images/5HourEnergy.jpg'
            ],
        ];
        foreach($data as $item){
            Drink::create($item);
        }
    }
}
/*
 *





 */
