<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $createInvoice = new Permission();
        $createInvoice->name         = 'create-invoice';
        $createInvoice->display_name = 'Create Invoice'; // optional
        $createInvoice->description  = 'create new Invoice'; // optional
        $createInvoice->save();

        $editInvoice = new Permission();
        $editInvoice->name         = 'edit-invoice';
        $editInvoice->display_name = 'Edit Invoice'; // optional
        $editInvoice->description  = 'Edit new Invoice'; // optional
        $editInvoice->save();
        
        $deleteInvoice = new Permission();
        $deleteInvoice->name         = 'delete-invoice';
        $deleteInvoice->display_name = 'Delete Invoice'; // optional
        $deleteInvoice->description  = 'Delete new Invoice'; // optional
        $deleteInvoice->save();

    }
}
