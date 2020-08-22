<?php

class PengumumanSeeder extends Seeder
{
    private $table = 'ta_pengumuman';

    public function run()
    {
        $this->db->truncate($this->table);
        $data = [
            'pengumuman_judul' => 'Lelang mobil',
            'pengumuman_isi' => 'Lelang mobil lama',
            'pengumuman_user_id' => 1
        ];

        return $this->db->insert($this->table, $data);
    }
}