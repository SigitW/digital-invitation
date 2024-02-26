<?php

namespace App\Models;

use CodeIgniter\Model;

class TPemilikAcara extends Model
{
    protected $table            = 't_pemilik_acara';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['invitation_id', 'disebut', 'nama', 'gelar_depan', 'gelar_belakang', 'jenis_kelamin', 'agama', 'alamat', 'nama_bapak', 'gelar_depan_bapak', 'gelar_belakang_bapak', 'nama_ibu', 'gelar_depan_ibu', 'gelar_belakang_ibu', 'status_alm_bapak', 'status_alm_ibu', 'flag', 'created_who', 'updated_who'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
