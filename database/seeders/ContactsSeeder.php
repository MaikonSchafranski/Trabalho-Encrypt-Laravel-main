<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts')->insert([
            'name'             => 'João Silva',
            'email'            => Crypt::encrypt('joao@email.com'),
            'telefone'         => Crypt::encrypt('(00) 9999-9999'),
            'data_nascimento'  => Crypt::encrypt('1990-05-15')
        ]);

        DB::table('contacts')->insert([
            'name'             => 'Maria Souza',
            'email'            => Crypt::encrypt('maria@email.com'),
            'telefone'         => Crypt::encrypt('(00) 5456-9999'),
            'data_nascimento'  => Crypt::encrypt('2020-05-18')
        ]);
    }
}
