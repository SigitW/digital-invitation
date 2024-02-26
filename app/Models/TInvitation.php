<?php

namespace App\Models;

use CodeIgniter\Model;

class TInvitation extends Model
{
    protected $table            = 't_invitation';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['theme_class_id', 'theme_id', 'jenis_theme_id', 'nama', 'email', 'no_telp', 'kode_desa', 'kode_kec', 'kode_kota', 'kode_prov', 'song_name', 'tanggal_acara', 'lokasi_acara', 'jenis_lokasi_acara', 'flag', 'created_who', 'updated_who'];

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
