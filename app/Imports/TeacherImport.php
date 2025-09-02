<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TeacherImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Student([
            'nik' => $row['nik'],
            'name' => $row['name'],
            'email' => $row['email'],
            'address' => $row['address'],
            'provinces_id' => $row['provinces_id'],
            'regencies_id' => $row['regencies_id'],
            'number_phone' => $row['number_phone'],
            'status' => $row['status'],
        ]);
    }
}
