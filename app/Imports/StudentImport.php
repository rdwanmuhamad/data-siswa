<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'nis' => $row['nis'],
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
