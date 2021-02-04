<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')->insert(

        [
         'ticket_title' => 'Book',
         'ticket_country' => 'Turkey',
         'ticket_detail' => 'Lorem ipsum dolar sit amet',
         'ticket_importance' => 'high',
         'ticket_status' => '0',
        ],
        [
         'ticket_title' => 'Pencil',
         'ticket_country' => 'Turkey',
         'ticket_detail' => 'Lorem ipsum dolar sit amet',
         'ticket_importance' => 'low',
         'ticket_status' => '0',
        ]

    );

    }
}
