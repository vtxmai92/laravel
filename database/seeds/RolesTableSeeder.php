<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Product Owner'; // optional
        $owner->description  = 'Product owner is the owner of a given project'; // optional
        $owner->save();

        $owner = new Role();
        $owner->name         = 'admin';
        $owner->display_name = 'Admin User'; // optional
        $owner->description  = 'Admin user is the owner of a given project'; // optional
        $owner->save();
    }
}
