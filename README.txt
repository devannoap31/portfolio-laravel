cara akses CRUD
localhost:8000/login

App\Models\User::create(['name' => 'Admin Devanno', 'email' => 'admin@devanno.com', 'password' => bcrypt('rahasia123')]);