<?php

namespace App\Imports;

use App\Models\SiaranPers;
use Maatwebsite\Excel\Concerns\ToModel;

class SiaranPersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!isset($row['Judul Pemberitaan']) || !isset($row['Tanggal']) || !isset($row['Nama Media']) || !isset($row["Link Pemberitaan/Scan File"]) || !isset($row["Kategori Media"])){
            return null;
        }
        return new SiaranPers([
            'judul' => $row["Judul Pemberitaan"] ?? null,
            'tanggal' => $row["Tanggal"]  ?? null,
            'nama_media' => $row["Nama Media"] ?? null,
            'link_berita' => $row["Link Pemberitaan/Scan File"] ?? null,
            'kategori_media'=> $row["Kategori Media"] ?? null

        ]);
    }
}
