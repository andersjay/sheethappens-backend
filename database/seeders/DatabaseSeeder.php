<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Local;
use App\Models\Sentences;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Local::insert([
            ['id' => 1, 'name' => 'Casa', 'icon_name' => '🏠', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Trabalho', 'icon_name' => '💼', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Faculdade', 'icon_name' => '🎓', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Shopping', 'icon_name' => '🛍️', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Restaurante', 'icon_name' => '🍽️', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Posto de gasolina', 'icon_name' => '⛽', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Aeroporto', 'icon_name' => '✈️', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Casa de um amigo', 'icon_name' => '🏡', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Banheiro público', 'icon_name' => '🚽', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Natureza', 'icon_name' => '🌳', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Ônibus', 'icon_name' => '🚌', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => 'Escola', 'icon_name' => '🏫', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => 'Praia', 'icon_name' => '🏖️', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'name' => 'Hospital', 'icon_name' => '🏥', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => 'Evento/Festa', 'icon_name' => '🎉', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => 'Supermercado', 'icon_name' => '🛒', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'name' => 'Academia', 'icon_name' => '🏋️', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'name' => 'Biblioteca', 'icon_name' => '📚', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 19, 'name' => 'Hotel', 'icon_name' => '🏨', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'name' => 'Cinema', 'icon_name' => '🎬', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Sentences::insert([
            ['id' => 1, 'sentence' => 'Bom trabalho! Mais uma descarga de sucesso hoje.', 'author' => 'Toalete Anônimo', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'sentence' => 'Você é o herói que o banheiro precisava.', 'author' => 'Mestre do Trono', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'sentence' => 'Cada ida ao banheiro é um passo a menos para um intestino entupido.', 'author' => 'Sábio da Privada', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'sentence' => 'Parabéns por manter o fluxo em dia!', 'author' => 'Coach Intestinal', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'sentence' => 'Mais uma vez você provou que ninguém segura o seu sistema digestivo.', 'author' => 'O Observador do Vaso', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'sentence' => 'A verdadeira paz interior começa no vaso sanitário.', 'author' => 'Monge do Banheiro', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'sentence' => 'Seu intestino te agradece por essa dedicação diária.', 'author' => 'Dr. Laxante', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'sentence' => 'Você está vencendo a batalha contra o intestino preguiçoso.', 'author' => 'Comandante do Cocô', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'sentence' => 'Nem todos os heróis usam capa. Alguns só vão ao banheiro todo dia.', 'author' => 'Lenda do Papel Higiênico', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'sentence' => 'Hoje você fez história... no banheiro.', 'author' => 'Narrador da Vida Real', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
