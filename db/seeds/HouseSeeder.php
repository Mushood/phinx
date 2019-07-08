<?php


use Phinx\Seed\AbstractSeed;

class HouseSeeder extends AbstractSeed
{
    public function getDependencies()
    {
      return [
          'UserSeeder'
      ];
    }

    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
              [
                  'title'    => 'foo'
              ],[
                  'title'    => 'bar'
              ]
          ];

          $houses = $this->table('houses');
          $houses->insert($data)
                ->save();
    }
}
