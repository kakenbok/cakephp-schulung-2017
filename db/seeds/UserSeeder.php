<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
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
        $data = array(
            [
                'username'    => 'Anna',
                'password' => '*anna'
            ],
            [
                'username'    => 'Maria',
                'password' => 'maria*'
            ],
            [
                'username'    => 'Horst',
                'password' => 'horsti72*'
            ]
        );

        $users = $this->table('users');

        $users->truncate();

        $users->insert($data)
              ->save();

    }
}
